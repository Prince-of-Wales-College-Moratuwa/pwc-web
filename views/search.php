<?php
    $page = 'search';
    include '../database_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/header.php'; ?>

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
    </style>
</head>

<body>
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