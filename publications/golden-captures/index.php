<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'publications'; ?>

    <title>Golden Captures</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Golden Captures | Prince of Wales' College" />
    <meta name="description"
        content="Discover unparalleled beauty through Golden Captures. Our webpage is your gateway to breathtaking photography, capturing moments that shimmer with timeless elegance and unforgettable allure. Explore our gallery and embark on a journey through stunning visuals that evoke emotions and inspire wanderlust." />
    <meta name="keywords" content="prince of wales college sports, prince of wales college sport achievements, pwc golden captures, cmbu golden captures" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/golden-captures" />
    <meta property="og:title" content="Golden Captures | Prince of Wales' College" />
    <meta property="og:description"
        content="Discover unparalleled beauty through Golden Captures. Our webpage is your gateway to breathtaking photography, capturing moments that shimmer with timeless elegance and unforgettable allure. Explore our gallery and embark on a journey through stunning visuals that evoke emotions and inspire wanderlust." />
    <meta property="og:image" content="/content/img/golden-captures/golden-cap-cvr.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/golden-captures" />
    <meta property="twitter:title" content="Golden Captures | Prince of Wales' College" />
    <meta property="twitter:description"
        content="Discover unparalleled beauty through Golden Captures. Our webpage is your gateway to breathtaking photography, capturing moments that shimmer with timeless elegance and unforgettable allure. Explore our gallery and embark on a journey through stunning visuals that evoke emotions and inspire wanderlust." />
    <meta property="twitter:image" content="/content/img/golden-captures/golden-cap-cvr.webp" />

    <?php include '../../header.php' ?>


    <style>
        .sports-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(/content/img/golden-captures/golden-cap-cvr.webp);
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
                    <h1 class="display-3 text-white animated slideInDown">GOLDEN CAPTURES</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container-xxl py-1">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <p class="mb-4">Immerse yourself in the world of Golden Captures, where every click tells a story of beauty
                and wonder. <br>Our webpage is a treasure trove of captivating photography, each image crafted to evoke
                emotions and ignite the imagination. <br> Join us on a visual journey through stunning landscapes,
                vibrant
                cultures, and mesmerizing moments frozen in time. <br>Whether you're a photography enthusiast or simply
                seeking inspiration, Golden Captures invites you to explore the extraordinary through our lens.</p>

        </div>
    </div>
    </div>


    <div class="container-xxl py-5">

    <?php

// Fetching data using SQL query
$sql = "SELECT * FROM golden_captures ORDER BY date DESC";
$result = $connect->query($sql);

// Iterating over fetched rows
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
?>
<div class="container">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative h-100">
                    <img class="img-fluid" src="../../content/img/golden-captures/<?php echo $row['photo']; ?>"
                        alt="<?php echo $row['title']; ?>" style="object-fit: cover;"
                        loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-start text-primary pe-3">#CambrianMemories</h6>
                <h2 class="mb-4"><?php echo $row['title']; ?></h2>
                <p class="mb-4"><?php echo $row['description']; ?></p>
                <p class="mb-2">Photographer: <?php echo $row['photographer']; ?></p>
                <p class="mb-2">Date: <?php echo $row['date']; ?></p>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php
}

?>


    </div>


    <?php include '../../footer.php' ?>


</body>

</html>
