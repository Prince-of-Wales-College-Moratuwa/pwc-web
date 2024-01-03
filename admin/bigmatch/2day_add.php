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
	<h1>Add Two Day Match</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="/admin/index.php">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="/admin/bigmatch/bigmtach.php">Bigmatch</a></li>
		<li class="breadcrumb-item active">Add Two Day Match</li>
	</ol>



	<div class="card mb-4">
		<div class="card-header">
			Add Two Day Match (Add a "+" sign in front of the score for the team that batted first.)
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
                            <label class="form-label">PWC 1st Innings Score</label>
                            <input type="text" name="pwc_1st" id="pwc_1st" class="form-control" />
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">PWC 2nd Innings Score</label>
                            <input type="text" name="pwc_2nd" id="pwc_2nd" class="form-control" />
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">SSC 1st Innings Score</label>
                            <input type="text" name="ssc_1st" id="ssc_1st" class="form-control" />
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">SSC 2nd Innings Score</label>
                            <input type="text" name="ssc_2nd" id="ssc_2nd" class="form-control"/>
                        </div>

                    </div>


				</div>


				




		</div>
		<div class="mt-4 mb-3 text-center">
			<input type="submit" name="add_2day" class="btn btn-success" value="Publish" />
		</div>
		</form>
	</div>
</div>


<?php

if (isset($_POST["add_2day"])) {
    $formdata = array();

    $formdata['result'] = trim($_POST["result"]);
    $formdata['year'] = trim($_POST["year"]);
    $formdata['pwc_1st'] = trim($_POST["pwc_1st"]);
    $formdata['pwc_2nd'] = trim($_POST["pwc_2nd"]);
    $formdata['ssc_1st'] = trim($_POST["ssc_1st"]);
    $formdata['ssc_2nd'] = trim($_POST["ssc_2nd"]);


    $data = array(
        ':result' => $formdata['result'],
        ':year' => $formdata['year'],
        ':pwc_1st' => $_POST['pwc_1st'],
        ':pwc_2nd' => $_POST['pwc_2nd'],
        ':ssc_1st' => $_POST['ssc_1st'],
        ':ssc_2nd' => $_POST['ssc_2nd']
    );

   
    $query = "
    INSERT INTO bigmatch_2day_results 
    (result, year, pwc_1st, pwc_2nd, ssc_1st, ssc_2nd) 
    VALUES (:result, :year, :pwc_1st, :pwc_2nd, :ssc_1st, :ssc_2nd)
";


        $statement = $connect->prepare($query);

        $statement->execute($data);

        echo "<script>alert('Record added successfully'); window.location.href = '/admin/bigmatch/2day.php';</script>";
        exit();

    }

?>



<?php
include '../admin-footer.php';
?>