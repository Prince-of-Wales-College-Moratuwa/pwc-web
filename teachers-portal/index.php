<?php

$page = 'index';

include '../database_connection.php';

include '../functions.php';

if(!is_admin_login())
{
	header('location:../teacher_login.php');
	exit();
}


include 'admin-header.php';

?>

<div class="container-fluid py-4">
	<div class="dropdown">
		<h1 class="mb-5"> Dashboard</h1>
	</div>

	<div class="row">

		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<a href="periodcount.php">
					<div class="card-body text-white">
						<h5 class="text-center">Project "8න් කීයද?"</h5>
					</div>
				</a>
			</div>
		</div>

		<!-- <div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_events($connect); ?></h1>
					<h5 class="text-center">Events</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-danger text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_form_submission($connect); ?></h1>
					<h5 class="text-center">Form Submissions (AL)</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-danger text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_form_submission_stud_info($connect); ?></h1>
					<h5 class="text-center">Form Submissions (Students Info)</h5>
				</div>
			</div>
		</div> -->


	</div>
</div>

<?php

include 'admin-footer.php';

?>