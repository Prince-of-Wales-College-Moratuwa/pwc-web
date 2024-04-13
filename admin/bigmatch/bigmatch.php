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

<div class="container-fluid py-4">
<div class="dropdown">
	<h1 class="mb-5"> Big Match
	<i class="dropdown-icon fas fa-caret-down"></i></h1>

	
</div>

	<div class="row">
    <div class="col-xl-3 col-md-6">
	<a href="2day.php" class="card bg-primary text-white mb-4">
		<div class="card-body">
			<h2 class="text-center">2 Day Matches</h1>
		</div>
	</a>
</div>

<div class="col-xl-3 col-md-6">
	<a href="1day.php" class="card bg-warning text-white mb-4">
		<div class="card-body">
			<h2 class="text-center">1 Day Matches</h1>
		</div>
	</a>
</div>

<div class="col-xl-3 col-md-6">
	<a href="t20.php" class="card bg-danger text-white mb-4">
		<div class="card-body">
			<h2 class="text-center">T20 Matches</h1>
		</div>
	</a>
</div>

<div class="col-xl-3 col-md-6">
	<a href="past-captains.php" class="card bg-primary text-white mb-4">
		<div class="card-body">
			<h2 class="text-center">Past Captains</h1>
		</div>
	</a>
</div>

		
	</div>
</div>

<?php

include '../admin-footer.php';

?>