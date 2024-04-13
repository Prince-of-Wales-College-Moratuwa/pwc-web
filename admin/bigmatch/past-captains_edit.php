<?php
$page = 'bigmatch';
include '../../database_connection.php';
include '../../functions.php';

if (!is_admin_login()) {
    header('location:../../admin_login.php');
    exit();
}

include '../admin-header.php';

$message = ""; 

$sql = "SELECT * FROM past_cricket_captains WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => (int)$_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (count($_POST) > 0) {
    $sql = "UPDATE past_cricket_captains SET name = :name, year = :year WHERE id = :id";
    $params = array(
        ':name' => $_POST['name'],
        ':year' => $_POST['year'],
        ':id' => (int)$_GET['id'],
    );


    try {
        $stmt = $connect->prepare($sql);
        $stmt->execute($params);
        $message .= "<script>alert('Record updated successfully'); window.open('../../big-match', '_blank');</script>";
    } catch (PDOException $e) {
        $message .= "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
    
}
?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Edit Past Cricket Captains</h1>

    <?php if(isset($message)) {echo $message; } ?>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Past Cricket Captains</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Edit Past Cricket Captains
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
                            <label class="form-label">year</label>
                            <input type="text" name="year" id="year" class="form-control"
                                value="<?php echo $row['year']; ?>" />
                        </div>
                    </div>
                </div>

            

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