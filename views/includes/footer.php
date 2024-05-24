<style>
    .footer {
    background-image: url('/content/img/patterntp.webp');
    background-size: cover;
    background-position: center;
    padding-top: 100px;
}

</style>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Links</h4>
                <a class="btn btn-link" id="install-button">Install App</a>
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
                <left>
                    <h4 class="text-white mb-3">Contact</h4>
                </left>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Galle Road, Moratuwa, CM7 2AA, 10456</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94 112 645 628</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@princeofwales.edu.lk</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/pwcmoratuwaSriLanka"
                        target="_blank" title="Visit our Facebook page"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/cmbulive/"
                        target="_blank" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@CMBUlive" target="_blank"
                        title="Subscribe to our YouTube channel"><i class="fab fa-youtube"></i></a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- 
                    <img src="https://www.bestweb.lk/wp-content/uploads/2024/02/bestweb-2024-web.png" width="100px">
                    -->
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

<!-- Back to Top -->
<a href="#" title="go to top" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
        class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script defer src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://princeofwales.edu.lk/resources/lib/wow/wow.min.js"></script>
<script defer src="https://princeofwales.edu.lk/resources/lib/easing/easing.min.js"></script>
<script defer src="https://princeofwales.edu.lk/resources/lib/waypoints/waypoints.min.js"></script>
<script defer src="https://princeofwales.edu.lk/resources/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Main JavaScript -->
<!-- Defer the loading of your main JavaScript file -->
<script defer src="https://princeofwales.edu.lk/resources/js/main.js"></script>