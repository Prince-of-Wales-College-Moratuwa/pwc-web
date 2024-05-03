<!DOCTYPE html>
<html lang="en">

<head>
    <title>ලස්සන Wales</title>
    <?php
    $page = 'about';
    ?>

    <?php include 'header.php'; ?>

    <!-- Primary Meta Tags -->
    <meta name="title" content="ලස්සන Wales | Prince of Wales' College" />
    <meta name="description"
        content="Discover Prince of Wales College: A historic institution of higher learning fostering academic excellence and personal growth. Join us in shaping the future!" />
    <meta name="keywords"
        content="about prince of wales college, prince of wales college flag, prince of wales college anthem, prince of wales college principal" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/lassana-wales" />
    <meta property="og:title" content="ලස්සන Wales | Prince of Wales' College" />
    <meta property="og:description"
        content="Discover Prince of Wales College: A historic institution of higher learning fostering academic excellence and personal growth. Join us in shaping the future!" />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-about/dev-places/0.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/lassana-wales" />
    <meta property="twitter:title" content="ලස්සන Wales | Prince of Wales' College" />
    <meta property="twitter:description"
        content="Discover Prince of Wales College: A historic institution of higher learning fostering academic excellence and personal growth. Join us in shaping the future!" />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-about/dev-places/0.webp" />


    <style>
        .about-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(/content/img/img-about/dev-places/0.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .about-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999; 
        }

        .overlay img {
            max-width: 90%;
            max-height: 90%;
            border: 2px solid white;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }
    </style>


</head>

<body>

    <div class="overlay" id="overlay" onclick="closeOverlay(event)">
        <span class="close-icon">&#10006;</span>
        <span class="left-arrow" onclick="prevSlide(event)">&#10094;</span>
        <img id="overlayImage" src="" alt="Clicked Image">
        <span class="right-arrow" onclick="nextSlide(event)">&#10095;</span>
    </div>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 about-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">ලස්සන WALES'</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container-lg my-3" id="developed-places">
        <div class="row">
            <div class="col">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="text-center">
                        <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                        <h1 class="mb-5">Enhancing and Beautifying School for a Bright Future</h1>
                    </div>

                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2">
                            <?php for ($i = 1; $i < 53; $i++) : ?>
                            <div class="col mb-4">
                                <div class="card">
                                    <img src="/content/img/img-about/dev-places/<?php echo $i; ?>.webp"
                                        class="card-img-top" alt="Slide <?php echo ($i + 1); ?>"
                                        onclick="openOverlay('/content/img/img-about/dev-places/<?php echo $i; ?>.webp')">
                                    <div class="card-body">
                                        <h5 class="card-title">Project <?php echo ($i); ?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php if (($i + 1) % 2 === 1 && ($i + 1) !== 53) : ?>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2">
                            <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br>
                <p>The concept of the "Beautiful Wales" by the present Principal, in order to develop the
                    infrastructure, and resources of the college in the year 2023, with the generous support
                    and contribution from the Old Boys' Association in the journey of becoming the best
                    college in year 2025.
                    Our tribute to the present Principal and all the committed teachers and staff, the
                    School Development Society, and the Old Boys' Association for this great work.
                    It's time to gather around our Alma mater to make her beautiful and glamorous.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        // Function to open overlay and display clicked image
        function openOverlay(imageSrc) {
            document.getElementById('overlayImage').src = imageSrc;
            document.getElementById('overlay').style.display = 'flex';
            // Add event listeners for arrow keys
            document.addEventListener('keydown', handleKeyDown);
        }

        // Function to close overlay when clicking outside of the image
        function closeOverlay(event) {
            if (event.target === document.getElementById('overlay')) {
                document.getElementById('overlay').style.display = 'none';
                // Remove event listeners for arrow keys
                document.removeEventListener('keydown', handleKeyDown);
            }
        }

        // Function to handle arrow key navigation
        function handleKeyDown(event) {
            if (event.key === 'ArrowLeft') {
                prevSlide();
            } else if (event.key === 'ArrowRight') {
                nextSlide();
            }
        }

        // Function to show previous slide
        function prevSlide() {
            // Implementation to show previous slide goes here
        }

        // Function to show next slide
        function nextSlide() {
            // Implementation to show next slide goes here
        }
    </script>
</body>

</html>
