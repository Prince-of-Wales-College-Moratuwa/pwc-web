<!DOCTYPE html>
<html lang="en">
<title>Former Principals</title>

<head>
    <?php
    $page = 'history';
?>


<!-- Primary Meta Tags -->
<meta name="title" content="Former Principals | Prince of Wales' College" />
<meta name="description" content="Explore the legacy of Prince of Wales College through its past principals. Discover the leaders who shaped its history and contributed to its educational excellence." />
<meta name="keywords" content="prince of wales college past principals, prince of wales college moratuwa former principals, prince of wales college moratuwa sri lanka, prince of wales college moratuwa principal" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/history/former-principals" />
<meta property="og:title" content="Former Principals | Prince of Wales' College" />
<meta property="og:description" content="Explore the legacy of Prince of Wales College through its past principals. Discover the leaders who shaped its history and contributed to its educational excellence." />
<meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-history/former-principals/former-principals-header.webp" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/history/former-principals" />
<meta property="twitter:title" content="Former Principals | Prince of Wales' College" />
<meta property="twitter:description" content="Explore the legacy of Prince of Wales College through its past principals. Discover the leaders who shaped its history and contributed to its educational excellence." />
<meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-history/former-principals/former-principals-header.webp" />


<?php include 'header.php'; ?>


    <style>
        .former-principals-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(/content/img/img-history/former-principals/former-principals-header.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .former-principals-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }
    </style>


</head>

<body>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 former-principals-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">FORMER PRINCIPALS</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-4">

            <?php

$query = "SELECT * FROM about_past_principals ORDER BY id DESC";

$statement = $connect->prepare($query);

$statement->execute();

if($statement->rowCount() > 0)
{
    foreach($statement->fetchAll() as $row)
    { 

?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid"
                                src="/content/img/img-history/former-principals/<?php echo $row["img"]; ?>"
                                alt="<?php echo $row["name"]; ?>" style="width: 1000px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $row["name"]; ?></h5>
                            <small><?php echo $row["years"]; ?></small>
                        </div>
                    </div>
                </div>

                <?php 
					}
		}	
        ?>


            </div>

        </div>
    </div>




    <?php include 'footer.php'; ?>

</body>

</html>