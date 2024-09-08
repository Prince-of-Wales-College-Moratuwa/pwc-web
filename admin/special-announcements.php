<?php

$page = 'blog';

include '../database_connection.php';
include '../functions.php';

if (!is_admin_login()) {
    header('location:../admin_login.php');
    exit();
}

include 'admin-header.php';

// Initialize variables with empty values
$title = $content = $Published = $bttxt = $btlink = $Image = '';

// Fetch existing data for id=1
$query = "SELECT title, content, published, button_text, button_link, image_link FROM special_announcements WHERE id = 1";
$statement = $connect->prepare($query);
$statement->execute();
$announcement = $statement->fetch(PDO::FETCH_ASSOC);

if ($announcement) {
    $title = $announcement['title'];
    $content = $announcement['content'];
    $Published = $announcement['published'];
    $bttxt = $announcement['button_text'];
    $btlink = $announcement['button_link'];
    $Image = $announcement['image_link'];
}

?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Write New Announcement</h1>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
        <li class="breadcrumb-item active">Write New Announcement</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            Write New Announcement
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?php echo htmlspecialchars($title); ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="content" id="content" class="form-control" rows="5"><?php echo htmlspecialchars($content); ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Published?</label>
                            <select name="Published" id="Published" class="form-control">
                                <option value="Yes" <?php echo $Published == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                <option value="No" <?php echo $Published == 'No' ? 'selected' : ''; ?>>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Button Text</label>
                            <input type="text" name="bttxt" id="bttxt" class="form-control" value="<?php echo htmlspecialchars($bttxt); ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Button Link</label>
                            <input type="text" name="btlink" id="btlink" class="form-control" value="<?php echo htmlspecialchars($btlink); ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Image Link</label>
                            <input type="text" name="Image" id="Image" class="form-control" placeholder="https://princeofwales.edu.lk/content/img/........file.ext" value="<?php echo htmlspecialchars($Image); ?>" />
                            <div id="error-message" style="color: red; display: none;">Invalid domain. Please enter a link with the domain princeofwales.edu.lk.</div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('Image').addEventListener('input', function () {
                            var input = this.value;
                            var domain = 'princeofwales.edu.lk';
                            var errorMessage = document.getElementById('error-message');

                            if (input.includes(domain)) {
                                errorMessage.style.display = 'none';
                            } else {
                                errorMessage.style.display = 'block';
                            }
                        });
                    </script>
                </div>
                <div class="mt-4 mb-3 text-center">
                    <input type="submit" name="save_announcement" class="btn btn-success" value="Save" />
                </div>
            </form>
        </div>
    </div>

    <?php

    if (isset($_POST["save_announcement"])) {
        $formdata = array();
        $formdata['title'] = trim($_POST["title"]);
        $formdata['content'] = trim($_POST["content"]);
        $formdata['Published'] = trim($_POST["Published"]);
        $formdata['bttxt'] = trim($_POST["bttxt"]);
        $formdata['btlink'] = trim($_POST["btlink"]);
        $formdata['Image'] = trim($_POST["Image"]);

        // Validate image link
        $imageLinkDomain = parse_url($formdata['Image'], PHP_URL_HOST);
        if ($imageLinkDomain !== 'princeofwales.edu.lk') {
            echo '<div style="color: red;">Invalid domain. Please enter a link with the domain princeofwales.edu.lk.</div>';
        } else {
            // Check if record with id=1 exists
            $query = "SELECT id FROM special_announcements WHERE id = 1";
            $statement = $connect->prepare($query);
            $statement->execute();
            $exists = $statement->rowCount() > 0;

            if ($exists) {
                // Update existing record with id=1
                $query = "
                UPDATE special_announcements 
                SET title = :title, content = :content, published = :Published, button_text = :bttxt, button_link = :btlink, image_link = :Image, date = CURDATE() 
                WHERE id = 1
                ";
            } else {
                // Insert new record
                $query = "
                INSERT INTO special_announcements 
                (title, content, published, button_text, button_link, image_link, date) 
                VALUES (:title, :content, :Published, :bttxt, :btlink, :Image, CURDATE())
                ";
            }

            $statement = $connect->prepare($query);
            $statement->execute($formdata);

            echo '<script>window.open("/");</script>';
            exit();
        }
    }

    ?>

    <?php
    include 'admin-footer.php';
    ?>
