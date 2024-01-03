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
	<h1>Add T20 Match</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active">Add T20 Match</li>
	</ol>



	<div class="card mb-4">
		<div class="card-header">
			Add T20 Match (Add a "+" sign in front of the score for the team that batted first.)
		</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">


				<div class="row">

				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">year</label>
						<input type="text" name="year" id="year" class="form-control" />
					</div>
				</div>
				
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Result</label>
							<input type="text" name="result" id="result" class="form-control"
								placeholder="PWC Won by 5 Runs / Wickets" />
						</div>
					</div>


					<div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">PWC Score</label>
                            <input type="text" name="pwc" id="pwc" class="form-control" />
                        </div>
                        
                    </div>


                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">SSC Score</label>
                            <input type="text" name="ssc" id="ssc" class="form-control"" />
                        </div>
                        
                    </div>


				</div>


				




		</div>
		<div class="mt-4 mb-3 text-center">
			<input type="submit" name="add_t20" class="btn btn-success" value="Publish" />
		</div>
		</form>
	</div>
</div>


<?php

if (isset($_POST["add_t20"])) {
    $formdata = array();

    $formdata['result'] = trim($_POST["result"]);
    $formdata['year'] = trim($_POST["year"]);
    $formdata['pwc'] = trim($_POST["pwc"]);
    $formdata['ssc'] = trim($_POST["ssc"]);


    $data = array(
        ':result' => $formdata['result'],
        ':year' => $formdata['year'],
        ':pwc' => $formdata['pwc'],
        ':ssc' => $formdata['ssc'],
    );

   
        $query = "
        INSERT INTO bigmatch_t20_results 
        (result, year, pwc, ssc) 
        VALUES (:result, :year, :pwc, :ssc)
        ";
        $statement = $connect->prepare($query);

        $statement->execute($data);

        echo "<script>alert('Record added successfully'); window.location.href = '/admin/bigmatch/t20.php';</script>";
        exit();

    }

?>



<?php
include '../admin-footer.php';
?>