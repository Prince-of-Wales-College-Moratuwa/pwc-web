<!-- Container for Floating Icons -->
<div class="floating-icons">
    <a href="https://www.bestweb.lk/nominees-2024/best-school-website/" title="Nominated Bestweb 2024" target="_blank"
        class="floating-logo-container" id="bestweb-logo">
        <img src="https://www.bestweb.lk/wp-content/uploads/2024/02/bestweb-2024-web.png" alt="BestWeb 2024 Logo" class="floating-logo">
    </a>
    <a href="#" title="Go to top" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>
</div>

<style>
    .footer {
        background-image: url('/content/img/patterntp.webp');
        background-size: cover;
        background-position: center;
        padding-top: 100px;
    }

    .floating-icons {
        position: fixed;
        bottom: 20px;
        left: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 1000;
    }

    .floating-logo {
        width: 125px;
        transition: transform 0.3s;
    }

    .floating-logo:hover {
        transform: scale(1.25);
    }

    .back-to-top {
        margin: 0;
    }
</style>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Quick Links</h4>
            <div role="button" tabindex="0" class="btn btn-link" id="install-button">Install App</div>
            <a class="btn btn-link" href="/about">About Us</a>
            <a class="btn btn-link" href="/contact">Contact Us</a>
            <a class="btn btn-link" href="/faq">Help / FAQ</a>
            <a class="btn btn-link" href="/sitemap">Site Map</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Legal</h4>
            <a class="btn btn-link" href="/privacy">Privacy Policy</a>
            <a class="btn btn-link" href="/cookies">Cookies Policy</a>
            <a class="btn btn-link" href="/terms">Terms & Conditions</a>
            <a class="btn btn-link" href="/disclaimer">Disclaimer</a>
            <a class="btn btn-link" href="/imprint">Imprint</a>
        </div>
        <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contact</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Galle Road, Moratuwa, CM7 2AA, 10456</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94 112 645 628</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@princeofwales.edu.lk</p>
            <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/cambrians.media" target="_blank" title="Visit our Facebook page">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/cmbulive/" target="_blank" title="Follow us on Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@CMBUlive" target="_blank" title="Subscribe to our YouTube channel">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="https://topweb.lk/may2024/princeofwales-edu/" title="TopWebLK May 2024" target="_blank">
                <img src="/content/img/bestweb/TopWebMay-150x150.jpg" width="80px" alt="TopWebLK May 2024">
            </a>

            <a href="https://www.thegreenwebfoundation.org/green-web-check/?url=https%3A%2F%2Fprinceofwales.edu.lk%2F" title="This website runs on green hosting - verified by thegreenwebfoundation.org" target="_blank">
                <img src="https://app.greenweb.org/api/v3/greencheckimage/princeofwales.edu.lk?nocache=true" alt="This website runs on green hosting - verified by thegreenwebfoundation.org" width="159px"> 
            </a> 
        </div>
    </div>
</div>

    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    &copy; <?php echo date("Y"); ?> <a class="border-bottom" href="https://princeofwales.edu.lk/">Prince
                        of Wales' College</a>, &nbsp; All Right Reserved. │ Developed By <a class="border-bottom"
                        href="/team">Cambrians' ICT Society</a> │ Media Partner: <a class="border-bottom"
                        href="https://princeofwales.edu.lk/cmbu/" target="_blank">Cambrians' Media and Broadcasting
                        Unit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<script>
    const bestwebLogo = document.getElementById('bestweb-logo');

    window.addEventListener('scroll', () => {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            bestwebLogo.style.display = 'none';
        } else {
            bestwebLogo.style.display = 'block';
        }
    });

    const installButton = document.getElementById('install-button');

    window.addEventListener('beforeinstallprompt', (event) => {
        deferredPrompt = event;
        console.log("App can be installed now");
        installButton.hidden = false;
    });

    installButton.addEventListener('click', (event) => {
        deferredPrompt.prompt();
    });
</script>

<!-- JavaScript Libraries -->
<script defer src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="/resources/lib/wow/wow.min.js"></script>
<script defer src="/resources/lib/easing/easing.min.js"></script>
<script defer src="/resources/lib/waypoints/waypoints.min.js"></script>
<script defer src="/resources/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Main JavaScript -->
<!-- Defer the loading of your main JavaScript file -->
<script defer src="/resources/js/main.js"></script>