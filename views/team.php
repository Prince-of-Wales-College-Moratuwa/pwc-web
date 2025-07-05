<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Development Team</title>
    <?php
    $page = 'about';
    include '../database_connection.php';

    ?>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Web Development Team | Prince of Wales' College" />
    <meta name="description"
        content="Discover the talented Website Development Team at Prince of Wales College. Elevate your online presence with our expert web solutions. Your digital success starts here!" />
    <meta name="keywords" content="prince of wales college website developers, prince of wales college website team" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/team" />
    <meta property="og:title" content="Web Development Team | Prince of Wales' College" />
    <meta property="og:description"
        content="Discover the talented Website Development Team at Prince of Wales College. Elevate your online presence with our expert web solutions. Your digital success starts here!" />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/web-launch/web-launch.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/team" />
    <meta property="twitter:title" content="Web Development Team | Prince of Wales' College" />
    <meta property="twitter:description"
        content="Discover the talented Website Development Team at Prince of Wales College. Elevate your online presence with our expert web solutions. Your digital success starts here!" />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/web-launch/web-launch.webp" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php include 'includes/header.php'; ?>


    <style>
        .sports-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/bestweb/2024/bestweb-awards-ceremony-2024-2.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .sports-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }

        .strip-card {
            display: flex;
            align-items: stretch;
            background: #f8f9fa;
            padding: 0;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
            overflow: hidden;
        }

        .strip-card-img {
            flex-shrink: 0;
            width: 140px;
            height: auto;
            overflow: hidden;
        }

        .strip-card-img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            display: block;
        }

        .strip-card-text {
            padding: 15px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
        }

        .strip-card-text h5 {
            margin: 0 0 0.2rem 0;
            font-weight: 600;
            font-size: 1.25rem;
        }

        .strip-card-text small {
            color: #555;
            font-size: 0.9rem;
        }

        @media (max-width: 350px) {
            .strip-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .strip-card-img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }

            .strip-card-img img {
                height: auto;
                width: 100%;
            }
        }
    </style>


</head>

<body>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 sports-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">WEB DEVELOPMENT TEAM &lt;/&gt;</h1>
                    <!-- <p class="btn text-white animated slideInDown">Our team consists of passionate and skilled individuals who work tirelessly to bring our vision to life. Each member plays a unique and vital role in ensuring the success of our projects. From development and design to photography and media, meet the talented people behind the scenes.</p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-1">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <p class="mb-3">
            <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><a property="dct:title" rel="cc:attributionURL" href="https://princeofwales.edu.lk">princeofwales.edu.lk</a> by <a rel="cc:attributionURL dct:creator" property="cc:attributionName" href="https://princeofwales.edu.lk/team">Cambrians ICT Society</a> is licensed under <a href="https://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">Creative Commons Attribution-NonCommercial 4.0 International<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt=""></a></p>
            Any unauthorized use is prohibited. All rights reserved. <br> The website's development was carried out by the dedicated team at Cambrians' ICT Society, <br> led by Nelitha Priyawansha as the Head of the Web Development Team. </p>
        </div>
    </div>




    <div class="container-xxl py-5">
        <div class="container">


            <div class="d-flex flex-column gap-4">
                <?php
                $query = "SELECT * FROM pwc_db_team";
                $statement = $connect->prepare($query);
                $statement->execute();

                if ($statement->rowCount() > 0) {
                    foreach ($statement->fetchAll() as $row) {
                ?>
                        <div class="strip-card">
                            <div class="strip-card-img">
                                <img src="/content/img/team/<?php echo $row["img"]; ?>"
                                    alt="<?php echo htmlspecialchars($row["name"]); ?>" />
                            </div>
                            <div class="strip-card-text">
                                <small><?php echo $row["post"]; ?></small>
                                <h4><?php echo $row["name"]; ?></h4>
                                <small><?php echo $row["quali"]; ?></small>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>


        <div class="row mt-5 justify-content-center">
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                <div style="background-color: #f8d7da; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h5 style="color: #721c24;" class="mb-3">Media Partner</h5>
                    <div class="mb-3"
                        style="overflow: hidden; width: 150px; height: 100px; position: relative; margin: 0 auto;">
                        <img src="/cmbu/images/logo%20red.webp" alt="CMBU Logo"
                            style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%); width: 100%; height: auto;">
                    </div>
                    <h4 style="color: #721c24;"><strong>Cambrians' Media & Broadcasting Unit</strong></h4>
   
                    <div class="mt-3">
                        <a href="https://facebook.com/cmbulive" target="_blank"
                            style="margin: 0 10px; color: #800000;">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="https://instagram.com/cmbulive" target="_blank"
                            style="margin: 0 10px; color: #800000;">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://whatsapp.com/channel/0029VanJvjFCMY0GGu2F6g3M" target="_blank"
                            style="margin: 0 10px; color: #800000;">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </a>
                        <a href="https://youtube.com/cmbulive" target="_blank"
                            style="margin: 0 10px; color: #800000;">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="https://princeofwales.edu.lk/cmbu" target="_blank"
                            style="margin: 0 10px; color: #800000;">
                            <i class="fas fa-globe fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>



            <div class="col-12 text-center mt-3 wow fadeInUp" data-wow-delay="0.3s">
                <div style="background-color: #fff3cd; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h5 style="color: #856404;" class="mb-3">Special Thanks</h5>

                    <div class="mb-3">
                        <div class="mb-3"
                            style="overflow: hidden; width: 150px; height: 100px; position: relative; margin: 0 auto;">
                            <img src="/content/img/team/cits.webp" alt="CITS Logo"
                                style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%); width: 100%; height: auto;">
                        </div>
                        <h4 style="color: #856404; "><strong>Cambrians' ICT Society</strong></h4>
                    </div>

                    <hr style="border: 1px solid #856404; width: 50%; margin: 20px auto;">

                    <h4 style="color: #856404;"><strong>Mr. Chamara Jeewantha, Mrs. Sharangika Perera</strong></h4>
                </div>
            </div>

        </div>


    </div>
    </div>

    <div class="container-lg my-3">

        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">BestWeb.LK Awards Night 2024</h1>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 600px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="content/img/team/bestweb24.webp"
                        alt="BestWeb.LK Awards Night 2024" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4"> The prestigious <strong>BestWeb.LK Awards Night 2024</strong> was held on <strong>14th
                        August 2024</strong> at the <strong>Cinnamon Grand Colombo</strong>, celebrating excellence in
                    web development across Sri Lanka. <br><br>Our website, <strong>princeofwales.edu.lk</strong>,
                    proudly secured the <strong>Silver Award</strong> in the school website category, marking a
                    significant achievement for our team. The event recognized the dedication, creativity, and
                    innovation behind the finest websites in the country, and this milestone reflects our commitment to
                    digital excellence.
                <p><i class="fa fa-calendar text-primary me-2"></i>Date: <b>14th August 2024</b></p>
                <p><i class="fa fa-map-marker text-primary me-2"></i>Location: <b>Cinnamon Grand Colombo</b></p>
                </p>
                <a class="btn btn-primary py-3 px-5 mt-2"
                    href="blog/prince-of-wales-college-website-wins-silver-at-bestweblk-2024">Read More</a>
            </div>
        </div>
    </div>

    <br>

    <div class="container-lg my-3">

        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">Website Launching Event</h1>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">The launch of our new website was a proud milestone, celebrating the hard work and
                    creativity of our <strong>Web Development Team</strong>. <br><br> The event featured a
                    ribbon-cutting
                    ceremony, a showcase of innovative features, and heartfelt acknowledgments to mentors and
                    supporters. Captured moments of joy and teamwork highlight the dedication behind this achievement,
                    marking a new chapter in our digital journey.
                <p><i class="fa fa-calendar text-primary me-2"></i>Date: <b>15th September 2023</b></p>
                <p><i class="fa fa-map-marker text-primary me-2"></i>Location: <b>School Auditorium</b></p>
                </p>
                <a class="btn btn-primary py-3 px-5 mt-2"
                    href="blog/official-website-launch">Read More</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 600px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="content/img/team/web-launch.webp"
                        alt="Website Launch Event" style="object-fit: cover;">
                </div>
            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php include 'includes/footer.php'; ?>

</body>

</html>