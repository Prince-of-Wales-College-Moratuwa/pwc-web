<?php

$page = 'events';

include '../database_connection.php';

include '../functions.php';



if(!is_admin_login())
{
	header('location:../admin_login.php');
	exit();
}
include 'admin-header.php';

?>

<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Create New Event</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="events.php">Events</a></li>
        <li class="breadcrumb-item active">Add New Event</li>
    </ol>


    <div class="card mb-4">
    	<div class="card-header">
    		 Add New Event
        </div>
        <div class="card-body">
		<form action="" method="POST" enctype="multipart/form-data">

        		<div class="row">
        			<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Name</label>
        					<input type="text" name="title" id="title" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Date</label>
        					<input type="date" name="date" id="date" class="form-control" />
        				</div>
        			</div>
					<div class="col-md-6">
        				<div class="mb-3">
        					<label class="form-label">Time</label>
        					<input type="time" name="time" id="time" class="form-control" />
        				</div>
        			</div>
        			<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Location</label>
        					<input type="text" name="location" id="location" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Organizer's Name</label>
        					<input type="text" name="organizer_name" id="organizer-name" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Organizer's Contact No.</label>
        					<input type="number" name="organizer_phone" id="organizer_phone" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">About</label>
        					<input type="text" name="about" id="about" class="form-control" />
        				</div>
        			</div>
        
					<div class="col-md-6">
						<div class="mb-3">
        					<label class="form-label">Agenda / Other Details</label>
        					<input type="text" name="other_details" id="other_details" class="form-control" />
        				</div>
        			</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Slug</label>
							<input type="text" name="slug" id="slug" class="form-control"
								oninput="this.value = this.value.replace(/\s+/g, '-').toLowerCase()" />
						</div>
					</div>
					
        		
					<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">Featured Image</label>
        <input type="file" class="form-control" name="photo" placeholder="Featured Image" id="photo" onchange="checkFileType()">
        <p id="fileMessage"></p>
    </div>
</div>

<script>
    function checkFileType() {
        const fileInput = document.getElementById('photo');
        const fileMessage = document.getElementById('fileMessage');

        const allowedExtensions = /(\.webp)$/i;

        if (!allowedExtensions.test(fileInput.value)) {
            fileInput.value = '';
            fileMessage.innerHTML = 'Please upload a valid .webp file.';
        } else {
            fileMessage.innerHTML = ''; 
        }
    }
</script>


        		</div>
        		<div class="mt-4 mb-3 text-center">
        			<input type="submit" name="add_event" class="btn btn-success" value="Create" />
        		</div>
        	</form>
        </div>
    </div>


	<?php

if(isset($_POST["add_event"]))
{
	$formdata = array();

		$formdata['title'] = trim($_POST["title"]);
		$formdata['date'] = trim($_POST["date"]);
		$formdata['time'] = trim($_POST["time"]);
		$formdata['location'] = trim($_POST["location"]);
		$formdata['organizer_name'] = trim($_POST["organizer_name"]);
		$formdata['organizer_phone'] = trim($_POST["organizer_phone"]); 
		$formdata['about'] = trim($_POST["about"]);
		$formdata['other_details'] = trim($_POST["other_details"]);
		$formdata['slug'] = trim($_POST["slug"]);


		$data = array(
			':title'		=>	$formdata['title'],
			':date'		=>	$formdata['date'],
			':time'		=>	$formdata['time'],
			':location'		=>	$formdata['location'],
			':organizer_name'		=>	$formdata['organizer_name'],
			':organizer_phone'		=>	$formdata['organizer_phone'],
			':about'		=>	$formdata['about'],
			':other_details'		=>	$formdata['other_details'],
			':slug'		=>	$formdata['slug'],

		);

		$title = $_POST['title'];

		$file = $_FILES['photo']['name'];
		$file_loc = $_FILES['photo']['tmp_name'];
		$folder = "../content/img/img-events/";
		$new_file_name = strtolower($file);
		$final_file = str_replace(' ', '-', $new_file_name);
		$title = strtolower(str_replace(' ', '-', $title));
		$final_file = $title . '-events-pwc.' . pathinfo($final_file, PATHINFO_EXTENSION);
		
		
	if(move_uploaded_file($file_loc, $folder . $final_file)) {
		$image = $final_file;
		$query = "
		INSERT INTO pwc_db_events 
		(title, date, time, location, organizer_name, organizer_phone, about, other_details, slug, img) 
		VALUES (:title, :date, :time, :location, :organizer_name, :organizer_phone, :about, :other_details, :slug, '".$image."')
		";

	}
	



	$statement = $connect->prepare($query);

	$statement->execute($data);
	
	echo '<script>
	alert("Event created successfully!");
	window.open("../events/' . $formdata['slug'] . '", "_blank");
  </script>';

}

?>


	<?php
include 'admin-footer.php';
?>