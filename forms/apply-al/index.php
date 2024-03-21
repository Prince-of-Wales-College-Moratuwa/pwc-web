<!DOCTYPE html>
<html lang="en">

<head>

    <?php 
    include '../../database_connection.php';
    include '../../header.php';
    ?>
    <title>Admission Registration for Advanced Level 2025</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Admission Registration for Advanced Level 2025" />
    <meta name="description"
        content="Explore Prince of Wales College: Your gateway to quality education and a vibrant school community. Discover programs, resources, and more." />
    <meta name="keywords"
        content="prince of wales college, prince of wales college moratuwa, prince of wales college moratuwa website, prince of wales college moratuwa contact number, prince of wales college moratuwa logo, prince of wales college moratuwa address, prince of wales college moratuwa big match, prince of wales college moratuwa sri lanka, prince of wales college moratuwa principal" />
    <meta name="author" content="Cambrians' ICT Society" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/apply-al" />
    <meta property="og:title" content="Admission Registration for Advanced Level 2025" />
    <meta property="og:description"
        content="Explore Prince of Wales College: Your gateway to quality education and a vibrant school community. Discover programs, resources, and more." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-home/header-main-pwc.jpg" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/apply-al" />
    <meta property="twitter:title" content="Admission Registration for Advanced Level 2025" />
    <meta property="twitter:description"
        content="Explore Prince of Wales College: Your gateway to quality education and a vibrant school community. Discover programs, resources, and more." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-home/header-main-pwc.jpg" />

</head>

<?php
$currentDate = new DateTime();
$deadlineDate = new DateTime("2023-12-11");

if ($currentDate < $deadlineDate) {
    echo '<div class="container-xxl py-5">';
    echo '    <div class="container">';
    echo '        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">';
    echo '            <h6 class="section-title bg-white text-center text-primary px-3"></h6>';
    echo '            <h1 class="mb-5">Admission Registration - Advanced Level 2025</h1>';
    echo '            <h1 class="mb-5"> උසස් පෙළ 2025 - ඇතුලත් වීමේ අයදුම්පත </h1>';
    echo '        </div>';
    
    echo '        <div class="form-group wow fadeInUp" data-wow-delay="0.1s">';
    echo '            <p> 1. First Select the relevant stream you wished to apply.</p>';
    echo '            <p> 2. Select one of the subject in three category. Refer the details on subject selection for each';
    echo '                category.';
    echo '            </p>';
    echo '            <p> 3. Make sure to answer for all questions given.</p>';
    echo '            <p> 4. You cannot alter your submission so be careful and check thoroughly before submission.</p>';
    echo '            <p> 5. You will get a registration reference number after successful submission. Keep that for your future';
    echo '                reference</p>';
    echo '            <a href="Application Details.pdf" download>';
    echo '                <p>අයදුම්පත උපදෙස් පත්‍රිකාව සහ විෂය සංයෝජන - click here</p>';
    echo '            </a>';
    echo '            <hr><br>';
    echo '            <p style="text-align:center"> <b>Please select one of the stream that you wish to apply.</b></p>';
    
    echo '            <center>';
    echo '                <a class="btn btn-primary py-3 px-5 mt-2 " href="science" data-wow-delay="0.7s">SCIENCE</a>';
    echo '                <a class="btn btn-primary py-3 px-5 mt-2 " href="commerce" data-wow-delay="0.7s">COMMERCE</a>';
    echo '                <a class="btn btn-primary py-3 px-5 mt-2 " href="tech" data-wow-delay="0.7s">TECHNOLOGY</a>';
    echo '                <a class="btn btn-primary py-3 px-5 mt-2 " href="art" data-wow-delay="0.7s">ARTS</a>';
    echo '            </center>';
    
    echo '        </div>';
    echo '    </div>';
    echo '</div>';

} else {

    echo '<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">';
    echo '    <div class="container text-center">';
    echo '        <div class="row justify-content-center">';
    echo '            <div class="col-lg-6">';
    echo '                <i class="bi bi-stopwatch display-1 text-primary"></i>';
    echo '                <h1 class="mb-4">Timed Out!</h1>';
    echo '                <p class="mb-4">The admission registration deadline has passed. Please contact the administration for further assistance.</p>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}
?>


<?php 
    include '../../footer.php';
    ?>