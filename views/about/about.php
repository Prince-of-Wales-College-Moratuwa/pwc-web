<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <?php
    $page = 'about';
    include '../../database_connection.php'; 

?>


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
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-about/About-us-header.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/about" />
    <meta property="twitter:title" content="About Us | Prince of Wales' College" />
    <meta property="twitter:description"
        content="Discover Prince of Wales College: A historic institution of higher learning fostering academic excellence and personal growth. Join us in shaping the future!" />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-about/About-us-header.webp" />


    <?php include '../includes/header.php'; ?>



    <style>
        .about-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/img-about/About-us-header.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .about-page-header-inner {
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

    <div class="container-xxl py-5" id="vission-mission">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">KINGS OF</h6>
            <h1 class="mb-5">MORATUWA</h1>
            <p class="mb-4">Our mission is to effect quality teaching and learning environment where Cambrians would
                move forth step by step<br>in the competency based pedagogical process which is founded on national
                goals and on the theme,<br>“I serve. I value your services, developing their calibre for the well-being
                of the community.</p>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">OUR</h6>
                    <h1 class="mb-4">VISION</h1>
                    <p class="mb-4">To become the school with the best children in all respects in Sri Lanka</p>
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
                            style="object-fit: cover;" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter Start -->
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
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-4">
                <!-- First row for mobile -->
                <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-place-of-worship text-primary mb-4"></i>
                            <p class="h1 mb-3" id="yearsOfExcellence" data-target="<?php echo $age ?>">0</p>
                            <p class="h5 mb-3">Years of Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-child text-primary mb-4"></i>
                            <p class="h1 mb-3" id="numberOfStudents" data-target="4000">0</p>
                            <p class="h5 mb-3">Students</p>
                        </div>
                    </div>
                </div>
                <!-- Second row for mobile -->
                <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <p class="h1 mb-3" id="qualifiedStaff" data-target="200">0</p>
                            <p class="h5 mb-3">Qualified Staff</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 wow fadeInUp">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-running text-primary mb-4"></i>
                            <p class="h1 mb-3" id="clubsAndSports" data-target="50">0</p>
                            <p class="h5 mb-3">Clubs & Sports</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->

    <script>
        // Counter Functionality
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.h1[id]');

            counters.forEach(counter => {
                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;

                    const increment = target / 200; // Adjust the speed of the counter

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCounter, 20); // Adjust timing between updates
                    } else {
                        counter.innerText = target;

                        if (counter.id === "numberOfStudents" || counter.id === "qualifiedStaff" ||
                            counter.id === "clubsAndSports") {
                            counter.innerText += "+";
                        }
                    }
                };

                updateCounter();
            });
        });
    </script>

    <br><br>

    <!-- Updates -->
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <p style="font-size: 16px;" class="h1 section-title bg-white text-center text-primary px-3">Featured</p>
                <p class="h1 mb-5">UPDATES</p>

                <?php

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


    <br><br>

    <div class="container-lg my-3">
        <!-- stars Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="alumini">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title bg-white text-center text-primary px-3">#PROUDCAMBRIANS</h6>
                    <h1 class="mb-5">NOTABLE ALUMNI</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">

                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3 center-image"
                            src="content/img/img-about/alumni/Kusal-mendis-alumni-pwc.webp"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Kusal Mendis</h5>
                        <p>International Cricket Player (2015–present)</p>
                    </div>

                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3 center-image"
                            src="content/img/img-about/alumni/about-Lahiru-Thirimanne-pwc.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Lahiru Thirimanne</h5>
                        <p>International Cricket Player (2010–2023)</p>
                    </div>

                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3 center-image"
                            src="content/img/img-about/alumni/about-Shehan-Jayasooriya-pwc.jpeg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Shehan Jayasooriya</h5>
                        <p>International Cricket Player (2015–present)</p>
                    </div>

                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3 center-image"
                            src="content/img/img-about/alumni/about-Jagath-Chamila-pwc.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Jagath Chamila</h5>
                        <p>Actor</p>
                    </div>

                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3 center-image"
                            src="content/img/img-about/alumni/about-Kumara-Thirimadura-pwc.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Kumara Thirimadura</h5>
                        <p>Actor</p>
                    </div>

                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3 center-image"
                            src="content/img/img-about/alumni/kishu-gomes-alumini-pwc.webp"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Kishu Gomes</h5>
                        <p>Businessman</p>
                    </div>

                </div>


            </div>
        </div>

        <style>
            .center-image {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        </style>

        <!-- stars End -->

        <!--Anthem-->
        <div class="container-xxl py-5" id="anthems">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                    <h1 class="mb-5">ANTHEM</h1>
                </div>

                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="content/img/img-about/pwc-english-anthem.webp"
                                alt="Prince of Wales College English Anthem" style="object-fit: cover;" loading="lazy">
                        </div>

                        <div class="mt-3 text-center">
                            <audio class="w-100 custom-playbar" preload="none" controls>
                                <source src="content/audio/English-Anthem-PWC.webm" type="audio/mpeg">
                            </audio>
                            <br><br>
                            <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn"
                                href="content/audio/English-Anthem-PWC.mp3" download target="_blank"
                                data-wow-delay="0.7s">Download MP3</a>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 600px;">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="content/img/img-about/pwc-sinhala-anthem.webp"
                                alt="Prince of Wales College Sinhala Anthem" style="object-fit: cover;" loading="lazy">
                        </div>

                        <div class="mt-3 text-center">
                            <audio class="w-100 custom-playbar" preload="none" controls>
                                <source src="content/audio/Sinhala-Anthem-PWC.webm" type="audio/mpeg">
                            </audio>
                            <br><br>
                            <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn"
                                href="content/audio/Sinhala-Anthem-PWC.mp3" download target="_blank"
                                data-wow-delay="0.7s">Download MP3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style>
            .custom-playbar {
                border-radius: 8px;
                background-color: #f8f9fa;
                padding: 10px;
            }

            .custom-playbar::-webkit-media-controls-panel {
                border-radius: 8px;
            }
        </style>


    </div>

    <div class="container-xxl py-5" id="flag-crest">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">FLAG & CREST</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="content/img/img-about/crest-flag.webp"
                            alt="flag-pwc" style="object-fit: cover;" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-4">The flag and crest of Prince of Wales College in Moratuwa together form a powerful
                        representation of the school’s identity, heritage, and values. The flag, with its vibrant
                        purple, gold, and maroon stripes, symbolizes the unity and pride of the school community. In the
                        center, the bold gold emblem highlights the college's strong traditions and commitment to
                        excellence. <br><br>

                        Complementing the flag is the college's crest, a symbol of knowledge, discipline, and
                        achievement. The crest features a shield adorned with meaningful elements, each reflecting the
                        school’s mission and values. Surrounded by a banner with the school’s motto, the crest adds a
                        sense of dignity and purpose to the flag's design. <br><br>

                        Together, the flag and crest serve as a reminder of the school’s rich history and its dedication
                        to nurturing the potential of every student. They unite students, alumni, and faculty, creating
                        a strong bond that represents the pride, spirit, and legacy of Prince of Wales College in
                        Moratuwa.
                    </p>
                    <a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="content/img/logo-pwc.png" target="_blank"
                        data-wow-delay="0.1s">View College Crest</a>
                </div>
            </div>
        </div>

    </div>


    <div class="container-xxl py-5" id="houses">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">HOUSE SYSTEM</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="content/img/img-about/house-system-pwc.webp" alt="house flags"
                            style="object-fit: cover;" loading="lazy">
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
                    <button class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" onclick="openHousePopup()">Find Your House</button>
                </div>

            </div>
        </div>
    </div>

    <div id="housePopup" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 600px; width: 100%; height: auto;">
            <div class="modal-content text-center p-4"
                style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div class="modal-header">
                    <h5 class="modal-title">Find Your House</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="houseForm">
                        <input type="number" id="admissionNumber" class="form-control mb-3"
                            placeholder="Enter your admission number">
                        <button class="btn" style="background-color: #800000; color: white;"
                            onclick="calculateHouse()">Find</button>
                    </div>
                    <div id="loadingMessage" class="fs-5 mt-3" style="display: none;">🔍 Finding your house...</div>
                    <div id="houseResult" class="mt-3 fw-bold" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
function openHousePopup() {
    // Reset the modal content before opening
    document.getElementById("houseForm").style.display = "block";
    document.getElementById("loadingMessage").style.display = "none";
    document.getElementById("houseResult").style.display = "none";
    
    let modal = new bootstrap.Modal(document.getElementById("housePopup"));
    modal.show();
}

function calculateHouse() {
    let admissionNumber = document.getElementById("admissionNumber").value;
    let remainder = admissionNumber % 6;
    let houses = [
        { name: "Founders", colors: "❤️🖤", gradient: "linear-gradient(to right, red, black)" },  // Red and Black hearts
        { name: "Gunawardana", colors: "💛🖤", gradient: "linear-gradient(to right, gold, black)" },  // Gold and Black hearts
        { name: "Rodrigo", colors: "💜💛", gradient: "linear-gradient(to right, purple, gold)" },  // Purple and Gold hearts
        { name: "Mendis", colors: "❤️💛", gradient: "linear-gradient(to right, red, gold)" },  // Red and Gold hearts
        { name: "Jayasooriya", colors: "💙💛", gradient: "linear-gradient(to right, blue, gold)" },  // Blue and Gold hearts
        { name: "Lewis", colors: "❤️💜", gradient: "linear-gradient(to right, red, purple)" }  // Red and Purple hearts
    ];
    
    document.getElementById("houseForm").style.display = "none";
    document.getElementById("loadingMessage").style.display = "block";
    
    setTimeout(() => {
        let house = houses[remainder];
        document.getElementById("loadingMessage").style.display = "none";
        document.getElementById("houseResult").style.display = "block";
        document.getElementById("houseResult").innerHTML = `
            <div class='fs-4' style="background: ${house.gradient}; -webkit-background-clip: text; color: transparent; font-size: 2rem;">
                You are a member of <br>
                <strong style="font-size: 2.5rem;">${house.name}</strong> House!
            </div>`;
        
    }, 2500);
}


</script>

<style>
@keyframes fadeOut {
    0% { opacity: 1; }
    100% { opacity: 0; }
}

#housePopup .modal-dialog {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 600px; 
    width: 100%;
    height: auto; 
}

#houseForm .btn {
    background-color: #800000;
    color: white;
}
</style>



    <!-- Administration Start -->
    <div class="container-xxl py-5" id="administration">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">School</h6>
                <h1 class="mb-5">ADMINISTRATION</h1>
            </div>

            <div class="d-flex flex-column gap-4">
                <?php
                $query = "SELECT * FROM about_school_administration LIMIT 4";
                $statement = $connect->prepare($query);
                $statement->execute();

                if ($statement->rowCount() > 0) {
                    $delay = 0.1;
                    foreach ($statement->fetchAll() as $row) {
                ?>
                        <div class="strip-card wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="strip-card-img">
                                <img src="/content/img/img-about/administration/<?php echo $row["img"]; ?>"
                                    alt="<?php echo htmlspecialchars($row["name"]); ?>" />
                            </div>
                            <div class="strip-card-text">
                                <small><?php echo htmlspecialchars($row["post"]); ?></small>
                                <h5><?php echo htmlspecialchars($row["name"]); ?></h5>
                                <small><?php echo htmlspecialchars($row["quali"]); ?></small>
                            </div>
                        </div>
                <?php
                        $delay += 0.1;
                    }
                }
                ?>
            </div>

            
<br>
                <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="about/school-administration"
                        data-wow-delay="0.1s">View All</a></center>


        </div>
    </div>

    <!-- Administration End -->




    <!-- prefects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">College</h6>
                <h1 class="mb-5">HEAD PREFECT</h1>
            </div>

            <div class="row g-4">

                <div class="d-flex flex-column gap-4">
                <?php
                $query = "SELECT * FROM about_prefect_topboard LIMIT 1";
                $statement = $connect->prepare($query);
                $statement->execute();

                if ($statement->rowCount() > 0) {
                    $delay = 0.1;
                    foreach ($statement->fetchAll() as $row) {
                ?>
                        <div class="strip-card wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="strip-card-img">
                                <img src="/content/img/img-about/prefects/<?php echo $row["img"]; ?>"
                                    alt="<?php echo htmlspecialchars($row["name"]); ?>" />
                            </div>
                            <div class="strip-card-text">
                                <small><?php echo htmlspecialchars($row["post"]); ?></small>
                                <h5><?php echo htmlspecialchars($row["name"]); ?></h5>
                            </div>
                        </div>
                <?php
                        $delay += 0.1;
                    }
                }
                ?>
            </div>
<br>
                <center><a class="btn btn-primary py-3 px-5 mt-2 wow zoomIn" href="clubs/prefects-guild"
                        data-wow-delay="0.1s">Explore Prefects Guild</a></center>

            </div>


        </div>
    </div>

    <!-- prefects End -->


    <br>


    <!-- location -->
    <div class="container" id="locations">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Locations and</h6>
            <h1 class="mb-5">INFRASTRUCTURE</h1>
        </div>

    </div>
    <br>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 600px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="content/img/img-about/location-new-pwc.webp" alt="Locations" style="object-fit: cover;"
                        loading="lazy">
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
    <br><br> <br><br>


    <!-- history Start -->


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

    <div class="container-fluid bg-primary py-5 mb-5 explore-history-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="h1 display-3 text-white animated slideInDown"><?php echo $age ?> Years and Counting</p>
                    <p style="font-size: 20px;" class="h2 text-white animated slideInDown"><br> Explore college history
                        and
                        discover <?php echo $age ?> years of rich
                        heritage and academic excellence. <br> </p>
                    <center>
                        <a class="btn btn-primary py-3 px-4 mt-2 wow zoomIn" href="history"
                            data-wow-delay="0.1s">Explore
                            College History</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-- history End -->


    <?php include '../includes/footer.php'; ?>

</body>

</html>