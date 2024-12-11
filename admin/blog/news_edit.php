<?php
$page = 'blog';
include '../../database_connection.php';
include '../../functions.php';

if (!is_admin_login()) {
    header('location:../../admin_login.php');
    exit();
}

include '../admin-header.php';

$sql = "SELECT * FROM pwc_db_news WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute([':id' => $_GET['id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (count($_POST) > 0) {
    $formdata['category'] = trim($_POST["category"]);

    if ($formdata['category'] == "Sports") {
        $categoryslug = "sports";
    } elseif ($formdata['category'] == "Aesthetic") {
        $categoryslug = "aesthetic";
    } elseif ($formdata['category'] == "Education") {
        $categoryslug = "education";
    } elseif ($formdata['category'] == "Academic") {
        $categoryslug = "academic";
    } elseif ($formdata['category'] == "Announcements") {
        $categoryslug = "announcements";
    } elseif ($formdata['category'] == "Exclusives") {
        $categoryslug = "exclusives";
    } else {
        $categoryslug = "unknown-category";
    }

    $formdata['categoryslug'] = $categoryslug;

    $formdata['caption'] = trim($_POST['caption']);
    $formdata['tags'] = trim($_POST['tags']);
    
    $params = [
        ':title' => $_POST['title'],
        ':editorContent' => $_POST['editorContent'],
        ':category' => $_POST['category'],
        ':slug' => $_POST['slug'],
        ':author' => $_POST['author'],
        ':date' => $_POST['date'],
        ':categoryslug' => $categoryslug,
        ':schoolPride' => $_POST['schoolPride'],
        ':caption' => $formdata['caption'], // Added caption
        ':tags' => $formdata['tags'], // Added tags
        ':id' => $_GET['id'],
    ];
    
    
    if (!empty($_FILES['image']['name'])) {
        if (!empty($row['photo']) && file_exists('../../content/img/img-blog/' . $row['photo'])) {
            $currentImagePath = '../../content/img/img-blog/' . $row['photo'];
            unlink($currentImagePath);
        }
    
        $uploadDirectory = '../../content/img/img-blog/';
        $uploadedFileName = $_FILES['image']['name'];
        $uploadFilePath = $uploadDirectory . $uploadedFileName;
    
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFilePath)) {
            $params[':photo'] = $uploadedFileName;
        } else {
            $message = "<script>alert('Error uploading the image');</script>";
        }
    } else {
        // No new image uploaded, use the existing image
        if (!empty($row['photo'])) {
            $params[':photo'] = $row['photo'];
        } else {
            $params[':photo'] = ''; 
        }
    }
    
    $sql = "UPDATE pwc_db_news 
    SET title = :title, 
        content = :editorContent, 
        category = :category, 
        slug = :slug, 
        author = :author, 
        date = :date, 
        categoryslug = :categoryslug, 
        schoolPride = :schoolPride, 
        caption = :caption,  
        tags = :tags,        
        photo = :photo 
    WHERE id = :id";


$stmt = $connect->prepare($sql);

try {
    $stmt->execute($params);
    $message = "<script>alert('Article updated successfully'); window.open('/blog/" . $_POST['slug'] . "', '_blank');</script>";
} catch (PDOException $e) {
    $message = "<script>alert('Error: " . $e->getMessage() . "');</script>";
}
}

$sql = "SELECT * FROM pwc_db_news WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute([':id' => $_GET['id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$row['photo'] = isset($row['photo']) ? $row['photo'] : '';

?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Edit Article</h1>

    <?php if(isset($message)) {echo $message; } ?>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
        <li class="breadcrumb-item active">Edit Article</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            Edit Article
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <!-- Title -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" id="Product_name" class="form-control"
                                value="<?php echo $row['title']; ?>" required />
                        </div>
                    </div>

                    <!-- CKEditor for Description -->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div id="editor"></div>
                            <input type="hidden" name="editorContent" id="editorContent"
                                value="<?php echo $row['content']; ?>">
                            <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#editor'))
                                    .then(editor => {
                                        editor.setData(document.querySelector('#editorContent').value);
                                        editor.model.document.on('change:data', () => {
                                            document.querySelector('#editorContent').value = editor.getData();
                                        });
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="Sports" <?php echo ($row['category'] == 'Sports') ? 'selected' : ''; ?>>Sports</option>
                                <option value="Aesthetic" <?php echo ($row['category'] == 'Aesthetic') ? 'selected' : ''; ?>>Aesthetic</option>
                                <option value="Education" <?php echo ($row['category'] == 'Education') ? 'selected' : ''; ?>>Education</option>
                                <option value="Academic" <?php echo ($row['category'] == 'Academic') ? 'selected' : ''; ?>>Academic</option>
                                <option value="Announcements" <?php echo ($row['category'] == 'Announcements') ? 'selected' : ''; ?>>Announcements</option>
                                <option value="Exclusives" <?php echo ($row['category'] == 'Exclusives') ? 'selected' : ''; ?>>Exclusives</option>
                            </select>
                        </div>
                    </div>

                    <!-- Author -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <select name="author" id="author" class="form-control" required>
                                <option value="CMBU" <?php echo ($row['author'] == 'CMBU') ? 'selected' : ''; ?>>CMBU</option>
                                <option value="Principal" <?php echo ($row['author'] == 'Principal') ? 'selected' : ''; ?>>Principal</option>
                                <option value="Admin" <?php echo ($row['author'] == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                                <option value="Teacher" <?php echo ($row['author'] == 'Teacher') ? 'selected' : ''; ?>>Teacher</option>
                                <option value="Student" <?php echo ($row['author'] == 'Student') ? 'selected' : ''; ?>>Student</option>
                            </select>
                        </div>
                    </div>

                    <!-- Date and Time -->
                    <?php $dateTimeValue = date('Y-m-d\TH:i', strtotime($row['date'])); ?>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Date and Time</label>
                            <input type="datetime-local" name="date" id="date" class="form-control"
                                value="<?php echo $dateTimeValue; ?>" required />
                        </div>
                    </div>

                    <!-- Caption -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Caption</label>
                            <input type="text" name="caption" id="caption" class="form-control"
                                value="<?php echo $row['caption']; ?>" required />
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <input type="text" name="tags" id="tags" class="form-control"
                                value="<?php echo $row['tags']; ?>" required />
                        </div>
                    </div>

                    <!-- School Pride -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">School Pride</label>
                            <select name="schoolPride" id="schoolPride" class="form-control" required>
                                <option value="ON" <?php echo ($row['schoolPride'] == 'ON') ? 'selected' : ''; ?>>ON</option>
                                <option value="OFF" <?php echo ($row['schoolPride'] == 'OFF') ? 'selected' : ''; ?>>OFF</option>
                            </select>
                        </div>
                    </div>

                    <!-- Slug -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control"
                                value="<?php echo $row['slug']; ?>"
                                oninput="this.value = this.value.replace(/\s+/g, '-').toLowerCase()" required />
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Featured Image</label>
                            <input type="file" name="image" id="featured_img" class="form-control" accept=".webp"
                                onchange="checkFileType()">
                            <p id="fileMessage" class="text-danger"></p>
                            <?php if (!empty($row['photo'])): ?>
                                <p>Current Image: <?php echo $row['photo']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <script>
                    function checkFileType() {
                        const fileInput = document.getElementById('featured_img');
                        const fileMessage = document.getElementById('fileMessage');
                        const allowedExtensions = /(.webp)$/i;

                        if (!allowedExtensions.test(fileInput.value)) {
                            fileInput.value = '';
                            fileMessage.textContent = 'Please upload a valid .webp file.';
                        } else {
                            fileMessage.textContent = '';
                        }
                    }
                </script>

                <!-- Submit Button -->
                <div class="mt-4 mb-3 text-center">
                    <input type="submit" name="submit" class="btn btn-success" value="Edit" />
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include '../admin-footer.php';
?>