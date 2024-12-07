<?php
    $page = 'search';
    include '../database_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/header.php'; 
    include '../sitemap-gen.php';
    ?>

    <title>Search</title>

    <style>
        /* Style for the curved search box */
        .search-box {
            border-radius: 25px;
        }

        .search-icon {
            background-color: maroon;
            border: none;
            border-radius: 0 25px 25px 0;
            color: white;
        }

        .sports-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/img-home/header-main-pwc_desktop.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .sports-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }

    </style>
</head>

<body>

 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 sports-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">SEARCH</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Type Here To Search</h6>
                    <section role="search" data-ss360="true">
                        <input type="search" id="searchBox" placeholder="Search…">
                        <button id="searchButton"></button>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script async src="https://js.sitesearch360.com/plugin/bundle/51408.js"></script>

    <br>

    <?php include 'includes/footer.php'; ?>
</body>

</html>