<!-- Container for Floating Icons -->
<div class="floating-icons">

  <!-- 
  <a href="https://princeofwales.edu.lk/blog/prince-of-wales-college-website-wins-silver-at-bestweblk-2024" title="Best School Website - Silver Award at Bestweb.LK"
        target="_blank" class="floating-logo-container" id="bestweb-logo">
        <img src="/content/img/bestweb/Silver-Best School Website.webp" alt="BestWeb 2024 Logo" class="floating-logo">
    </a>
 -->
  <a href="https://ebadge.bestweb.lk/api/v1/clicked/princeofwales.edu.lk/BestWeb/2025/Rate_Us" title="Bestweb.LK" target="_blank" class="floating-logo-container" id="bestweb-logo">
    <img src="https://ebadge.bestweb.lk/eBadgeSystem/domainNames/princeofwales.edu.lk/BestWeb/2025/Rate_Us/image.png" alt="logo" width="150" height="150" alt="BestWeb 2025 Logo" class="floating-logo" />
  </a>

    <!-- <a href="#" title="Go to top" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a> -->
</div>

<style>
  .footer {
    background-image: url('/content/img/patterntp.webp');
    background-size: cover;
    background-position: center;
    padding-top: 100px;
  }

  #bestweb-logo {
    animation: floatUpDown 2.5s ease-in-out infinite;
    display: block;
  }

  #bestweb-logo:hover .floating-logo {
    filter: drop-shadow(0 0 12px gold) drop-shadow(0 0 4px #ffd700);
  }

  @keyframes floatUpDown {
    0% { transform: translateY(0); }
    50% { transform: translateY(-9px); }
    100% { transform: translateY(0); }
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
    transition: transform 0.3s;
  }

  .floating-logo:hover {
    transform: scale(1.25);
  }

  .back-to-top {
    margin: 0;
  }

  .accessibility-btn {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    transition: box-shadow 0.3s ease;
  }

  .accessibility-btn:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
  }

  .accessibility-slide {
    animation: slideUp 0.3s ease forwards;
  }

  @keyframes slideUp {
    from {
      transform: translateY(10px);
      opacity: 0;
    }

    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  body.high-contrast {
    background-color: #000 !important;
    color: #fff !important;
  }

  body.high-contrast a {
    color: #ff0 !important;
  }

  .high-contrast img {
    filter: brightness(0.8) contrast(1.5);
  }

  /* Reduce accessibility button size on mobile devices only */
  @media (max-width: 576px) {
    .accessibility-btn {
      width: 44px !important;
      height: 44px !important;
      min-width: 44px !important;
      min-height: 44px !important;
      padding: 0 !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      border-radius: 50% !important;
    }

    .accessibility-btn i {
      font-size: 1.1rem !important;
      line-height: 1 !important;
    }

    .woot-widget-holder .woot-launcher {
      width: 44px !important;
      height: 44px !important;
      min-width: 44px !important;
      min-height: 44px !important;
      font-size: 1.1rem !important;
    }
  }
</style>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <!-- About -->
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Prince of Wales' College</h4>
        <p class="small mb-4">Established in 1876, Prince of Wales’ College has grown into a prestigious
          institution, making its mark as a leading school in Sri Lanka.</p>
        <iframe src="https://status.princeofwales.edu.lk/badge?theme=dark" width="250" height="30" frameborder="0" scrolling="no" title="site status" style="color-scheme: normal"></iframe>
      </div>
      <!-- Quick Links -->
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Quick Links</h4>
        <ul class="list-unstyled">
          <li><button class="btn btn-link p-0" id="install-button">Install App</button></li>
          <li><a class="btn btn-link p-0" href="/about">About Us</a></li>
          <li><a class="btn btn-link p-0" href="/contact">Contact Us</a></li>
          <li><a class="btn btn-link p-0" href="/faq">Help / FAQ</a></li>
          <li><a class="btn btn-link p-0" href="/sitemap">Site Map</a></li>
        </ul>
      </div>
      <!-- Legal -->
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Legal</h4>
        <ul class="list-unstyled">
          <li><a class="btn btn-link p-0" href="/privacy">Privacy Policy</a></li>
          <li><a class="btn btn-link p-0" href="/cookies">Cookies Policy</a></li>
          <li><a class="btn btn-link p-0" href="/terms">Terms & Conditions</a></li>
          <li><a class="btn btn-link p-0" href="/disclaimer">Disclaimer</a></li>
          <li><a class="btn btn-link p-0" href="/imprint">Imprint</a></li>
        </ul>
      </div>
      <!-- Contact -->
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-4">Contact</h4>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a class="btn text-white p-0"
            style="text-align: left;" href="https://maps.app.goo.gl/JtYdz2kuYA2DPQcg8" target="_blank">2AD,
            Galle Road, Moratuwa</a></p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a class="btn text-white p-0"
            style="text-align: left;" href="tel:94112645628">+94 112 645 628</a></p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i><a class="btn text-white p-0"
            style="text-align: left;" href="mailto:info@princeofwales.edu.lk">info@princeofwales.edu.lk</a>
        </p>
        <div class="d-flex">
          <a class="btn btn-outline-light btn-social me-2" href="https://www.facebook.com/cmbulive"
            target="_blank" title="Visit our Facebook page">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social me-2" href="https://www.instagram.com/cmbulive/"
            target="_blank" title="Follow us on Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="btn btn-outline-light btn-social me-2"
            href="https://whatsapp.com/channel/0029VanJvjFCMY0GGu2F6g3M" target="_blank"
            title="Join our WhatsApp Channel">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/cmbulive" target="_blank"
            title="Subscribe to our YouTube channel">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Awards Badges Row -->
    <div class="row mt-5">
      <div class="col-12 d-flex justify-content-center align-items-center" style="min-height: 100px;">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
          <a href="https://princeofwales.edu.lk/blog/prince-of-wales-college-website-wins-silver-at-bestweblk-2024"
            title="Best School Website - Silver Award at Bestweb.LK" target="_blank" class="me-3 mb-2">
            <img src="/content/img/bestweb/Silver-Best School Website.webp"
              alt="Best School Website - Silver Award" width="120px">
          </a>
          <a href="https://topweb.lk/may2024/princeofwales-edu/" title="TopWebLK May 2024" target="_blank"
            class="me-3 mb-2">
            <img src="/content/img/bestweb/TopWebMay-150x150.jpg" width="80px" alt="TopWebLK May 2024">
          </a>
          <a href="https://www.thegreenwebfoundation.org/green-web-check/?url=https%3A%2F%2Fprinceofwales.edu.lk%2F"
            title="This website runs on green hosting - verified by thegreenwebfoundation.org"
            target="_blank" class="mb-2">
            <img src="/content/img/princeofwales.edu.webp"
              alt="This website runs on green hosting - verified by thegreenwebfoundation.org"
              width="140px">
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
          &copy; <?php echo date("Y"); ?> <a class="border-bottom" href="https://princeofwales.edu.lk/">PRINCEOFWALES.EDU.LK</a>, is Licensed Under
          <a class="border-bottom" href="https://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">
            CC BY-NC 4.0</a>. All Right Reserved. │ Developed By <a class="border-bottom"
            href="/team">Cambrians' ICT Society</a> │ Media Partner: <a class="border-bottom"
            href="https://princeofwales.edu.lk/cmbu/" target="_blank">Cambrians' Media and Broadcasting
            Unit</a>

        </div>
      </div>
    </div>
  </div>

</div>
<!-- Footer End -->

<?php
$websiteToken = 'yuUYBeynKRwTwRkRFTEf9tFN';
$encodedToken = base64_encode($websiteToken);
?>
<script>
  window.chatwootSettings = {
    "position": "right",
    "type": "standard",
    "launcherTitle": "Chat with us"
  };
  (function(d, t) {
    var BASE_URL = "https://app.chatwoot.com";
    var g = d.createElement(t),
      s = d.getElementsByTagName(t)[0];
    g.src = BASE_URL + "/packs/js/sdk.js";
    g.defer = true;
    g.async = true;
    s.parentNode.insertBefore(g, s);
    g.onload = function() {
      var token = atob("<?php echo $encodedToken; ?>");
      window.chatwootSDK.run({
        websiteToken: token,
        baseUrl: BASE_URL
      });
    }
  })(document, "script");
</script>


<!-- Accessibility  -->
<div id="accessibility-widget"
  class="position-fixed"
  style="bottom: 90px; right: 20px; z-index: 9999; display: flex; flex-direction: column-reverse; align-items: end;">

  <button id="accessibilityBtn"
    class="btn btn-primary accessibility-btn shadow"
    aria-label="Accessibility Settings"
    title="Accessibility Settings">
    <i class="fa fa-universal-access"></i>
  </button>

  <div id="accessibilityPanel" class="card shadow p-3 mt-2 d-none accessibility-slide" style="min-width: 220px;">
    <h6 class="mb-3 fw-semibold text-primary">Accessibility Settings</h6>

    <button class="btn btn-link w-100 text-start py-2" onclick="changeFontSize(1)">
      <i class="fa fa-plus fa-fw me-2"></i> Increase font
    </button>

    <button class="btn btn-link w-100 text-start py-2" onclick="changeFontSize(-1)">
      <i class="fa fa-minus fa-fw me-2"></i> Decrease font
    </button>

    <button class="btn btn-link w-100 text-start py-2" onclick="toggleHighContrast()">
      <i class="fa fa-circle-half-stroke fa-fw me-2"></i> High‑contrast
    </button>

    <button class="btn btn-link w-100 text-start py-2" onclick="toggleGreyscale()">
      <i class="fa fa-circle-notch fa-fw me-2"></i> Greyscale
    </button>

    <button class="btn btn-link w-100 text-start py-2" onclick="resetAccessibility()">
      <i class="fa fa-rotate-left fa-fw me-2"></i> Reset
    </button>
  </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<!-- Accessibility Styles -->
<style>
  .accessibility-btn {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    transition: box-shadow 0.3s ease;
  }

  .accessibility-btn:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
  }

  .accessibility-slide {
    animation: slideUp 0.3s ease forwards;
  }

  @keyframes slideUp {
    from {
      transform: translateY(10px);
      opacity: 0;
    }

    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  body.high-contrast {
    background-color: #000 !important;
    color: #fff !important;
  }

  body.high-contrast a {
    color: #ff0 !important;
  }

  .high-contrast img {
    filter: brightness(0.8) contrast(1.5);
  }

  /* Greyscale all but the widget */
  body.greyscale :not(#accessibility-widget):not(#accessibility-widget *) {
    filter: grayscale(100%) !important;
  }

  body.greyscale img:not(#accessibility-widget img) {
    filter: grayscale(100%) !important;
  }
</style>

<!-- Accessibility Script -->
<script>
  let fontSize = 100;
  const btn = document.getElementById('accessibilityBtn');
  const icon = btn.querySelector('i');
  const panel = document.getElementById('accessibilityPanel');

  const headingTags = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
  const originalHeadingFontSizes = {};

  headingTags.forEach(tag => {
    document.querySelectorAll(tag).forEach((el, idx) => {
      const key = tag + '_' + idx;
      originalHeadingFontSizes[key] = window.getComputedStyle(el).fontSize;
      el.dataset.headingKey = key;
    });
  });

  btn.addEventListener('click', () => {
    panel.classList.toggle('d-none');

    if (!panel.classList.contains('d-none')) {
      panel.classList.remove('accessibility-slide');
      void panel.offsetWidth;
      panel.classList.add('accessibility-slide');
    }

    if (icon.classList.contains('fa-universal-access')) {
      icon.classList.replace('fa-universal-access', 'fa-times');
    } else {
      icon.classList.replace('fa-times', 'fa-universal-access');
    }
  });

  function changeFontSize(step) {
    fontSize = Math.min(200, Math.max(70, fontSize + step * 10));
    document.body.style.fontSize = fontSize + '%';

    headingTags.forEach(tag => {
      document.querySelectorAll(tag).forEach((el) => {
        const key = el.dataset.headingKey;
        const originalSize = parseFloat(originalHeadingFontSizes[key]);
        const newSize = (originalSize * fontSize / 100);
        el.style.fontSize = newSize + 'px';
      });
    });
  }

  function toggleHighContrast() {
    document.body.classList.toggle('high-contrast');
  }

  function toggleGreyscale() {
    document.body.classList.toggle('greyscale');
  }

  function resetAccessibility() {
    fontSize = 100;
    document.body.style.fontSize = '100%';
    document.body.classList.remove('high-contrast');
    document.body.classList.remove('greyscale');

    headingTags.forEach(tag => {
      document.querySelectorAll(tag).forEach((el) => {
        const key = el.dataset.headingKey;
        if (originalHeadingFontSizes[key]) {
          el.style.fontSize = originalHeadingFontSizes[key];
        }
      });
    });
  }
</script>


<!-- bestweb logo -->
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


<!-- Seasonal Effects -->
<?php
$currentDate = new DateTime();
$start = new DateTime($currentDate->format('Y') . '-12-01');
$end = new DateTime($currentDate->format('Y') . '-12-31');

if ($currentDate >= $start && $currentDate <= $end) {
  include 'snow.php';
}

$fireworksstart = new DateTime($currentDate->format('Y') . '-01-01');
$fireworksend = new DateTime($currentDate->format('Y') . '-01-03');

if ($currentDate >= $fireworksstart && $currentDate <= $fireworksend) {
  include 'fireworks.php';
}
?>


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