<head>
    <meta charset="utf-8">
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="https://princeofwales.edu.lk/content/icons/logo-70x70-pwc.png" rel="icon">
    <link rel="icon" href="https://princeofwales.edu.lk/content/icons/logo-70x70-pwc.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://princeofwales.edu.lk/content/icons/logo-apple-touch-icon-pwc.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://princeofwales.edu.lk/content/icons/logo-android-chrome-icon-pwc.png">
    <meta name="msapplication-TileImage" content="https://princeofwales.edu.lk/content/icons/logo-70x70-pwc.png">
    <meta name="msapplication-TileColor" content="#800000">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://princeofwales.edu.lk/resources/lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://princeofwales.edu.lk/resources/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://princeofwales.edu.lk/resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="https://princeofwales.edu.lk/resources/css/style.css" rel="stylesheet">


    <!-- PWA -->
    <link rel="manifest" href="https://princeofwales.edu.lk/manifest.json">


        <?php


$currentDate = date('d');

if ($currentDate >= 1 && $currentDate <= 5) {
    // Display content for the first date range (1-5) nelithavindinu7@gmail.com
    echo '<script async data-id="3312476668" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>';
} elseif ($currentDate >= 6 && $currentDate <= 10) {
    // Display content for the second date range (6-10) nelithaonline2006@gmail.com
    echo '<script async data-id="5892538728" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>';
} elseif ($currentDate >= 11 && $currentDate <= 15) {
    // Display content for the third date range (11-15) frontlinedeveloperslk@gmail.com
    echo '<script async data-id="1854349425" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>';
} elseif ($currentDate >= 16 && $currentDate <= 20) {
    // Display content for the fourth date range (16-20) nelitha@androidwedaarayo.com
    echo '<script async data-id="9967512625" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>';
} elseif ($currentDate >= 21 && $currentDate <= 25) {
    // Display content for the fifth date range (21-25)  towotix116@tupanda.com
    echo '<script async data-id="2447734571" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>';
} elseif ($currentDate >= 26 && $currentDate <= 31) {
    // Display content for the sixth date range (26-31) sane as 1-5
    echo '<script async data-id="3312476668" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>';
} else {
    echo '';
}
?>


    <script>
        document.addEventListener('keydown', function (e) {
    
        if (e.key === 'F12' || e.keyCode === 123) {
            e.preventDefault();
        }
        });
  </script>



    <?php
    include 'database_connection.php';
    ?>


    <style>
        ::selection {
            background-color: #800000;
            color: white;
        }

        .pulse:hover {
            animation: pulse-animation 1s;
        }

        .dropdown-item:hover {
        color: maroon;
    }

        @keyframes pulse-animation {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }



        .img-header {
        width: 35px;
    }

    .h6-header {
        font-size: 17.5px;
    }

    @media (max-width: 375px) {
        .img-header {
            width: 30px; 
        }

        .h6-header {
            font-size: 14px; 
        }
    }




    </style>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K1KCZVJTWP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K1KCZVJTWP');


</script>


</head>

<body>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only"></span>
        </div>
        <h3>&nbsp; Loading...</h3>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-1 px-lg-4">
            <img src="/content/img/logo-pwc.png" alt="pwc logo" class="img-header">
            <h6 class="m-0 text-primary h6-header" style="font-family: 'Arimo', sans-serif;">&nbsp; &nbsp; PRINCE OF WALES'
                COLLEGE<br>&nbsp; &nbsp; MORATUWA
            </h6>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link <?php if ($page === 'home') echo 'active'; ?> nav-link pulse">Home</a>
                <a href="/blog/" class="nav-item nav-link nav-link pulse">Blog</a>
                <a href="/events/" class="nav-item nav-link nav-link pulse">Events</a>
                <a href="/publications" class="nav-item nav-link <?php if ($page === 'publications') echo 'active'; ?> nav-link pulse">Publications</a>

                <div class="nav-item dropdown">
                    <a href="/sports"
                        class="nav-link dropdown-toggle <?php if ($page === 'sports') echo 'active'; ?> nav-link pulse">Sports</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a class="dropdown-item" href="/sports#team-sports"><b>TEAM SPORTS</b></a>
                        <a class="dropdown-item" href="/sports#individual-sports"><b>INDIVIDUAL SPORTS</b></a>
                        <a class="dropdown-item" href="/sports#aquatic-sports"><b>AQUATIC SPORTS</b></a>
                        <a class="dropdown-item" href="/sports#combat-sports"><b>COMBAT SPORTS</b></a>
                        <a class="dropdown-item" href="/sports#racquet-sports"><b>RACQUET SPORTS</b></a>
                        <a class="dropdown-item" href="/sports#mind-sports"><b>MIND SPORTS</b></a>
                        <a class="dropdown-item" href="/sports#target-sports"><b>TARGET SPORTS</b></a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="/clubs"
                        class="nav-link dropdown-toggle <?php if ($page === 'clubs') echo 'active'; ?> nav-link pulse">Clubs</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a class="dropdown-item" href="/clubs#media-clubs"><b>MEDIA CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#tech-clubs"><b>TECHNOLOGICAL CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#resprentative-clubs"><b>REPRESENTATIVE CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#service-clubs"><b>COMMUNITY SERVICE CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#cadeting"><b>CADETING</b></a>
                        <a class="dropdown-item" href="/clubs#edu-clubs"><b>EDUCATIONAL CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#lang-clubs"><b>LANGUAGE CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#aesthetic-clubs"><b>AESTHETIC CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#hobby-clubs"><b>HOBBY CLUBS</b></a>
                        <a class="dropdown-item" href="/clubs#religious-clubs"><b>RELIGIOUS CLUBS</b></a>
                    </div>
                </div>

                <a href="/history" class="nav-item nav-link <?php if ($page === 'history') echo 'active'; ?> nav-link pulse">History</a>
                <a href="/about" class="nav-item nav-link <?php if ($page === 'about') echo 'active'; ?> nav-link pulse">About</a>
                <a href="/contact" class="nav-item nav-link <?php if ($page === 'contact') echo 'active'; ?> nav-link pulse">Contact</a>
                
                <a href="/search"><i class="bi bi-search nav-item nav-link <?php if ($page === 'search') echo 'active'; ?> nav-link pulse" id="search-icon"></i></a>



    </nav>
    <!-- Navbar End -->
