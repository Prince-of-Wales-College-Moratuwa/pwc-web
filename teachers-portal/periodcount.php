<?php

$page = 'periodcount';

include '../database_connection.php';

include './admin-functions.php';
include '../functions.php';


if(!is_admin_login())
{
	header('location:../admin_login.php');
	exit();
}

include 'admin-header.php';

?>

<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Project "8න් කීයද?"</h1>

	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active">Period Count</li>
	</ol>

	<div class="card mb-4">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">
					<i class="fas fa-table me-1"></i> Period Count
				</div>
			
			</div>
		</div>
		<div class="card-body">
			<table id="datatablesSimple">
				<thead>
					<tr>
						<th>Grade</th>
						<th></th>
					</tr>
				</thead>

				<tbody>

					<?php 

		$query = "SELECT * FROM period_log";

		$statement = $connect->prepare($query);

		$statement->execute();

		if($statement->rowCount() > 0)
		{
			foreach($statement->fetchAll() as $row)
			{ 
				?>
					<tr>
						<td>Grade <?php echo($row["id"]) ?></td>


						<td>
						
							<a  href="periodcount_edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-primary">Edit</a>
							
						</td>
					</tr>



					<?php 
					}
		}	


?>


				</tbody>
			</table>
		</div>
	</div>

</div>

<?php
include 'admin-footer.php';
?>