<?php

$page = 'blog';

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
		<li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
		<li class="breadcrumb-item active">Write New Article</li>
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
									<option value="Sports">Sports</option>
									<option value="Aesthetic">Aesthetic
									</option>
									<option value="Education">Education
									</option>
									<option value="Academic">Academic
									</option>
									<option value="Announcements">Announcements</option>
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
							<label class="form-label">Author</label>
							<select name="author" id="author" class="form-control">
								<option value="CMBU">CMBU</option>
								<option value="Principal">Principal</option>
								<option value="Admin">Admin</option>
								<option value="Teacher">Teacher</option>
								<option value="Student">Student</option>
							</select>
						</div>
					</div>


					<div class="col-md-6">
						<div class="mb-3">
							<label class="form-label">School Pride Annimation</label>
							<select name="schoolPride" id="schoolPride" class="form-control">
								<option value="ON">ON</option>
								<option value="OFF">OFF</option>
							</select>
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

if (isset($_POST["add_news"])) {
    $formdata = array();

    $formdata['title'] = trim($_POST["title"]);
    $formdata['content'] = isset($_POST["editorContent"]) ? trim($_POST["editorContent"]) : '';
    $formdata['category'] = trim($_POST["category"]);

    if ($formdata['category'] == "Sports") {
        $categoryslug = "sports";
    } elseif ($formdata['category'] == "Aesthetic") {
        $categoryslug = "aesthetic";
    } elseif ($formdata['category'] == "Education") {
        $categoryslug = "education";
    } elseif ($formdata['category'] == "Academic") {
        $categoryslug = "academic";
    } elseif ($formdata['category'] == "Announcements") {
        $categoryslug = "announcements";
    } elseif ($formdata['category'] == "Exclusives") {
        $categoryslug = "exclusives";
    } else {
        $categoryslug = "unknown-category";
    }

    $formdata['author'] = isset($_POST["author"]) ? trim($_POST["author"]) : '';
    $formdata['schoolPride'] = isset($_POST["schoolPride"]) ? trim($_POST["schoolPride"]) : '';
    $formdata['slug'] = trim($_POST["slug"]);

    $data = array(
        ':title' => $formdata['title'],
        ':content' => $formdata['content'],
        ':category' => $formdata['category'],
        ':slug' => $formdata['slug'],
        ':author' => $formdata['author'],
        ':schoolPride' => $formdata['schoolPride'],
        ':categoryslug' => $categoryslug, 
    );

$title = $_POST['title'];

$file = $_FILES['photo']['name'];
$file_loc = $_FILES['photo']['tmp_name'];
$folder = "../content/img/img-blog/";
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);
$title = strtolower(str_replace(' ', '-', $title));
$final_file = $title . '-blog-pwc.' . pathinfo($final_file, PATHINFO_EXTENSION);

	

    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        $image = $final_file;
        $query = "
        INSERT INTO pwc_db_news 
        (title, content, category, slug, photo, date, excerpt, author, categoryslug, schoolPride) 
        VALUES (:title, :content, :category, :slug, :photo, CURDATE(), :content, :author, :categoryslug, :schoolPride)
        ";

        $data[':photo'] = $image; 
        $statement = $connect->prepare($query);

        $statement->execute($data);

		echo '<script>window.open("/blog/' . $formdata['slug'] . '", "_blank");</script>';
        exit();

    }
}

?>



	<?php
include 'admin-footer.php';
?>