<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="jYZeftnqpxLLjE_8cKEhxIWBAB0ZD5EGWEF2z-3maLU" />

    <?php
    $page = 'home';
?>
    <?php 
    include '../database_connection.php';
    
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

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('/service-worker.js')
                    .then(function (registration) {
                        console.log('ServiceWorker registration successful with scope: ', registration
                            .scope);
                    })
                    .catch(function (err) {
                        console.error('ServiceWorker registration failed: ', err);
                    });
            });
        }
    </script>


    <?php
    include 'includes/header.php';
    ?>
    <style>
        .notice-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 1)), url(content/img/img-sports/battle-of-the-golds-header-pwc.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .notice-header-inner {
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

    <div class="header-carousel-wrapper position-relative d-flex justify-content-center align-items-center">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <picture>
                    <source media="(max-width: 600px)" srcset="content/img/img-home/header-main-pwc_mobile.webp">
                    <source media="(max-width: 800px)" srcset="content/img/img-home/header-main-pwc_tab.webp">
                    <img class="img-fluid" src="content/img/img-home/header-main-pwc_desktop.webp"
                        alt="Front View of Prince of Wales College">
                </picture>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, 0.375);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-9 col-lg-8 text-center">
                                <p class="h1 text-white text-uppercase mb-3" style="font-size: 24px;">
                                    Welcome To</p>
                                <h1 class="display-3 text-white text-uppercase animated slideInDown text-header">Prince
                                    of Wales'
                                    College</h1>
                                <!-- <p class="h1 text-white text-uppercase mb-3" style="font-size: 30px;">
                    Moratuwa</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--     
    <br>
    <div class="container-fluid bg-primary py-5 mb-5 notice-header">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="h1 text-white animated slideInDown">Vote Now!</h1>
                <p class=" mb-3 text-white animated slideInDown">To become the most popular school website, vote for us
                    in the BestWeb.LK 2024 contest.</p>
                <p class="h6 text-white animated slideInDown">Deadline for voting is 12th December </p><br>
                <center>
                    <a href="https://vote.bestweb.lk" target="_blank"
                        style="display: inline-block; padding: 10px 20px; text-decoration: none; color: #ffffff; border-radius: 5px; transition: background-color 0.3s ease-in-out;"
                        class="btn btn-primary py-3 px-4 mt-1 wow zoomIn" data-wow-delay="0.1s">Vote Now!</a>
                </center>

            </div>
        </div>
    </div> -->


    <br>
    <div class="container-fluid bg-primary py-5 mb-5 notice-header">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="h1 text-white animated slideInDown">Cricket Coaching Vacancies Available</h1>
                <p class="mb-3 text-white animated slideInDown">We are looking for Energetic, Experienced, Knowledgeable
                    persons for our coaching staff.</p>
                <p class="h6 text-white animated slideInDown">Deadline: 10th June 2024</p><br>
                <center>
                    <a href="https://princeofwales.edu.lk/blog/vacancies-for-cricket-coaches-2024"
                        style="display: inline-block; padding: 10px 20px; text-decoration: none; color: #ffffff; border-radius: 5px; transition: background-color 0.3s ease-in-out;"
                        class="btn btn-primary py-3 px-4 mt-1 wow zoomIn" data-wow-delay="0.1s">
                        Details About Cricket Coaching Vacancies</a>
                </center>
            </div>
        </div>
    </div>


</div>


<!-- Counter Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- First row for mobile -->
            <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-place-of-worship text-primary mb-4"></i>
                        <p class="h1 mb-3" id="yearsOfExcellence"><?php echo $age ?></p>
                        <p class="h5 mb-3">Years of Excellence</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-child text-primary mb-4"></i>
                        <p class="h1 mb-3" id="numberOfStudents">4,000+</p>
                        <p class="h5 mb-3">Students</p>
                    </div>
                </div>
            </div>
            <!-- Second row for mobile -->
            <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <p class="h1 mb-3" id="qualifiedStaff">200+</p>
                        <p class="h5 mb-3">Qualified Staff</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-running text-primary mb-4"></i>
                        <p class="h1 mb-3" id="clubsAndSports">50+</p>
                        <p class="h5 mb-3">Clubs & Sports</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter End -->

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
                <p style="font-size: 16px;" class="h1 section-title bg-white text-start text-primary pe-3">About Us</p>
                <h2 class="mb-4">Learning Begins With Us</h2>
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



<br>

<div class="colorlib-blog colorlib-light-grey">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <p style="font-size: 16px;" class="h1 section-title bg-white text-center text-primary px-3">Latest</p>
            <p class="h1 mb-5">NEWS</p>
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


            <div class="col-md-4 animate-box wow fadeInUp" data-wow-delay="0.1s">
                <article class="article-entry">
                    <a href="blog/<?php echo $row["slug"]; ?>" class="blog-img">
                        <img src="content/img/img-blog/<?php echo $row["photo"]; ?>" alt="<?php echo $row["photo"]; ?>"
                            width="600" height="400" loading="lazy"><br><br>
                        <p class="meta"><span class="day"><?php echo $row["date"]; ?></span> │ <span></span>
                            <span><?php echo $row["category"]; ?></span></p>
                    </a>
                    <div class="desc">
                        <h2 class="h1" style="font-size: 24px;"><a
                                href="blog/<?php echo $row["slug"]; ?>"><?php echo $row["title"]; ?></a></h2>
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
<center>
    <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="blog/" data-wow-delay="0.1s" title="Read Blog">
        Read More Latest Blog Posts
    </a>
</center>

</div>



<br> <br>

<!-- Events Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <p style="font-size: 16px;" class="h1 section-title bg-white text-center text-primary px-3">UPCOMING & PAST
            </p>
            <h2 class="h1 mb-5">EVENTS</h2>
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
                            src="content/img/img-events/<?php echo($row["img"]) ?>" alt="<?php echo($row["title"]) ?>"
                            loading="lazy">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h4 class="mb-4"><?php echo($row["title"]) ?></h4>
                    </div>
                    <div class="w-100 d-flex justify-content-center bottom-0 start-0 mb-4">
                        <a href="events/<?php echo $row["slug"]; ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                            style="border-radius: 30px 30 30 30px;">View Event</a>
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
    <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="events/" data-wow-delay="0.1s">View More
            Events</a>
    </center>
</div>



</div>
</div>
<!-- Events End -->




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
                <p class="h6 section-title bg-white text-start text-primary pe-3"></p>
                <h2 class="h1 mb-4">Principal's Message</h2>
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
            <p class="h6 section-title bg-white text-center text-primary px-3"></p>
            <p class="h1 mb-5">SPORTS</p>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden futuristic-effect"
                            href="sports#team-sports">
                            <img class="img-fluid" src="content/img/img-home/team-sports-home-pwc.webp"
                                alt="Image depicting various team sports" style="width: auto;" width="500px"
                                height="500px" loading="lazy">
                            <div
                                class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                                <h5 class="m-0">Team Sports</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden futuristic-effect"
                            href="sports#individual-sports">
                            <img class="img-fluid" src="content/img/img-home/individual-sports-home-pwc.webp"
                                alt="Image depicting various individual sports" style="width: auto;" loading="lazy">
                            <div
                                class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                                <h5 class="m-0">Individual Sports</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden futuristic-effect"
                            href="sports#aquatic-sports">
                            <img class="img-fluid" src="content/img/img-home/water-sports-home-pwc.webp"
                                alt="Image depicting various aquatic sports" style="width: auto;" loading="lazy">
                            <div
                                class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                                <h5 class="m-0">Aquatic Sports</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden futuristic-effect"
                    href="sports#combat-sports">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="content/img/img-home/combat-sports-home-pwc.webp"
                        alt="Image depicting various combat sports" style="object-fit: cover;" loading="lazy">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                        <h5 class="m-0">Combat Sports</h5>
                    </div>
                </a>
            </div>
            <br><br><br><br>
            <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn futuristic-button" href="sports"
                    data-wow-delay="0.1s">Explore
                    Sports</a></center>

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
                <p class="h1 mb-4">BATTLE OF THE GOLDS</p>
                <p class="mb-4">The Prince of Wales'–St. Sebastian's Cricket Encounter (The Battle of the Golds) is
                    an annual cricket match played between Prince of Wales' College and St. Sebastian's College
                    since 1933. <br><br>It is known as The Battle of the Golds due to the colours of the two school's
                    flags i.e. Purple, Gold and Maroon of Prince of Wales' College and Green, White & Gold of St.
                    Sebastian's College.</p>
                <br>
                <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="big-match" data-wow-delay="0.1s">Explore
                    Bigmatch</a>

            </div>
        </div>
    </div>
</div>


<!-- Clubs Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <p class="h1 mb-5">CLUBS & SOCIETIES</p>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden futuristic-effect" href="clubs#media-clubs">
                            <img class="img-fluid" src="/content/img/img-home/media-clubs-home-pwc.webp"
                                alt="Image depicting media clubs" style="width: auto;" loading="lazy">
                            <div
                                class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                                <h5 class="m-0">Media Clubs</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden futuristic-effect" href="clubs#edu-clubs">
                            <img class="img-fluid" src="content/img/img-home/educational-clubs-home-pwc.webp"
                                alt="Image depicting educational clubs" style="width: auto;" loading="lazy">
                            <div
                                class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                                <h5 class="m-0">Educational Clubs</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden futuristic-effect" href="clubs#tech-clubs">
                            <img class="img-fluid" src="content/img/img-home/tech-clubs-home-pwc.webp"
                                alt="Image depicting technological clubs" style="width: auto;" loading="lazy">
                            <div
                                class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                                <h5 class="m-0">Technological Clubs</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden futuristic-effect" href="clubs#service-clubs">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="content/img/img-home/community-service-clubs-home-pwc.webp"
                        alt="Image depicting community service clubs" style="object-fit: cover;" loading="lazy">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 futuristic-overlay">
                        <h5 class="m-0">Community Service Clubs</h5>
                    </div>
                </a>
            </div>
            <br>
            <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn futuristic-button" href="clubs"
                    data-wow-delay="0.1s">Explore
                    Clubs</a></center>

        </div>
    </div>
</div>


<!-- Clubs Enf -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="/content/img/img-publications/publication-standerd.webp" alt="publications"
                        style="object-fit: cover;" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                <p class="h1 mb-4">PUBLICATIONS</p>
                <p class="mb-4">

                    College publications, like the annual magazine and the golden book, are cherished treasures that
                    capture the essence of our academic journey. <br><br>The annual magazine is like a time capsule,
                    preserving memories of events, achievements, and personal reflections throughout the year. It's a
                    colorful collage of photographs, articles, and creative pieces that showcase the diversity and
                    talents of our college community.

                    <ul>
                        <li>Magazine</li>
                        <li>Golden Book</li>
                        <li>Golden Captures</li>
                        <li>Music on Demand</li>
                    </ul>
                </p>

                <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="publications" data-wow-delay="0.1s">View</a>

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
                <p class="h1 display-3 text-white animated slideInDown"><?php echo $age ?> Years and Counting</p>
                <p style="font-size: 20px;" class="h2 text-white animated slideInDown"><br> Explore college history and
                    discover <?php echo $age ?> years of rich
                    heritage and academic excellence. <br> </p>
                <center>
                    <a class="btn btn-primary py-3 px-4 mt-2 wow zoomIn" href="history" data-wow-delay="0.1s">Explore
                        College History</a>
                </center>
            </div>
        </div>
    </div>
</div>

<!-- history End -->



<?php include 'includes/footer.php'; ?>

</body>

</html>