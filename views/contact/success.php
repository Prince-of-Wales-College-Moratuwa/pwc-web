<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Message Sent Successfully</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="logo-pwc.png" rel="icon">
    <link rel="icon" href="favicon.webp" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.webp" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
    <link rel="icon" href="favicon.png" type="image/png" sizes="32x32">
    <link rel="icon" href="favicon.png" type="image/png" sizes="96x96">
    <link rel="icon" href="favicon.png" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <script async data-id="3312476668" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>

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

    <?php include '../includes/header.php'; ?>

</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>


    <script>
        var end = Date.now() + (1 * 1000);
        var colors = ["#800080", "#ffd700", "#800000"];

        (function frame() {
            confetti({
                particleCount: 3,
                angle: 60,
                spread: 55,
                origin: { x: 0 },
                colors: colors
            });
            confetti({
                particleCount: 3,
                angle: 120,
                spread: 55,
                origin: { x: 1 },
                colors: colors
            });

            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        }());
    </script>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-check-circle display-1 text-primary"></i>
                    <h1 class="mb-4">Message Sent Successfully</h1>
                    <p class="mb-4">Your message has been sent. This tab will close automatically in 5 seconds.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://princeofwales.edu.lk/resources/lib/wow/wow.min.js"></script>
    <script src="https://princeofwales.edu.lk/resources/lib/easing/easing.min.js"></script>
    <script src="https://princeofwales.edu.lk/resources/lib/waypoints/waypoints.min.js"></script>
    <script src="https://princeofwales.edu.lk/resources/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="https://princeofwales.edu.lk/resources/js/main.js"></script>

    <?php include '../includes/footer.php'; ?>

</body>

</html>
