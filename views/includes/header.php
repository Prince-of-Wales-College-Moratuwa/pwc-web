<head>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="theme-color" content="#800000">
    <?php 
    
    date_default_timezone_set('Asia/Colombo'); 
    setcookie("PHPSESSID", "hrdl5ujs6985l6g72jtrften00", [
        'expires' => time() + 3600,
        'path' => '/',
        'domain' => '',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax' 
    ]);

    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

    header("X-Frame-Options: DENY");

    header("X-Content-Type-Options: nosniff");

    header("Content-Security-Policy: frame-ancestors 'self'");
    ?>

    <!-- Favicon -->
    <link href="/content/icons/logo-70x70-pwc.webp" rel="icon">
    <link rel="icon" href="/content/icons/logo-70x70-pwc.webp" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/content/icons/logo-apple-touch-icon-pwc.webp">
    <link rel="icon" type="image/webp" sizes="192x192" href="/content/icons/logo-android-chrome-icon-pwc.webp">
    <meta name="msapplication-TileImage" content="/content/icons/logo-70x70-pwc.webp">
    <meta name="msapplication-TileColor" content="#800000">

    <!-- Google Fonts -->
    <link defer rel="preconnect" href="https://fonts.googleapis.com">
    <link defer rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link defer
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link defer href="/resources/lib/animate/animate.min.css" rel="stylesheet">
    <link defer rel="preload" href="/resources/lib/animate/animate.min.css" as="style" />

    <link defer href="/resources/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link defer rel="preload" href="/resources/lib/owlcarousel/assets/owl.carousel.min.css" as="style" />

    <!-- Customized Bootstrap Stylesheet -->
    <link defer href="/resources/css/bootstrap.min.css" rel="stylesheet">
    <link defer rel="preload" href="/resources/css/bootstrap.min.css" as="style" />

    <!-- Template Stylesheet -->
    <link defer href="/resources/css/style.css" rel="stylesheet">
    <link defer rel="preload" href="/resources/css/style.css" as="style" />


    <!-- PWA -->
    <link rel="manifest" href="/manifest.json">


    <script>
        document.addEventListener('keydown', function (e) {

            if (e.key === 'F12' || e.keyCode === 123) {
                e.preventDefault();
            }
        });
    </script>






    <style>
        /* For Webkit browsers (Chrome, Safari) */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: white;
        }

        ::-webkit-scrollbar-thumb {
            background-color: maroon;
            border: 3px solid white;
        }

        /* For Firefox */
        html {
            scrollbar-width: thin;
            scrollbar-color: maroon white;
        }

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


        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .navbar {
            width: 100%;
            max-width: 100%;
        }


        .navbar-brand {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        .navbar-collapse {
            padding-right: 0;
            margin-right: 0;
        }


        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K1KCZVJTWP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
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
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-1 px-lg-4">
            <img src="/content/img/logo-pwc.webp" alt="pwc logo" class="img-header">
            <h6 class="m-0 text-primary h6-header">&nbsp; &nbsp; PRINCE OF WALES' COLLEGE<br>&nbsp; &nbsp; MORATUWA</h6>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-label="mobile-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/"
                    class="nav-item nav-link <?php if ($page === 'home') echo 'active'; ?> nav-link pulse">Home</a>
                <a href="/blog/"
                    class="nav-item nav-link nav-link pulse <?php if ($page === 'blog') echo 'active'; ?>">Blog</a>
                <a href="/events/"
                    class="nav-item nav-link nav-link pulse <?php if ($page === 'events') echo 'active'; ?>">Events</a>
                <a href="/publications"
                    class="nav-item nav-link nav-link pulse <?php if ($page === 'publications') echo 'active'; ?>">Publications</a>


                <div class="nav-item dropdown">
                    <a href="/sports"
                        class="nav-link dropdown-toggle <?php if ($page === 'sports') echo 'active'; ?> nav-link pulse">Sports</a>
                    <div class="dropdown-menu fade-down m-0" style="font-size: 15px;">
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
                    <div class="dropdown-menu fade-down m-0" style="font-size: 15px;">
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

                <!-- Mobile view History link -->
                <a href="/history"
                    class="nav-item nav-link d-lg-none <?php if ($page === 'history') echo 'active'; ?> nav-link pulse">History</a>

                <div class="nav-item dropdown">
                    <a href="/about"
                        class="nav-link dropdown-toggle <?php if ($page === 'about' || $page === 'history') echo 'active'; ?> nav-link pulse">About</a>
                    <div class="dropdown-menu fade-down m-0" style="font-size: 15px;">
                        <!-- Desktop view History link -->
                        <a class="dropdown-item <?php if ($page === 'history') echo 'active'; ?>"
                            href="/history"><b>HISTORY</b></a>
                        <a class="dropdown-item" href="/about#vission-mission"><b>VISION & MISSION</b></a>
                        <a class="dropdown-item" href="/about#alumini"><b>ALUMNI</b></a>
                        <a class="dropdown-item" href="/about#anthems"><b>ANTHEMS</b></a>
                        <a class="dropdown-item" href="/about#flag-crest"><b>FLAG & CREST</b></a>
                        <a class="dropdown-item" href="/about#houses"><b>HOUSES</b></a>
                        <a class="dropdown-item" href="/about/school-administration"><b>ADMINISTRATION</b></a>
                        <a class="dropdown-item" href="/about/school-infrastructure"><b>LOCATIONS</b></a>
                    </div>
                </div>

                <a href="/contact"
                    class="nav-item nav-link <?php if ($page === 'contact') echo 'active'; ?> nav-link pulse">Contact</a>

                <a href="/search" title="search"><i
                        class="bi bi-search nav-item nav-link <?php if ($page === 'search') echo 'active'; ?> nav-link pulse"
                        id="search-icon"></i></a>
            </div>
        </div>
    </nav>


    <!-- Navbar End -->