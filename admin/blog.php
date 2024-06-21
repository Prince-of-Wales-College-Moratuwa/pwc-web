<?php

$page = 'blog';



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
	<h1>Blog</h1>

	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active">Blog</li>
	</ol>

	<div class="card mb-4">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">
					<i class="fas fa-table me-1"></i> Blog
				</div>
				<div class="col col-md-6" align="right">
					<a href="news_add.php" class="btn btn-success btn-sm">Add</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<table id="datatablesSimple">
				<thead>
					<tr>
						<th>Date</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					<?php 

$query = "SELECT * FROM pwc_db_news ORDER BY date DESC";

		$statement = $connect->prepare($query);

		$statement->execute();

		if($statement->rowCount() > 0)
		{
			foreach($statement->fetchAll() as $row)
			{ 
				?>
					<tr>
						<td><?php echo($row["date"]) ?></td>
						<td><?php echo($row["title"]) ?></td>

						<td>
							<a href="../blog/<?php echo $row["slug"]; ?>" target="_blank" class="btn btn-success btn-sm">View</a>
							<a href="news_edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-primary">Edit</a>
							<a href="news_delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-danger">Delete</a>
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