<!DOCTYPE html>
<html lang="en">
<title>School Administration</title>

<head>
    <?php
    $page = 'about';
?>


    <!-- Primary Meta Tags -->
    <meta name="title" content="School Administration | Prince of Wales' College" />
    <meta name="description"
        content="Discover the efficient and dedicated administration team at Prince of Wales College. Your partner in academic excellence and student support." />
    <meta name="keywords" content="prince of wales college staff, prince of wales college principal" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/about/school-administration" />
    <meta property="og:title" content="School Administration | Prince of Wales' College" />
    <meta property="og:description"
        content="Discover the efficient and dedicated administration team at Prince of Wales College. Your partner in academic excellence and student support." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-about/header-img.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/about/school-administration" />
    <meta property="twitter:title" content="School Administration | Prince of Wales' College" />
    <meta property="twitter:description"
        content="Discover the efficient and dedicated administration team at Prince of Wales College. Your partner in academic excellence and student support." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-about/header-img.webp" />


    <?php include 'header.php'; ?>


</head>

<body>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">School</h6>
                <h1 class="mb-5">ADMINISTRATION</h1>
            </div>

            <div class="row g-4">

            <?php

$query = "SELECT * FROM about_school_administration";

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
                            <img class="img-fluid" src="/content/img/img-about/administration/<?php echo $row["img"]; ?>" alt="<?php echo $row["name"]; ?>" style="width: auto;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $row["name"]; ?></h5>
                            <small><?php echo $row["post"]; ?>
                            </small>
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
