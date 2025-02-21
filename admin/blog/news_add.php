<?php

$page = 'blog';

include '../../database_connection.php';

include '../../functions.php';



if(!is_admin_login())
{
	header('location:../../admin_login.php');
	exit();
} 

include '../admin-header.php';

?>

<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>



<div class="container-fluid py-4" style="min-height: 700px;">
	<h3>Write New Article</h3>


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
	<!-- Left Column -->
	<div class="col-md-6">
		<div class="mb-3">
			<label class="form-label">Title</label>
			<input type="text" name="title" id="title" class="form-control" />
		</div>

</div>

		<div class="col-md-12">
		<label class="form-label">Description (One or more paragraphs)</label>
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
				<option value="Aesthetic">Aesthetic</option>
				<option value="Education">Education</option>
				<option value="Academic">Academic</option>
				<option value="Announcements">Announcements</option>
				<option value="Exclusives">Exclusives</option>
			</select>
		</div>

		<div class="mb-3">
		<label class="form-label">Caption (Single paragraph - Used for Social Media)</label>
			<textarea name="caption" id="caption" class="form-control" rows="3"></textarea>
		</div>

		<div class="mb-3 d-flex align-items-center">
             
             <!-- Toggle Button -->
<div class="form-check form-switch me-3" style="display: inline-block;">
    <input class="form-check-input" type="checkbox" id="toggleButton">
    <label class="form-check-label" for="toggleButton"></label>
</div>

<!-- Dropdown with Add Option -->
<label for="extralinktype" class="form-label me-2">Extra Link:</label>
<select id="extralinktype" class="form-select me-2" style="width: 30%;" disabled>
    <option value="">Choose URL Type</option>
    <option value="Album Link | ">Album Link | </option>
    <!-- Add more options here if necessary -->
</select>

<!-- Extra Field -->
<label for="extra" class="form-label me-2">Link:</label>
<input type="text" id="extralink" name="extralink" class="form-control me-3" style="width: 30%;" disabled>

<script>
    // JavaScript to handle toggle functionality
    document.getElementById('toggleButton').addEventListener('change', function () {
        const isActive = this.checked;
        // Enable or disable fields based on the toggle button
        document.getElementById('extralinktype').disabled = !isActive;
        document.getElementById('extralink').disabled = !isActive;
    });
</script>


               
            </div>


		<div class="mb-3">
			<label class="form-label"># Tags</label>
			<input type="text" name="tags" id="tags" placeholder="#CMBU #PWC" class="form-control" />
		</div>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


		<div class="mb-3">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" id="slug" class="form-control"
           oninput="this.value = this.value.replace(/\s+/g, '-').toLowerCase(); checkSlug()" />
    <small id="slug-error" class="text-danger"></small>
</div>

<script>
    function checkSlug() {
        let slug = document.getElementById("slug").value.trim();
        let errorMsg = document.getElementById("slug-error");

        if (slug.length === 0) {
            errorMsg.innerText = "";
            return;
        }

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "check_slug.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log("Response from server:", xhr.responseText);
                if (xhr.responseText.trim() === "exists") {
                    errorMsg.innerText = "This slug is already taken!";
                } else {
                    errorMsg.innerText = "";
                }
            }
        };
        xhr.send("slug=" + encodeURIComponent(slug));
    }
</script>




	</div>

	<!-- Right Column -->
	<div class="col-md-6">
		<div class="mb-3">
			<label class="form-label">Date and Time</label>
			<input type="datetime-local" name="date" id="date" class="form-control"
				   value="<?php echo date('Y-m-d\TH:i'); ?>" />

				   <br>
				   <p><b>Notice:</b> Auto posting only processes posts published today. If you are posting an older entry, publish it with today's date first, then update it to the correct date on the edit page after publishing.</p>
				   
		</div>

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

		<div class="mb-3">
			<label class="form-label">School Pride Animation</label>
			<select name="schoolPride" id="schoolPride" class="form-control">
				<option value="ON">ON</option>
				<option value="OFF">OFF</option>
			</select>
		</div>

		<div class="mb-3">
			<label class="form-label">Featured Image</label>
			<input type="file" class="form-control" name="photo" placeholder="Featured Image" id="photo"
				   onchange="checkFileType()">
			<p id="fileMessage"></p>
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

		<div class="mb-3">
			<label class="form-label"><b>Also Share to:</b></label><br>
			<label class="form-label"><b>Telegram</b></label>
			<input type="checkbox" name="publish_telegram" id="publish_telegram" checked /><br>
			<label class="form-label"><b>Facebook</b>(Coming Soon)</label>
			<input type="checkbox" name="publish_facebook" id="publish_facebook" /><br>
			<label class="form-label"><b>Instagram</b>(Coming Soon)</label>
			<input type="checkbox" name="publish_instagram" id="publish_instagram" />
		</div>

		<div class="mb-4">
			<p>* Scheduled posts will not publish directly on social media. After scheduling on the website, copy the link and manually schedule it on social media platforms.</p>
		</div>
	</div>
</div>

<div class="mt-4 mb-3 text-center">
	<input type="submit" name="add_news" class="btn btn-success" value="Publish" />
</div>
</form>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		const dateInput = document.getElementById('date');
		const socialMediaSection = document.querySelector('.col-md-6 .mb-3:has(#publish_telegram)');
		const notice = document.querySelector('.col-md-6 .mb-4');

		function toggleSocialMediaSection() {
			const selectedDate = new Date(dateInput.value);
			const currentDate = new Date();

			if (selectedDate > currentDate) {
				socialMediaSection.style.display = 'none'; // Hide the section
				notice.style.display = 'block'; // Hide the section
			} else {
				socialMediaSection.style.display = 'block'; // Show the section
				notice.style.display = 'none'; // Hide the section
			}
		}

		// Initialize visibility on page load
		toggleSocialMediaSection();

		// Add an event listener to handle changes in the date input
		dateInput.addEventListener('change', toggleSocialMediaSection);
	});
</script>

<?php

if (isset($_POST["add_news"])) {
    $formdata = array();

    $formdata['title'] = trim($_POST["title"]);
    $formdata['content'] = isset($_POST["editorContent"]) ? trim($_POST["editorContent"]) : '';
    $formdata['category'] = trim($_POST["category"]);

	$formdata['caption'] = trim($_POST["caption"]);  // New caption field
    $formdata['tags'] = trim($_POST["tags"]);  // New tags field


		$dropdown_value = isset($_POST["extralinktype"]) ? trim($_POST["extralinktype"]) : '';
		$link_value = isset($_POST["extralink"]) ? trim($_POST["extralink"]) : '';
	
		if (!empty($dropdown_value) || !empty($link_value)) {
			$formdata['extra_link'] = "Album Link | " . $dropdown_value . $link_value;
		} else {
			$formdata['extra_link'] = NULL; // If both are empty, set to NULL
		}


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
    $formdata['date'] = trim($_POST["date"]);

    $data = array(
        ':title' => $formdata['title'],
        ':content' => $formdata['content'],
        ':category' => $formdata['category'],
        ':slug' => $formdata['slug'],
        ':author' => $formdata['author'],
        ':schoolPride' => $formdata['schoolPride'],
        ':categoryslug' => $categoryslug, 
        ':date' => $formdata['date'],
		':caption' => $formdata['caption'],  // Add caption to data array
        ':tags' => $formdata['tags'],  // Add tags to data array
		':extra_link' => $formdata['extra_link'] // Save the concatenated value
    );

$title = $_POST['title'];

$file = $_FILES['photo']['name'];
$file_loc = $_FILES['photo']['tmp_name'];
$folder = "../../content/img/img-blog/";
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);
$title = strtolower(str_replace(' ', '-', $title));
$final_file = $title . '-blog-pwc.' . pathinfo($final_file, PATHINFO_EXTENSION);


	
if (move_uploaded_file($file_loc, $folder . $final_file)) {
    $image = $final_file;
    
    $query = "
INSERT INTO pwc_db_news 
        (title, content, category, slug, photo, date, excerpt, author, categoryslug, schoolPride, caption, tags, extra_link) 
        VALUES (:title, :content, :category, :slug, :photo, :date, :content, :author, :categoryslug, :schoolPride, :caption, :tags, :extra_link)
        ";

    $data[':photo'] = $image; 
    $statement = $connect->prepare($query);

    $statement->execute($data);


	$post_date = date('Y-m-d H:i:s', strtotime($_POST['date']));
	$current_date = date('Y-m-d H:i:s');
	
	if (isset($_POST['publish_telegram']) && $_POST['publish_telegram'] == 'on' && $post_date <= $current_date) {
		include '../auto-post/tg_auto.php';
	} 
	// else {
	// 	$slug = $_POST['slug'] ?? 'no-slug';
	// 	$full_url = "https://princeofwales.edu.lk/blog/" . $slug;
	// 	file_put_contents('../auto-post/last_guid.txt', $full_url, LOCK_EX);
	// }
	
	// if (isset($_POST['publish_facebook']) && $_POST['publish_facebook'] == 'on' && $post_date <= $current_date) {
	// 	include '../auto-post/fb_auto.php';
	// } else {
	// 	$slug = $_POST['slug'] ?? 'no-slug';
	// 	$full_url = "https://princeofwales.edu.lk/blog/" . $slug;
	// 	file_put_contents('../auto-post/last_guid_fb.txt', $full_url, LOCK_EX);
	// }
	
	// if (isset($_POST['publish_instagram']) && $_POST['publish_instagram'] == 'on' && $post_date <= $current_date) {
	// 	include '../auto-post/ig_auto.php';
	// } else {
	// 	$slug = $_POST['slug'] ?? 'no-slug';
	// 	$full_url = "https://princeofwales.edu.lk/blog/" . $slug;
	// 	file_put_contents('../auto-post/last_guid_ig.txt', $full_url, LOCK_EX);
	// }
	

echo '<script>window.open("/blog/' . $formdata['slug'] . '", "_blank");</script>';
exit();
}

}

?>



<?php
include '../admin-footer.php';
?>