<?php
$page = 'past-principals';
include '../database_connection.php';
include '../functions.php';

if (!is_admin_login()) {
    header('location:../admin_login.php');
    exit();
}

include 'admin-header.php';

$message = ""; // Initialize the variable

$sql = "SELECT * FROM about_past_principals WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => (int)$_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (count($_POST) > 0) {
    $sql = "UPDATE about_past_principals SET name = :name, years = :years, img = :img WHERE id = :id";
    $params = array(
        ':name' => $_POST['name'],
        ':years' => $_POST['years'],
        ':img' => '',
        ':id' => (int)$_GET['id'],
    );

    if (!empty($_FILES['image']['name'])) {
        $uploadDirectory = '../content/img/img-history/former-principals/';
        $uploadedFileName = $_FILES['image']['name'];
        $uploadFilePath = $uploadDirectory . $uploadedFileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFilePath)) {
            $params[':img'] = $uploadedFileName;
        } else {
            $message .= "<script>alert('Error uploading the image');</script>";
        }
    }

    try {
        $stmt = $connect->prepare($sql);
        $stmt->execute($params);
        $message .= "<script>alert('Record updated successfully'); window.open('../history/former-principals', '_blank');</script>";
    } catch (PDOException $e) {
        $message .= "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
    
}
?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Edit Past Principals</h1>

    <?php if(isset($message)) {echo $message; } ?>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Past Principal</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Edit Past Principal
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="Product_name" class="form-control"
                                value="<?php echo $row['name']; ?>" />
                        </div>
                    </div>
                   
                    

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Years</label>
                            <input type="text" name="years" id="years" class="form-control"
                                value="<?php echo $row['years']; ?>" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" id="featured_img" class="form-control" accept=".webp"
                            onchange="checkFileType()">
                        <p id="fileMessage"></p>
                        <?php if (!empty($row['img'])): ?>
                        <p>Current Image: <?php echo $row['img']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <script>
                    function checkFileType() {
                        const fileInput = document.getElementById('featured_img');
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

                <div class="mt-4 mb-3 text-center">
                    <input type="submit" name="submit" class="btn btn-success" value="Edit" />
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'admin-footer.php';
?>