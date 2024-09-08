<?php

$page = 'publications';

include '../database_connection.php';

include '../functions.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
	exit();
}


include 'admin-header.php';

?>

<div class="container-fluid py-4">
<div class="dropdown">
	<h1 class="mb-5"> Publications
	<i class="dropdown-icon fas fa-caret-down"></i></h1>

	
</div>

	<div class="row">
    <div class="col-xl-3 col-md-6">
	<a href="goldencap/goldencap.php" class="card bg-primary text-white mb-4">
		<div class="card-body">
			<h2 class="text-center">Golden Captures</h1>
		</div>
	</a>
</div>

		
	</div>
</div>

<?php

include 'admin-footer.php';

?>