<?php

$page = 'bigmatch';

include '../../database_connection.php';

include '../../functions.php';



if(!is_admin_login())
{
	header('location:../../admin_login.php');
	exit();
} 

include '../admin-header.php';

?>




<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Add Past Cricket Captains</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active">Add Past Cricket Captains</li>
	</ol>



	<div class="card mb-4">
		<div class="card-header">
        Add Past Cricket Captains
		</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Name</label>
							<input type="text" name="name" id="name" class="form-control" />
						</div>
					</div>
			

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">year</label>
								<input type="text" name="year" id="year" class="form-control"
									oninput="this.value = this.value.replace(/\s+/g, '-').toLowerCase()" />
							</div>
						</div>

					</div>

					


				</div>
				<div class="mt-4 mb-3 text-center">
					<input type="submit" name="add_past-captain" class="btn btn-success" value="Publish" />
				</div>
			</form>
		</div>
	</div>


	<?php

if (isset($_POST["add_past-captain"])) {
    $formdata = array();

    $formdata['name'] = trim($_POST["name"]);
    $formdata['year'] = trim($_POST["year"]);


    $data = array(
        ':name' => $formdata['name'],
        ':year' => $formdata['year'],
    );

   
        $query = "
        INSERT INTO past_cricket_captains 
        (name, year) 
        VALUES (:name, :year)
        ";

        $statement = $connect->prepare($query);

        $statement->execute($data);

		echo '<script>window.open("../../big-match", "_blank");</script>';
        exit();

    }

?>



	<?php
include '../admin-footer.php';
?>