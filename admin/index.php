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


<script>
        function refreshFeed() {
            fetch('auto-post/tg_auto.php', {
                method: 'GET',
            })
            .then(response => response.text())
            .then(data => {
                alert("Feed refreshed: " + data); // Show response in an alert
            })
            .catch(error => {
                alert("Error refreshing feed: " + error);
            });
        }
    </script>

<div class="container-fluid py-4">
	<div class="dropdown">
		<h1 class="mb-5"> Dashboard
			<i class="dropdown-icon fas fa-caret-down"></i>
            <button class="btn btn-success btn-sm" onclick="refreshFeed()">Refresh Feed</button>
        
        </h1>


		<div class="dropdown-content">
			<a class="nav-link <?php if ($page === 'index') echo 'active'; ?>" href="/admin"><img
					src="/admin/ion-icon/dashboard.png" width="20px">&nbsp <b>DASHBOARD</b></a>
			<a class="nav-link <?php if ($page === 'blog') echo 'active'; ?>" href="/admin/blog/blog.php"><img
					src="/admin/ion-icon/news.png" width="20px">&nbsp <b>Blog</b></a>
			<a class="nav-link <?php if ($page === 'events') echo 'active'; ?>" href="/admin/events/events.php"><img
					src="/admin/ion-icon/events.png" width="20px">&nbsp <b>EVENTS</b></a>
			<a class="nav-link <?php if ($page === 'principal-msg') echo 'active'; ?>"
				href="/admin/principal-msg.php?id=1"><img src="/admin/ion-icon/comment.png" width="20px">&nbsp
				Principal's Msg</a>
			<a class="nav-link <?php if ($page === 'past-principals') echo 'active'; ?>"
				href="/admin/past-principals.php"><img src="/admin/ion-icon/owner.png" width="20px">&nbsp Past
				Principals</a>
			<a class="nav-link <?php if ($page === 'school-admins') echo 'active'; ?>"
				href="/admin/school-admins.php"><img src="/admin/ion-icon/profile.png" width="20px">&nbsp School
				Admins</a>
			<a class="nav-link <?php if ($page === 'prefects-topboard') echo 'active'; ?>"
				href="/admin/prefects-topboard.php"><img src="/admin/ion-icon/badge.png" width="20px">&nbsp Prefect
				Topboard</a>
			<a class="nav-link <?php if ($page === 'past-prefects') echo 'active'; ?>"
				href="/admin/past-prefects.php"><img src="/admin/ion-icon/badge (1).png" width="20px">&nbsp Past
				Headprefects</a>
			<a class="nav-link <?php if ($page === 'bigmatch') echo 'active'; ?>"
				href="/admin/bigmatch/bigmatch.php"><img src="/admin/ion-icon/cricket.png" width="20px">&nbsp Big
				Match</a>
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

	<div class="container mt-5">

	<?php

$currentYear = date("Y");
$previousYear = $currentYear - 1; 

$currentDate = date("Y-m-d");

if ($currentDate > "$currentYear-03-31") {

    $notices = [];

    $checkData = [
        'bigmatch_1day_results' => [
            'matchType' => 'One Day Match',
            'link' => 'bigmatch/1day_add.php',
            'query' => "SELECT COUNT(*) AS record_count FROM bigmatch_1day_results WHERE year = ?"
        ],
        'bigmatch_2day_results' => [
            'matchType' => 'Test Match',
            'link' => 'bigmatch/2day_add.php',
            'query' => "SELECT COUNT(*) AS record_count FROM bigmatch_2day_results WHERE year = ?"
        ],
        'bigmatch_t20_results' => [
            'matchType' => 'T20 Match',
            'link' => 'bigmatch/t20_add.php',
            'query' => "SELECT COUNT(*) AS record_count FROM bigmatch_t20_results WHERE year = ?"
        ],
        'past_cricket_captains' => [
            'matchType' => 'Captain Name',
            'link' => 'bigmatch/past-captains.php',
            'query' => "SELECT COUNT(*) AS record_count FROM past_cricket_captains WHERE year = ?"
        ],
        'about_past_headprefects' => [
            'matchType' => 'Past Head Prefect Details',
            'link' => 'past-prefects_add.php',
            'query' => "SELECT COUNT(*) AS record_count FROM about_past_headprefects WHERE year = ?"
        ],
        'about_prefect_topboard' => [
            'matchType' => 'Current Head Prefect Details',
            'link' => 'prefects-topboard_edit.php?id=1',
            'query' => "SELECT post FROM about_prefect_topboard"
        ]
    ];

    foreach ($checkData as $table => $data) {
        $stmt = $connect->prepare($data['query']);
        
        if (strpos($data['query'], '?') !== false) {
            $yearToCheck = ($table == 'about_past_headprefects') ? $previousYear : $currentYear;
            $stmt->bindParam(1, $yearToCheck, PDO::PARAM_INT);
        }
        
        $stmt->execute();
        
        if ($table == 'about_prefect_topboard') {
            $foundYear = false;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if (preg_match("/\b$currentYear\b/", $row['post'])) {
                    $foundYear = true;
                    break;
                }
            }
            if (!$foundYear) {
                $notices[] = [
                    'title' => 'Current Head Prefect Details Missing',
                    'message' => 'The details of this year\'s Head Prefect have not been added to the site.',
                    'link' => $data['link']
                ];
            }
        } else {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result['record_count'] == 0) {
                $notices[] = [
                    'title' => $data['matchType'] . ' Missing',
                    'message' => "We noticed that the {$data['matchType']} for this year are missing.",
                    'link' => $data['link']
                ];
            }
        }
    }

    if (!empty($notices)) {
        foreach ($notices as $notice) {
            echo '
            <div class="alert alert-danger d-flex align-items-start" role="alert">
                <div class="me-2">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>
                <div>
                    <h4 class="alert-heading">' . $notice['title'] . '</h4>
                    <p>' . $notice['message'] . '</p>
                    <p><strong>Action Required:</strong></p>
                    <a href="' . $notice['link'] . '" class="alert-link">Click here</a> to update now.
                </div>
            </div>';
        }
    }
}
?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

	</div>
</div>

<?php

include 'admin-footer.php';

?>