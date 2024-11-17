<?php

$page = 'index';

include '../database_connection.php';

include '../functions.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
	exit();
}

include 'sitemap-gen.php';
include 'admin-header.php';

?>

<div class="container-fluid py-4">
	<div class="dropdown">
		<h1 class="mb-5"> Dashboard
			<i class="dropdown-icon fas fa-caret-down"></i></h1>

		<div class="dropdown-content">
		<a class="nav-link <?php if ($page === 'index') echo 'active'; ?>" href="/admin"><img
        src="/admin/ion-icon/dashboard.png" width="20px">&nbsp <b>DASHBOARD</b></a>
    <a class="nav-link <?php if ($page === 'blog') echo 'active'; ?>" href="/admin/blog/blog.php"><img
        src="/admin/ion-icon/news.png" width="20px">&nbsp <b>Blog</b></a>
    <a class="nav-link <?php if ($page === 'events') echo 'active'; ?>" href="/admin/events/events.php"><img
        src="/admin/ion-icon/events.png" width="20px">&nbsp <b>EVENTS</b></a>
    <a class="nav-link <?php if ($page === 'principal-msg') echo 'active'; ?>" 
        href="/admin/principal-msg.php?id=1"><img src="/admin/ion-icon/comment.png" width="20px">&nbsp Principal's Msg</a>
    <a class="nav-link <?php if ($page === 'past-principals') echo 'active'; ?>" href="/admin/past-principals.php"><img
        src="/admin/ion-icon/owner.png" width="20px">&nbsp Past Principals</a>
    <a class="nav-link <?php if ($page === 'school-admins') echo 'active'; ?>" href="/admin/school-admins.php"><img
        src="/admin/ion-icon/profile.png" width="20px">&nbsp School Admins</a>
    <a class="nav-link <?php if ($page === 'prefects-topboard') echo 'active'; ?>" 
        href="/admin/prefects-topboard.php"><img src="/admin/ion-icon/badge.png" width="20px">&nbsp Prefect Topboard</a>
    <a class="nav-link <?php if ($page === 'past-prefects') echo 'active'; ?>" 
        href="/admin/past-prefects.php"><img src="/admin/ion-icon/badge (1).png" width="20px">&nbsp Past Headprefects</a>
    <a class="nav-link <?php if ($page === 'bigmatch') echo 'active'; ?>" href="/admin/bigmatch/bigmatch.php"><img
        src="/admin/ion-icon/cricket.png" width="20px">&nbsp Big Match</a>
    <a class="nav-link" href="logout.php"><img src="/admin/ion-icon/logout.png" width="20px">&nbsp Logout</a>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo Count_total_news($connect); ?></h1>
					<h5 class="text-center">Articles</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
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
		</div>


	</div>
</div>

<?php

include 'admin-footer.php';

?>
