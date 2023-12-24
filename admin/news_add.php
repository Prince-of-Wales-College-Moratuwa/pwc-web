<?php

$page = 'news';

include '../database_connection.php';

include '../functions.php';



if(!is_admin_login())
{
	header('location:../admin_login.php');
	exit();
} 

include 'admin-header.php';

?>

<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>



<div class="container-fluid py-4" style="min-height: 700px;">
	<h1>Write New Article</h1>


	<ol class="breadcrumb mt-4 mb-4 bg-light p-2 border">
		<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="news.php">News</a></li>
		<li class="breadcrumb-item active">Write New News</li>
	</ol>



	<div class="card mb-4">
		<div class="card-header">
			Write New Article
		</div>
		<div class="card-body">
			<form action="" method="POST" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Title</label>
							<input type="text" name="title" id="title" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Description</label>
							<div id="content"></div>

							<input type="hidden" name="editorContent" id="editorContent" value="">
							<script>
								ClassicEditor
									.create(document.querySelector('#content'))
									.then(editor => {
										editor.model.document.on('change:data', () => {
											document.querySelector('#editorContent').value = editor.getData();
										});
									})
									.catch(error => {
										console.error(error);
									});
							</script>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Category</label>
								<select name="category" id="category" class="form-control">
									<option value="Achievements - Sport Sector">Achievements - Sport Sector</option>
									<option value="Achievements - Aesthetic Sector">Achievements - Aesthetic Sector
									</option>
									<option value="Achievements - Education Sector">Achievements - Education Sector
									</option>
									<option value="Achievements - Academic Sector">Achievements - Academic Sector
									</option>
									<option value="Principal Announcements">Principal Announcements</option>
									<option value="Exclusives">Exclusives</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Slug</label>
								<input type="text" name="slug" id="slug" class="form-control"
									oninput="this.value = this.value.replace(/\s+/g, '-').toLowerCase()" />
							</div>
						</div>

					</div>

					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">Featured Image</label>
							<input type="file" class="form-control" name="photo" placeholder="Featured Image" id="photo"
								onchange="checkFileType()">
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
								fileMessage.innerHTML = 'Please upload .webp file.';
							} else {
								fileMessage.innerHTML = '';
							}
						}
					</script>

				</div>
				<div class="mt-4 mb-3 text-center">
					<input type="submit" name="add_news" class="btn btn-success" value="Publish" />
				</div>
			</form>
		</div>
	</div>


	<?php

if(isset($_POST["add_news"]))
{
    $formdata = array();

    $formdata['title'] = trim($_POST["title"]);
    $formdata['content'] = isset($_POST["editorContent"]) ? trim($_POST["editorContent"]) : '';
    $formdata['category'] = trim($_POST["category"]); 
    $formdata['slug'] = trim($_POST["slug"]); 

    $data = array(
        ':title'    => $formdata['title'],
        ':content'  => $formdata['content'],
        ':category' => $formdata['category'],
        ':slug'     => $formdata['slug'],
    );

	$file = $_FILES['photo']['name'];
	$file_loc = $_FILES['photo']['tmp_name'];
	$folder = "../content/img/img-news/";
	$new_file_name = strtolower($file);
	$final_file = str_replace(' ', '-', $new_file_name);
	$final_file = rand() . "-" . $final_file; 
	if(move_uploaded_file($file_loc, $folder . $final_file)) {
		$image = $final_file;
		$query = "
		INSERT INTO pwc_db_news 
		(title, content, category, slug, photo, date, excerpt) 
		VALUES (:title, :content, :category, :slug, '".$image."', CURDATE(), :content)
		";

	}
	



	$statement = $connect->prepare($query);

	$statement->execute($data);
}

?>


	<?php
include 'admin-footer.php';
?>