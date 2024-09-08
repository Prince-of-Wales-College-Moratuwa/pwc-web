<?php
$page = 'publications';

include '../../database_connection.php';
include '../../functions.php';

if (!is_admin_login()) {
    header('location:../../admin_login.php');
    exit();
}

include '../admin-header.php';

// Fetch the photo data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM golden_captures WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->execute(array(':id' => $id));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    echo '<script>alert("Invalid ID"); window.location.href = "golden-captures.php";</script>';
    exit();
}

if (isset($_POST['edit_photo'])) {
    $formdata = array(
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'photographer' => $_POST['photographer'],
        'date' => $_POST['date'],
    );

    $params = array(
        ':title' => $formdata['title'],
        ':description' => $formdata['description'],
        ':photographer' => $formdata['photographer'],
        ':date' => $formdata['date'],
        ':photo' => $row['photo'], // Ensure this is set even if not updating
        ':id' => $id
    );

    if (!empty($_FILES['photo']['name'])) {
        // Delete the old photo if it exists
        if (!empty($row['photo']) && file_exists('../../content/img/golden-captures/' . $row['photo'])) {
            $currentImagePath = '../../content/img/golden-captures/' . $row['photo'];
            unlink($currentImagePath);
        }

        // Handle new file upload
        $uploadDirectory = '../../content/img/golden-captures/';
        $uploadedFileName = $_FILES['photo']['name'];
        $uploadFilePath = $uploadDirectory . $uploadedFileName;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFilePath)) {
            $params[':photo'] = $uploadedFileName;
        } else {
            echo "<script>alert('Error uploading the image');</script>";
        }
    }

    $sql = "UPDATE golden_captures 
            SET photo = :photo, 
                title = :title, 
                description = :description, 
                photographer = :photographer, 
                date = :date
            WHERE id = :id";

    $stmt = $connect->prepare($sql);

    try {
        $stmt->execute($params);
        echo "<script>alert('Photo updated successfully'); window.location.href = '/publications/golden-captures/';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}
?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Edit Photo</h1>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="publications.php">Publications</a></li>
        <li class="breadcrumb-item active">Edit Photo</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Edit Photo
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="<?php echo htmlspecialchars($row['title']); ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control"
                                value="<?php echo htmlspecialchars($row['date']); ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Photographer</label>
                            <input type="text" name="photographer" id="photographer" class="form-control"
                                value="<?php echo htmlspecialchars($row['photographer']); ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" id="description" class="form-control"
                                value="<?php echo htmlspecialchars($row['description']); ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="photo" id="photo" class="form-control" accept=".webp"
                                onchange="checkFileType()">
                            <p id="fileMessage"></p>
                            <?php if (!empty($row['photo'])): ?>
                                <p>Current Image: <img src="../content/img/golden-captures/<?php echo htmlspecialchars($row['photo']); ?>" alt="Current Image" style="max-width: 150px; height: auto;" /></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-3 text-center">
                    <input type="submit" name="edit_photo" class="btn btn-success" value="Update" />
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../admin-footer.php';
?>

<script>
    function checkFileType() {
        const fileInput = document.getElementById('photo');
        const fileMessage = document.getElementById('fileMessage');

        const allowedExtensions = /(\.webp)$/i;

        if (!allowedExtensions.test(fileInput.value)) {
            fileInput.value = '';
            fileMessage.innerHTML = 'Please upload a valid .webp file.';
        } else {
            fileMessage.innerHTML = '';
        }
    }
</script>
