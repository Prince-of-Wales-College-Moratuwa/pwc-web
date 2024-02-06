<?php

//functions.php

function base_url()
{
	return 'index.php';
}

function is_admin_login()
{
	if(isset($_SESSION['admin_id']))
	{
		return true;
	}
	return false;
}






function Count_total_news($connect)
{
	$total = 0;

	$query = "SELECT COUNT(id) AS Total FROM pwc_db_news";

	$result = $connect->query($query);

	foreach($result as $row)
	{ 
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_published_news($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(id) AS Total FROM pwc_db_news
	WHERE posted = 'publish'
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_form_submission($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(Reference_no) AS Total FROM pwc_db_al25
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}


function Count_total_form_submission_stud_info($connect)
{
	$total = 0;

	$query = "
	SELECT COUNT(id) AS Total FROM student_information
	";

	$result = $connect->query($query);

	foreach($result as $row)
	{
		$total = $row["Total"];
	}

	return $total;
}

function Count_total_events($connect)
{
	$total = 0;

	$query = "SELECT COUNT(id) AS Total FROM pwc_db_events";

	$result = $connect->query($query);

	foreach($result as $row)
	{ 
		$total = $row["Total"];
	}

	return $total;
}

