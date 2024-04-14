<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="jYZeftnqpxLLjE_8cKEhxIWBAB0ZD5EGWEF2z-3maLU" />

    <?php
    $page = 'home';
?>
    <?php 
    include 'database_connection.php';
    
    ?>

    <title>Prince of Wales' College, Moratuwa</title>

    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Prince of Wales' College, Moratuwa" />
    <meta name="description"
        content="Explore Prince of Wales College: Your gateway to quality education and a vibrant school community. Discover programs, resources, and more." />
    <meta name="keywords"
        content="prince of wales college, prince of wales college moratuwa, prince of wales college moratuwa website, prince of wales college moratuwa contact number, prince of wales college moratuwa logo, prince of wales college moratuwa address, prince of wales college moratuwa big match, prince of wales college moratuwa sri lanka, prince of wales college moratuwa principal" />
    <meta name="author" content="Cambrians' ICT Society" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk" />
    <meta property="og:title" content="Prince of Wales' College, Moratuwa" />
    <meta property="og:description"
        content="Explore Prince of Wales College: Your gateway to quality education and a vibrant school community. Discover programs, resources, and more." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-home/header-main-pwc.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk" />
    <meta property="twitter:title" content="Prince of Wales' College, Moratuwa" />
    <meta property="twitter:description"
        content="Explore Prince of Wales College: Your gateway to quality education and a vibrant school community. Discover programs, resources, and more." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-home/header-main-pwc.webp" />

    <?php
    include 'header.php';
    ?>
    
    <style>
        .al-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/img-clubs/club-header.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .al-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }
    </style>
</head>

<?php 
$birthYear = 1876;
$currentDate = date("m-d");
$birthday = "09-14";

if ($currentDate < $birthday) {
    $age = date("Y") - $birthYear - 1;
} else {
    $age = date("Y") - $birthYear;
}

?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="content/img/img-home/header-main-pwc_50.webp"
                alt="Front View of Prince of Wales College">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(0, 0, 0, 0.356);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-9 col-lg-8">
                            <h1 style="font-size: 24px;" class="text-white text-uppercase mb-3 animated slideInDown">Welcome To</h1>
                            <h1 class="display-3 text-white text-uppercase animated slideInDown">Prince of Wales'
                                College, <br> Moratuwa</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel End -->



<!--
<div class="container-fluid bg-primary py-5 mb-5 al-page-header">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <h1 class=" text-white animated slideInDown">Online Registration - Advanced Level 2025</h1>
		<p class=" text-white animated slideInDown">With a proud history spanning 150 years, we invite you to become a part of the Cambrian community</p>
            <h6 class="text-white animated slideInDown">Deadline for submission is 12th December </h6>
            <center>
                <a href="forms/apply-al"
                    style="display: inline-block; padding: 10px 20px; text-decoration: none; color: #ffffff; border-radius: 5px; transition: background-color 0.3s ease-in-out;"
                    class="btn btn-primary py-3 px-4 mt-1 wow zoomIn" data-wow-delay="0.1s">Apply Now!</a>
            </center>

        </div>
    </div>
</div>
    -->



<div class="colorlib-blog colorlib-light-grey">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 style="font-size: 16px;"class="section-title bg-white text-center text-primary px-3">Latest</h1>
            <h1 class="mb-5">ARTICLES</h1>
        </div>

        <div class="row">

            <?php 

$query = "SELECT * FROM pwc_db_news ORDER BY date DESC";

$statement = $connect->prepare($query);

$statement->execute();

$limit = 3;
$rowCount = 0;

if($statement->rowCount() > 0)
{
    foreach ($statement->fetchAll() as $row) {

        $rowCount++;
    
        ?>


            <div class="col-md-4 animate-box">
                <article class="article-entry">
                    <a href="blog/<?php echo $row["slug"]; ?>" class="blog-img">
                        <img src="content/img/img-blog/<?php echo $row["photo"]; ?>" alt="<?php echo $row["photo"]; ?>"><br><br>
                        <p class="meta"><span class="day"><?php echo $row["date"]; ?></span> │ <span></span>
                            <span><?php echo $row["category"]; ?></span></p>
                    </a>
                    <div class="desc">
                        <h1 style="font-size: 24px;"><a href="blog/<?php echo $row["slug"]; ?>"><?php echo $row["title"]; ?></a></h1>
                        <p><?php echo htmlspecialchars(strip_tags($row["excerpt"])); echo "......"; ?></p>
                    </div>
                </article>
            </div>


            <?php 
                if ($rowCount >= $limit) {
         
                    break;
                }
					}
		}	
        ?>
        </div>
    </div>

</div>
<center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="blog/" data-wow-delay="0.1s">Read More</a></center>
</div>


<br> <br> <br>
<!-- Updates -->
<div class="container">
    <div class="row">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 style="font-size: 16px;" class="section-title bg-white text-center text-primary px-3">Featured</h1>
            <h1 class="mb-5">UPDATES</h1>

            <?php

//https://dash.elfsight.com/

$currentDate = date('d');
//$currentDate = 13;

if ($currentDate >= 1 && $currentDate <= 5) {
    // Display content for the first date range (1-5) nelithaonline2006@gmail.com
    echo '<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>';
    echo '<div class="elfsight-app-d0b62cf4-1222-480f-b498-054bc508d296" data-elfsight-app-lazy></div>';
} elseif ($currentDate >= 6 && $currentDate <= 10) {
    // Display content for the second date range (6-10) admin@princeofwales.edu.lk
    echo '<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>';
    echo '<div class="elfsight-app-4c62906a-b318-4f4d-88ae-cccbc4f8bb91" data-elfsight-app-lazy></div>';
} elseif ($currentDate >= 11 && $currentDate <= 15) {
    // Display content for the third date range (11-15) nelithavindinu7@gmail.com
    echo '<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>';
    echo '<div class="elfsight-app-db653e73-f1b6-4c75-a9ee-cc848e46627f" data-elfsight-app-lazy></div>';
} elseif ($currentDate >= 16 && $currentDate <= 20) {
    // Display content for the fourth date range (16-20) nsewwandi134@gmail.com
    echo '<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>';
    echo '<div class="elfsight-app-b4644e03-2113-482b-82e6-26fa12d39cda" data-elfsight-app-lazy></div>';
} elseif ($currentDate >= 21 && $currentDate <= 25) {
    // Display content for the fifth date range (21-25) indrakapriyawansha53@gmail.com
    echo '<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>';
    echo '<div class="elfsight-app-081f2913-286d-405f-8930-23a70c658c4f" data-elfsight-app-lazy></div>';
} elseif ($currentDate >= 26 && $currentDate <= 31) {
    // Display content for the sixth date range (26-31)
    echo '<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>';
    echo '<div class="elfsight-app-45369dc9-a96e-4972-9127-34d94184cbdd" data-elfsight-app-lazy></div>';
} else {
    echo 'Not Available';
}
?>



        </div>
    </div>
</div>
<!-- Updates -->



<br> <br>

<!-- Events Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 style="font-size: 16px;" class="section-title bg-white text-center text-primary px-3">UPCOMING & PAST</h1>
            <h1 class="mb-5">EVENTS</h1>
        </div>

        <div class="row g-4 justify-content-center">

            <?php 
$query = "SELECT * FROM pwc_db_events ORDER BY date DESC";
$statement = $connect->prepare($query);
$statement->execute();
$limit = 3;
$rowCount = 0;

if($statement->rowCount() > 0)
{
    foreach ($statement->fetchAll() as $row) {
        $rowCount++;
?>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" style="width: auto;"
                            src="content/img/img-events/<?php echo($row["img"]) ?>" alt="<?php echo($row["title"]) ?>">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h4 class="mb-4"><?php echo($row["title"]) ?></h4>
                    </div>
                    <div class="w-100 d-flex justify-content-center bottom-0 start-0 mb-4">
                        <a href="events/<?php echo $row["slug"]; ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                            style="border-radius: 30px 30 30 30px;">Read More</a>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-calendar text-primary me-2"></i><?php echo($row["date"]) ?></small>
                        <small class="flex-fill text-center py-2"><i
                                class="fa fa-map-marker text-primary me-2"></i><?php echo($row["location"]) ?></small>
                    </div>
                </div>
            </div>
            <?php 
    if ($rowCount >= $limit) {
        break;
    }
}
} else {
    echo '
    <div class="text-center">
    <i class="fas fa-exclamation-circle text-primary mb-4"></i>
    No Upcoming Events to Show
    </div>';
}
?>
        </div>

    </div>
    <br><br>
    <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="events/" data-wow-delay="0.1s">View More</a>
    </center>
</div>



</div>
</div>
<!-- Events End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="content/img/img-home/about-pwc.webp"
                        alt="Learning Begins With Us" style="object-fit: cover;" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 style="font-size: 16px;" class="section-title bg-white text-start text-primary pe-3">About Us</h1>
                <h1 class="mb-4">Learning Begins With Us</h1>
                <p class="mb-4">Since the inception of the school in 1876, Prince of Wales’ College has been
                    considered as a major school in Moratuwa area and over the years, established its name as a
                    leading school in Sri Lanka. Over the years, Prince of Wales’ College has provided the society
                    with countless men of great caliber whom we are happy to say have served both, their school and
                    the country alike….</p>
                <p class="mb-4">And now, keeping up with the fast paced world, we have launched our new, official
                    website. With the internet being a truly powerful means of reaching out to the community, we
                    believe this would aid us to bridge the gap between the school and the parents, past pupils,
                    past teachers etc. We warmly welcome all of you to be a part of this and there-by keep the
                    evergreen Cambrian spirit high amongst us all!</p>
                <a class="btn btn-primary py-3 px-5 mt-2" href="about">Know More
                    About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Counter Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-award text-primary mb-4"></i>
                        <h1 class="mb-3">
                            <?php echo $age ?>
                        </h1>
                        <h5 class="mb-3">Years of Excellence</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h1 class="mb-3">200+</h1>
                        <h5 class="mb-3">Qualified Staff</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-child text-primary mb-4"></i>
                        <h1 class="mb-3">50+</h1>
                        <h5 class="mb-3">Clubs & Societies</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-running text-primary mb-4"></i>
                        <h1 class="mb-3">25+</h1>
                        <h5 class="mb-3">Sports</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter End -->


<?php

$query = "SELECT * FROM principal_msg";
$statement = $connect->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();

if (count($rows) === 0) {
    header("Location: https://princeofwales.edu.lk/404.php");
}

foreach ($rows as $row) {
}
?>

<!-- msg Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="content/img/img-home/principal-pwc.webp"
                        alt="pwc principal" style="object-fit: cover;" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                <h1 class="mb-4">Principal's Message</h1>
                <p class="mb-4">- <?php echo $row["name"]; ?></p>
                <p class="mb-4"><?php echo substr($row["msg"], 0, 500); ?>
    <a href="principal-message">Read More...</a>
</p>


                <a class="btn btn-primary py-3 px-5 mt-2" href="about/school-administration">View School
                    Administration</a>
            </div>
        </div>
    </div>
</div>
<!-- msg End -->





<!-- Sports Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">SPORTS</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="sports#team-sports">
                            <img class="img-fluid" src="content/img/img-home/team-sports-home-pwc.webp"
                                alt="team sports" style="width: auto;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Team Sports</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="sports#individual-sports">
                            <img class="img-fluid" src="content/img/img-home/individual-sports-home-pwc.webp"
                                alt="Individual Sports" style="width: auto;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Individual Sports</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="sports#aquatic-sports">
                            <img class="img-fluid" src="content/img/img-home/water-sports-home-pwc.webp"
                                alt="Aquatic sports" style="width: auto;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Aquatic Sports</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="sports#combat-sports">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="content/img/img-home/combat-sports-home-pwc.webp" alt="combat sports"
                        style="object-fit: cover;" loading="lazy">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <h5 class="m-0">Combat Sports</h5>
                    </div>
                </a>
            </div>
            <br><br><br><br>
            <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="sports" data-wow-delay="0.1s">Explore
                    More</a></center>

        </div>

    </div>
</div>
<!-- Sports Enf -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="content/img/img-home/big-match-pwc.webp"
                        alt="big match" style="object-fit: cover;" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">big match</h6>
                <h1 class="mb-4">BATTLE OF THE GOLDS</h1>
                <p class="mb-4">The Prince of Wales'–St. Sebastian's Cricket Encounter (The Battle of the Golds) is
                    an annual cricket match played between Prince of Wales' College and St. Sebastian's College
                    since 1933. <br><br>It is known as The Battle of the Golds due to the colours of the two school's
                    flags i.e. Purple, Gold and Maroon of Prince of Wales' College and Green, White & Gold of St.
                    Sebastian's College.</p>
<br>
                <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="big-match"
                    data-wow-delay="0.1s">Explore</a>

            </div>
        </div>
    </div>
</div>


<!-- Clubs Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">CLUBS & SOCIETIES</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="clubs#media-clubs">
                            <img class="img-fluid" src="content/img/img-home/media-clubs-home-pwc.webp"
                                alt="media clubs" style="width: auto;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Media Unit</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="clubs#edu-clubs">
                            <img class="img-fluid" src="content/img/img-home/educational-clubs-home-pwc.webp"
                                alt="edu clubs" style="width: auto;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Educational Clubs</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="clubs#tech-clubs">
                            <img class="img-fluid" src="content/img/img-home/tech-clubs-home-pwc.webp" alt="tech clubs"
                                style="width: auto;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin: 1px;">
                                <h5 class="m-0">Technological Clubs</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="clubs#service-clubs">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="content/img/img-home/community-service-clubs-home-pwc.webp" alt="commiunity service clubs"
                        style="object-fit: cover;" loading="lazy">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <h5 class="m-0">Commiunity Service Clubs</h5>
                    </div>
                </a>
            </div>
            <br>
            <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="clubs" data-wow-delay="0.1s">Explore
                    More</a></center>

        </div>
    </div>
</div>
<!-- Clubs Enf -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="/content/img/img-publications/publication-standerd.webp"
                        alt="publications" style="object-fit: cover;" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                <h1 class="mb-4">PUBLICATIONS</h1>
                <p class="mb-4">

                College publications, like the annual magazine and the golden book, are cherished treasures that capture the essence of our academic journey. <br><br>The annual magazine is like a time capsule, preserving memories of events, achievements, and personal reflections throughout the year. It's a colorful collage of photographs, articles, and creative pieces that showcase the diversity and talents of our college community. 
                </p>

                <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="publications"
                    data-wow-delay="0.1s">Explore</a>

            </div>
        </div>
    </div>
</div>

<style>
    .explore-history-page-header {
        background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/img-home/explore-history-pwc.webp);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .explore-history-page-header-inner {
        background: rgba(15, 23, 43, .7);
    }
</style>

<!-- history Start -->
<div class="container-fluid bg-primary py-5 mb-5 explore-history-page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown"><?php echo $age ?> Years and Counting</h1>
                <h1 style="font-size: 20px;" class=" text-white animated slideInDown"><br> Explore college history and discover <?php echo $age ?> years of rich
                    heritage and academic excellence. <br> </h1>
                <center>
                    <a class="btn btn-primary py-3 px-4 mt-2 wow zoomIn" href="history" data-wow-delay="0.1s">Explore College History</a>
                </center>
            </div>
        </div>
    </div>
</div>

<!-- history End -->



<?php include 'footer.php'; ?>

</body>

</html>
