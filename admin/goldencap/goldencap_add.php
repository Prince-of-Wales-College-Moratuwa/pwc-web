<?php

$page = 'publications';

include '../../database_connection.php';
include '../../functions.php';

if(!is_admin_login()) {
    header('location:../../admin_login.php');
    exit();
}
include '../admin-header.php';

?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Add New Photo</h1>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="publications.php">Publications</a></li>
        <li class="breadcrumb-item active">Golden Captures</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            Add New Photo
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Photographer</label>
                            <input type="text" name="photographer" id="photographer" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" id="description" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="photo" id="photo" onchange="checkFileType()" required />
                            <p id="fileMessage"></p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-3 text-center">
                    <input type="submit" name="add_photo" class="btn btn-success" value="Create" />
                </div>
            </form>
        </div>
    </div>

    <?php

    if(isset($_POST["add_photo"])) {
        $formdata = array(
            'title' => trim($_POST["title"]),
            'date' => trim($_POST["date"]),
            'photographer' => trim($_POST["photographer"]),
            'description' => trim($_POST["description"]),
        );

        $title = $_POST['title'];
        $file = $_FILES['photo']['name'];
        $file_loc = $_FILES['photo']['tmp_name'];
        $folder = "../../content/img/golden-captures/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $title = strtolower(str_replace(' ', '-', $title));
        $final_file = $title . '-photo.' . pathinfo($final_file, PATHINFO_EXTENSION);

        if(move_uploaded_file($file_loc, $folder . $final_file)) {
            $image = $final_file;

            $query = "
            INSERT INTO golden_captures 
            (photo, title, description, photographer, date) 
            VALUES (:photo, :title, :description, :photographer, :date)
            ";

            $data = array(
                ':photo' => $image,
                ':title' => $formdata['title'],
                ':description' => $formdata['description'],
                ':photographer' => $formdata['photographer'],
                ':date' => $formdata['date']
            );

            $statement = $connect->prepare($query);
            $statement->execute($data);

            echo '<script>
            alert("Photo added successfully!");
            window.open("../../publications/golden-captures/", "_blank");
            </script>';
        } else {
            echo '<script>alert("Error uploading file. Please try again.");</script>';
        }
    }

    ?>

    <?php
    include '../admin-footer.php';
    ?>
</div>