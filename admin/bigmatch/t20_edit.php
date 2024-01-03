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

$sql = "SELECT * FROM bigmatch_t20_results WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => (int)$_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (count($_POST) > 0) {
    $sql = "UPDATE bigmatch_t20_results SET result = :result, year = :year, pwc = :pwc, ssc = :ssc WHERE id = :id";
    $params = array(
        ':result' => $_POST['result'],
        ':year' => $_POST['year'],
        ':pwc' => $_POST['pwc'],
        ':ssc' => $_POST['ssc'],
        ':id' => (int)$_GET['id'],
    );


    try {
        $stmt = $connect->prepare($sql);
        $stmt->execute($params);
        $message .= "<script>alert('Record updated successfully'); window.location.href='t20.php';</script>";
    } catch (PDOException $e) {
        $message .= "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
    
}
?>

<div class="container-fluid py-4" style="min-height: 700px;">
    <h1>Edit T20 Match</h1>

    <?php if(isset($message)) {echo $message; } ?>

    <ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit T20 Match</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Edit T20 Match (Add a "+" sign in front of the score for the team that batted first.)
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="row">

                     <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Year</label>
                            <input type="text" name="year" id="year" class="form-control"
                                value="<?php echo $row['year']; ?>" />
                        </div>
                        
                    </div>


                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Result</label>
                            <input type="text" name="result" id="result" class="form-control"
                                value="<?php echo $row['result']; ?>" />
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">PWC Score</label>
                            <input type="text" name="pwc" id="pwc" class="form-control"
                                value="<?php echo $row['pwc']; ?>" />
                        </div>
                        
                    </div>


                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">SSC Score</label>
                            <input type="text" name="ssc" id="ssc" class="form-control"
                                value="<?php echo $row['ssc']; ?>" />
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