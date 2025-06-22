<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Vote for Prince of Wales' College - BestWeb.lk 2025</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php 
include 'includes/header.php';
    ?>

<!-- Add Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    :root { --maroon-color: #800000; }
    body {
        background: #ffffff;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    main {
        flex: 1 0 auto;
    }
    .text-maroon { color: var(--maroon-color); }
    .btn-maroon {
        background-color: var(--maroon-color); border-color: var(--maroon-color); color: white;
    }
    .btn-maroon:hover { background-color: #660000; border-color: #660000; }
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        padding: 4rem 0;
    }
    .accordion-button:not(.collapsed) {
        background-color: var(--maroon-color); color: white;
    }
    .instruction-image {
        max-width: 80px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    @media (max-width:768px) {
        .hero-section { padding: 2rem 0; }
        .instruction-image { max-width: 60px; }
    }
    .float-btn {
        position: fixed; bottom: 20px; right: 20px; background: var(--maroon-color); color: white;
        padding: 0.7rem 1rem; border-radius: 50px; cursor: pointer; box-shadow: 0 2px 6px rgba(0,0,0,0.3);
        z-index: 9999; transition: background 0.2s ease;
    }
    .float-btn:hover { background: #660000; }
</style>
</head>
<body>
<main>
<!-- Hero -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold text-maroon mb-4">Support Our School – Vote for Us!</h1>
        <p class="lead mb-5 text-muted">Help princeofwales.edu.lk win the Most Popular Website Award at BestWeb.lk 2025.</p>
        <button class="btn btn-maroon btn-lg px-5 py-3" data-bs-toggle="modal" data-bs-target="#confirmModal">Rate Now</button>
    </div>
</section>

<!-- Steps Accordion -->
<section class="container mb-5" id="steps-section">
    <h2 class="text-maroon fw-bold mb-4 text-center">How to Rate:</h2>
    <div class="accordion" id="stepsAccordion">

        <!-- Step 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1">
                    <i class="bi bi-globe2 me-2 text-maroon"></i>
                    Step 1: Go to the Rating Website
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Visit <a href="https://www.rate.bestweb.lk/" target="_blank" class="text-maroon">https://www.rate.bestweb.lk/</a>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2">
                    <i class="bi bi-shield-check me-2 text-maroon"></i>
                    Step 2: Click on “Verify”
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Select <strong>Verify</strong> to proceed as a verified voter.
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3">
                    <i class="bi bi-envelope-at me-2 text-maroon"></i>
                    Step 3: Enter Your Email or Phone
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Enter your email address or phone number after clicking verify.
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4">
                    <i class="bi bi-key me-2 text-maroon"></i>
                    Step 4: Verify with OTP
                </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Enter the OTP code you receive.
                </div>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse5">
                    <i class="bi bi-search me-2 text-maroon"></i>
                    Step 5: Search Our Website
                </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Type “princeofwales.edu.lk” into the search bar and select our school.
                </div>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse6">
                    <i class="bi bi-star-fill me-2 text-maroon"></i>
                    Step 6: Rate and Submit
                </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Give 5 stars, add a review (optional), then hit submit!
                </div>
            </div>
        </div>
    </div>

    <!-- Steps Completed Counter -->
    <div class="text-center mt-4">
        <h5 class="text-maroon">👀 Steps viewed: <span id="steps-completed">0</span>/6</h5>
    </div>
</section>
</main>



<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header"><h5 class="modal-title text-maroon">Ready to Rate?</h5></div>
      <div class="modal-body">Have you read the steps? Click <strong>Proceed</strong> to go to the voting site.</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
        <a href="https://www.rate.bestweb.lk/" target="_blank" class="btn btn-maroon">Proceed</a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-light text-center mt-auto">
    <div class="container">
        <p class="text-maroon fs-5 fw-semibold mb-0">Your vote matters. Thank you for supporting Prince of Wales' College!</p>
    </div>

    <?php include 'includes/footer.php'; ?>

</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const accordions = document.querySelectorAll('.accordion-collapse');
    const stepsCompleted = document.getElementById('steps-completed');
    const shareButton = document.getElementById('share-btn');

    accordions.forEach((acc) => {
        acc.addEventListener('shown.bs.collapse', updateCompleted);
    });

    function updateCompleted() {
        const completed = Array.from(accordions).filter(a => a.classList.contains('show')).length;
        stepsCompleted.textContent = completed;
    }

    shareButton.addEventListener('click', () => {
        navigator.clipboard.writeText(window.location.href).then(() => {
            shareButton.textContent = "Copied!";
            setTimeout(() => shareButton.textContent = "Copy Link", 2000);
        });
    });
</script>



</body>
</html>
