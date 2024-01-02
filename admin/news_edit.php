<?php
$page = 'blog';
include '../database_connection.php';
include '../functions.php';

if (!is_admin_login()) {
    header('location:../admin_login.php');
    exit();
}

include 'admin-header.php';


if (count($_POST) > 0) {
  
    $sql = "UPDATE pwc_db_news SET title = :title, content = :editorContent, category = :category, slug = :slug, author = :author";
    $params = array(
        ':title' => $_POST['title'],
        ':editorContent' => $_POST['editorContent'],
        ':category' => $_POST['category'],
        ':author' => $_POST['author'],
        ':slug' => $_POST['slug'],
        ':id' => $_GET['id']
    );
    
    if (!empty($_FILES['image']['name'])) {
        $sql .= ", photo = :photo";
        $params[':photo'] = $_FILES['image']['name'];
    }
    
    $sql .= " WHERE id = :id";
    
    $stmt = $connect->prepare($sql);
    $stmt->execute($params);

    try {
        $stmt->execute($params);
        $message = "<script>alert('Article updated successfully'); window.location.href = document.referrer;</script>";
    } catch (PDOException $e) {
        $message = "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}

$sql = "SELECT * FROM pwc_db_news WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" id="Product_name" class="form-control"
                                value="<?php echo $row['title']; ?>" />
                        </div>
                    </div>
                    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <div id="editor"></div>
                            <input type="hidden" name="editorContent" id="editorContent"
                                value="<?php echo $row['content']; ?>">
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
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="Achievements - Sport Sector"
                                    <?php echo ($row['category'] == 'Achievements - Sport Sector') ? 'selected' : ''; ?>>
                                    Achievements - Sport Sector</option>
                                <option value="Achievements - Aesthetic Sector"
                                    <?php echo ($row['category'] == 'Achievements - Aesthetic Sector') ? 'selected' : ''; ?>>
                                    Achievements - Aesthetic Sector</option>
                                <option value="Achievements - Education Sector"
                                    <?php echo ($row['category'] == 'Achievements - Education Sector') ? 'selected' : ''; ?>>
                                    Achievements - Education Sector</option>
                                <option value="Achievements - Academic Sector"
                                    <?php echo ($row['category'] == 'Achievements - Academic Sector') ? 'selected' : ''; ?>>
                                    Achievements - Academic Sector</option>
                                <option value="Announcements"
                                    <?php echo ($row['category'] == 'Announcements') ? 'selected' : ''; ?>>
                                    Announcements</option>
                                <option value="Exclusives"
                                    <?php echo ($row['category'] == 'Exclusives') ? 'selected' : ''; ?>>Exclusives
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <select name="author" id="author" class="form-control">
                                <option value="CMBU" <?php echo ($row['author'] == 'CMBU') ? 'selected' : ''; ?>>
                                    CMBU</option>
                                <option value="Principal"
                                    <?php echo ($row['author'] == 'Principal') ? 'selected' : ''; ?>>Principal</option>
                                <option value="Admin" <?php echo ($row['author'] == 'Admin') ? 'selected' : ''; ?>>Admin
                                </option>
                                <option value="Teacher" <?php echo ($row['author'] == 'Teacher') ? 'selected' : ''; ?>>
                                    Teacher</option>
                                <option value="Student" <?php echo ($row['author'] == 'Student') ? 'selected' : ''; ?>>
                                    Student</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control"
                                value="<?php echo $row['slug']; ?>"
                                oninput="this.value = this.value.replace(/\s+/g, '-').toLowerCase()" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Featured Image</label>
                        <input type="file" name="image" id="featured_img" class="form-control" accept=".webp"
                            onchange="checkFileType()">
                        <p id="fileMessage"></p>
                        <?php if (!empty($row['photo'])): ?>
                        <p>Current Image: <?php echo $row['photo']; ?></p>
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