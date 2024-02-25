<?php
$page = 'past-prefects';
include '../database_connection.php';
include '../functions.php';

if (!is_admin_login()) {
    header('location:../admin_login.php');
    exit();
}

include 'admin-header.php';

$message = ""; 

$sql = "SELECT * FROM period_log WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->execute(array(':id' => (int)$_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (count($_POST) > 0) {
    $sql = "UPDATE period_log SET A = :A, B = :B, C = :C, D = :D, E = :E, F = :F, G = :G, H = :H WHERE id = :id";
    $params = array(
        ':A' => $_POST['A'],
        ':B' => $_POST['B'],
        ':C' => $_POST['C'],
        ':D' => $_POST['D'],
        ':E' => $_POST['E'],
        ':F' => $_POST['F'],
        ':G' => $_POST['G'],
        ':H' => $_POST['H'],
        ':id' => (int)$_GET['id'],
    );


    try {
        $stmt = $connect->prepare($sql);
        $stmt->execute($params);
        $message .= "<script>alert('Record updated successfully'); window.open('/study-period-log', '_blank');</script>";
    } catch (PDOException $e) {
        $message .= "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
    
}
?>

<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Edit Period Count - Grade <?php echo $row['id']; ?> </h1>

	<?php if(isset($message)) {echo $message; } ?>

	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active">Edit</li>
	</ol>
	<div class="card mb-4">
		<div class="card-header">
			Edit Period Count - Grade <?php echo $row['id']; ?>
		</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="row">


					<?php

						$letters = range('A', 'H');
						?>

					<?php foreach ($letters as $letter): ?>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label"><?php echo $row['id'] . ' ' . $letter; ?></label>
							<input type="number" name="<?php echo $letter; ?>" id="<?php echo $letter; ?>"
								class="form-control" value="<?php echo $row[$letter]; ?>" />
						</div>
					</div>
					<?php endforeach; ?>





				</div>



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