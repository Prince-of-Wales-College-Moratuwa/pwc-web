<?php
$page = 'principal-msg';
include '../database_connection.php';
include '../functions.php';

if (!is_admin_login()) {
    header('location:../admin_login.php');
    exit();
}

include 'admin-header.php';

$message = "";

if (count($_POST) > 0) {
    $sql = "UPDATE principal_msg SET name = :title, msg = :editorContent";
    $params = array(
        ':title' => $_POST['title'],
        ':editorContent' => $_POST['editorContent'],
    );

    if (!empty($_FILES['image']['name'])) {
      
        $newFileName = 'principal-pwc.webp';
        $uploadedFilePath = '../content/img/img-home/' . $newFileName;
    
        
        if (file_exists($uploadedFilePath)) {
            unlink($uploadedFilePath);
        }
    
        
        $params[':photo'] = $newFileName;
    
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath)) {
            $sql .= ", img = :photo";
        } else {
            $message = "<script>alert('Error: Failed to move the uploaded file.');</script>";
        }
    }
    
    

    $sql .= " WHERE id = :id";
    $params[':id'] = $_GET['id'];

    $stmt = $connect->prepare($sql);

    try {
        $stmt->execute($params);
        $message = "<script>alert('Msg updated successfully'); window.open('/principal-message', '_blank');</script>";
    } catch (PDOException $e) {
        $message = "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}

$sql = "SELECT * FROM principal_msg WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Principal's Msg</h1>

    <?php if(isset($message)) {echo $message; } ?>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Principal's Msg</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
		Principal's Msg
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="title" id="Product_name" class="form-control"
                                value="<?php echo $row['name']; ?>" />
                        </div>
                    </div>
                    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div id="editor"></div>
                            <input type="hidden" name="editorContent" id="editorContent"
                                value="<?php echo $row['msg']; ?>">
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#editor'))
                                    .then(editor => {
                                        editor.setData(document.querySelector('#editorContent').value);
                                        editor.model.document.on('change:data', () => {
                                            document.querySelector('#editorContent').value = editor
                                                .getData();
                                        });
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
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