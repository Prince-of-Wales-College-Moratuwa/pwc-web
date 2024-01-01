<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <?php
    $page = 'about';
?>

    <?php include 'header.php'; ?>

    <!-- Primary Meta Tags -->
    <meta name="title" content="About Us | Prince of Wales' College" />
    <meta name="description"
        content="Discover Prince of Wales College: A historic institution of higher learning fostering academic excellence and personal growth. Join us in shaping the future!" />
    <meta name="keywords"
        content="about prince of wales college, prince of wales college flag, prince of wales college anthem, prince of wales college principal" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/about" />
    <meta property="og:title" content="About Us | Prince of Wales' College" />
    <meta property="og:description"
        content="Discover Prince of Wales College: A historic institution of higher learning fostering academic excellence and personal growth. Join us in shaping the future!" />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-about/header-img.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/about" />
    <meta property="twitter:title" content="About Us | Prince of Wales' College" />
    <meta property="twitter:description"
        content="Discover Prince of Wales College: A historic institution of higher learning fostering academic excellence and personal growth. Join us in shaping the future!" />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-about/header-img.webp" />


    <style>
        .about-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/img-about/header-img.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .about-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }
    </style>

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

</head>

<body>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 about-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">ABOUT US</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">KINGS OF</h6>
            <h1 class="mb-5">MORATUWA</h1>
            <p class="mb-4">Our mission is to effect quality teaching and learning environment where Cambrians would
                move forth step by step<br>in the competency based pedagogical process which is founded on national
                goals and on the theme,<br>“I serve. I value your services, developing their calibre for the well-being
                of the community.</p>
        </div>
    </div>

    <!-- Counter Start -->

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-award text-primary mb-4"></i>
                        <h1 class="mb-3">
                        echo $age; ?>
                        </h1>
                        <h5 class="mb-3">Years of Excellence</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h1 class="mb-3">300+</h1>
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

    <!-- Counter End -->




    <br><br>

    <div class="container-lg my-3" id="developed-places">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Enhancing and Beautifying School for a Bright Future</h1>
            </div>

            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="6"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="7"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="8"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="9"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="10"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="11"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="12"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="13"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="14"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="15"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="16"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="17"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="18"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="19"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="20"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="21"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="22"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="23"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="24"></li>
            </ol>


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="content/img/img-about/dev-places/developed-places (1).webp" class="d-block w-100"
                        alt="Slide 1">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (2).webp" class="d-block w-100"
                        alt="Slide 2">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (3).webp" class="d-block w-100"
                        alt="Slide 3">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (4).webp" class="d-block w-100"
                        alt="Slide 4">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (5).webp" class="d-block w-100"
                        alt="Slide 5">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (6).webp" class="d-block w-100"
                        alt="Slide 6">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (7).webp" class="d-block w-100"
                        alt="Slide 7">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (8).webp" class="d-block w-100"
                        alt="Slide 8">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (9).webp" class="d-block w-100"
                        alt="Slide 9">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (10).webp" class="d-block w-100"
                        alt="Slide 10">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (11).webp" class="d-block w-100"
                        alt="Slide 11">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (12).webp" class="d-block w-100"
                        alt="Slide 12">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (13).webp" class="d-block w-100"
                        alt="Slide 13">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (14).webp" class="d-block w-100"
                        alt="Slide 14">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (15).webp" class="d-block w-100"
                        alt="Slide 15">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (16).webp" class="d-block w-100"
                        alt="Slide 16">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (17).webp" class="d-block w-100"
                        alt="Slide 17">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (18).webp" class="d-block w-100"
                        alt="Slide 18">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (19).webp" class="d-block w-100"
                        alt="Slide 19">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (20).webp" class="d-block w-100"
                        alt="Slide 20">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (21).webp" class="d-block w-100"
                        alt="Slide 21">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (22).webp" class="d-block w-100"
                        alt="Slide 22">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (23).webp" class="d-block w-100"
                        alt="Slide 23">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (24).webp" class="d-block w-100"
                        alt="Slide 24">
                </div>

                <div class="carousel-item">
                    <img src="content/img/img-about/dev-places/developed-places (25).webp" class="d-block w-100"
                        alt="Slide 25">
                </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br>
        <p>The concept of the "Beautiful Wales" by the present Principal, in order to develop the infrastructure, and resources of the college in the year 2023, with the generous support and contribution from the Old Boys' Association in the journey of becoming the best college in year 2025.
Our tribute to the present Principal and all the committed teachers and staff, the School Development Society, and the Old Boys' Association for this great work.
It's time to gather around our Alma mater to make her beautiful and glamorous.</p>
    </div>

<script>
  var myCarousel = document.getElementById('myCarousel');

  var interval = 7000; 

  function startCarousel() {
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: interval
    });
  }
  startCarousel();
</script>




    <br>

    <!-- stars Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">NOTABLE ALUMNI</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">

                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3"
                        src="content/img/img-about/alumni/Kusal-mendis-alumni-pwc.webp"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Kusal Mendis</h5>
                    <p>International Cricket Player (2015–present)</p>

                </div>

                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3"
                        src="content/img/img-about/alumni/about-Lahiru-Thirimanne-pwc.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lahiru Thirimanne</h5>
                    <p>International Cricket Player (2010–2023)</p>
                </div>

                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3"
                        src="content/img/img-about/alumni/about-Shehan-Jayasooriya-pwc.jpeg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Shehan Jayasooriya</h5>
                    <p> International Cricket Player (2015–present)</p>
                </div>

                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3"
                        src="content/img/img-about/alumni/about-Jagath-Chamila-pwc.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jagath Chamila</h5>
                    <p>Actor</p>
                </div>

                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3"
                        src="content/img/img-about/alumni/about-Kumara-Thirimadura-pwc.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Kumara Thirimadura</h5>
                    <p>Actor</p>
                </div>

                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3"
                        src="content/img/img-about/alumni/kishu-gomes-alumini-pwc.webp"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Kishu Gomes</h5>
                    <p>Businessmen</p>
                </div>

            </div>
        </div>
    </div>

    <!-- stars End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">OUR</h6>
                    <h1 class="mb-4">VISION</h1>
                    <p class="mb-4">To Make the School with the Best Students in Every Sector in Sri Lanka by 2025</p>
                    <br>
                    <h6 class="section-title bg-white text-start text-primary pe-3">OUR</h6>
                    <h1 class="mb-4">MISSION</h1>
                    <p class="mb-4">"Facilitate the development of education, as well as co-curricular and
                        extra-curricular activities, to achieve excellence by fostering the growth of students'
                        knowledge, skills, and attitudes."</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="content/img/img-about/vission-&-mission-pwc.webp" alt="vision and mission"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Identity Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">SINHALA ANTHEM</h1>
            </div>


            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-4">The Sinhala Anthem of Prince of Wales College Moratuwa is a special song that
                        represents the school in Sri Lanka. It's sung in the Sinhala language and holds a lot of pride
                        and significance for the students and teachers. <br><br> This anthem talks about the school's
                        history,
                        values, and the strong sense of belonging that the school community shares. When sung, it
                        creates unity and a feeling of loyalty among the students, serving as a symbol of their love for
                        Prince of Wales College Moratuwa.
                    </p>
                    <audio controls>
                        <source src="content/audio/Sinhala-Anthem-PWC.mp3" type="audio/mpeg"> </audio>
                    <br><br>
                    <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="content/audio/Sinhala-Anthem-PWC.mp3"
                        download target="_blank" data-wow-delay="0.7s">Download MP3</a>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="content/img/img-about/sinhala-anthem-pwc.webp" alt="Sinhala Anthem PWC"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">ENGLISH ANTHEM</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="content/img/img-about/english-anthem-pwc.webp" alt="English Anthem PWC"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <br>
                    <p class="mb-4">The English anthem of Prince of Wales College Moratuwa is a special song that
                        represents our school's identity and values. It's a symbol of our pride and unity, sung during
                        important school events. <br><br> The anthem's lyrics emphasize our commitment to education,
                        character
                        development, and excellence, instilling a sense of school spirit and loyalty among students.
                        Whether at sports events or graduation ceremonies, the English anthem is a cherished part of our
                        school experience, bringing us together and reminding us of our school's history and traditions.
                    </p>
                    <br>
                    <audio controls>
                        <source src="content/audio/English-Anthem-PWC.mp3" type="audio/mpeg"> </audio>
                    <br><br>
                    <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="content/audio/English-Anthem-PWC.mp3"
                        download target="_blank" data-wow-delay="0.7s">Download MP3</a>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">FLAG</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="content/img/img-about/flag-pwc.webp"
                            alt="flag-pwc" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-4">The flag of Prince of Wales College in Moratuwa is a simple yet elegant design that
                        proudly represents the school. It features three vibrant colors: purple, gold, and maroon. The
                        flag is divided into three horizontal stripes, with the top and bottom stripes being purple and
                        the middle one being maroon. <br><br> In the center of the maroon stripe, there is a bold gold
                        emblem
                        that showcases the school's emblem or logo. This flag symbolizes the school's pride, identity,
                        and values, making it a source of unity and recognition among the students and alumni of Prince
                        of Wales College in Moratuwa.
                        <br><br>
                        The colors purple, gold, and maroon on the flag make it look special and remind us of the
                        school's long history. The flag is like a treasure that tells the story of our school. When we
                        see this flag flying, it shows that the school is very serious about teaching and doing well.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">HOUSE SYSTEM</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="content/img/img-about/house-system-pwc.webp" alt="house flags"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-4">The House System at Prince of Wales College was introduced in 1904. This system
                        divided the students into different groups called houses, each with its own name and identity.
                        It was a way to create a sense of belonging and competition among the students. Each house had
                        its own colors, emblem, and motto, and students would compete in various activities and sports
                        to earn points for their house. This system not only encouraged friendly competition but also
                        fostered teamwork and camaraderie among the students. Over the years, the House System has
                        become an integral part of the college's tradition, bringing students together and instilling a
                        strong sense of pride in their respective houses.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Founders (Red & Black)
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Gunawardana (Gold &
                                Black)</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Rodrigo (Purpule & Gold)
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mendis (Red & Gold)</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Jayasooriya (Blue & Gold)
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lewis (Red & Purple)</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Administration Start -->
    <div class="container-xxl py-5" id="administration">
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

$limit = 4;
$rowCount = 0;

if($statement->rowCount() > 0)
{
    foreach ($statement->fetchAll() as $row) {

        $rowCount++;
    
        ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo $row["img"]; ?>" alt="<?php echo $row["name"]; ?>"
                                style="width: auto;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $row["name"]; ?></h5>
                            <small><?php echo $row["post"]; ?>
                            </small>
                        </div>
                    </div>
                </div>

                <?php 
                if ($rowCount >= $limit) {
         
                    break;
                }
					}
		}	
        ?>

                <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="about/school-administration"
                        data-wow-delay="0.1s">View All</a></center>

            </div>

        </div>
    </div>

    <!-- Administration End -->




    <br>


    <!-- prefects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">PREFECTS GUILD</h1>
            </div>


            <div class="row g-4">

                <?php 

$query = "SELECT * FROM about_prefect_topboard";

$statement = $connect->prepare($query);

$statement->execute();

$limit = 4;
$rowCount = 0;

if($statement->rowCount() > 0)
{
    foreach ($statement->fetchAll() as $row) {

        $rowCount++;
    
        ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo $row["img"]; ?>" alt="Deputy Head Prefect"
                                style="width: auto;">
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $row["name"]; ?></h5>
                            <small><?php echo $row["post"]; ?></small>
                        </div>
                    </div>
                </div>

                <?php 
                if ($rowCount >= $limit) {
         
                    break;
                }
					}
		}	
        ?>

                <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="about/prefects-guild"
                        data-wow-delay="0.1s">View All</a></center>

            </div>

        </div>
    </div>

    <!-- prefects End -->


    <br>

    <style>
        iframe {
            width: 100%;
            height: 100vh;
        }
    </style>

    <!-- location -->
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Locations and</h6>
            <h1 class="mb-5">INFRASTRUCTURE</h1>
        </div>
        
    </div>
<br>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="content/img/img-about/location-new-pwc.webp" alt="Locations" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                <h1 class="mb-4"></h1>
                <p class="mb-4">The Prince of Wales College started building its school a long time ago, on September
                    14, 1876. They put down the first stone to begin the construction. A smart person named Mr.
                    Muhandiram Mendis Jayawardane made the basic plan for the school. <br><br> This plan helped make the
                    school's
                    infrastructure, which means all the buildings and things the school needed to work properly. So, the
                    Prince of Wales College has a history that goes back a very long time, and its infrastructure was
                    carefully designed to support the education of its students.</p>
                <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="about/school-infrastructure"
                    data-wow-delay="0.1s">View All</a>
            </div>
        </div>
    </div>
    </div>



    <!-- location -->


    <?php include 'footer.php'; ?>
</body>

</html>
