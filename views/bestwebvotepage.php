<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Vote For Wales</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php include 'includes/header.php';
    $page = 'vote';
?>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    :root { --maroon-color: #800000; }
    body { background: #ffffff; min-height: 100vh; display: flex; flex-direction: column; }
    main { flex: 1 0 auto; }
    .text-maroon { color: var(--maroon-color); }
    .btn-maroon { background-color: var(--maroon-color); border-color: var(--maroon-color); color: white; }
    .btn-maroon:hover { background-color: #660000; border-color: #660000; }
    .hero-section { background: linear-gradient(135deg, #faf8f8 0%, #ffffff 100%); padding: 4rem 0; position: relative; overflow: hidden; }
    .award-gif-bg {
        width: 150px;
        height: auto;
        position: absolute;
        top: 50%;
        right: 2rem;
        transform: translateY(-50%);
        z-index: 0;
        pointer-events: none;
    }
    .source-credit {
        position: absolute;
        bottom: 1rem;
        right: 2rem;
        z-index: 1;
        font-size: 0.85rem;
        color: #555;
    }
    .instruction-image { max-width: 80px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    /* Rating Website Section Styling */
    .rating-notice {
        background-color: #f8ecec;
        border-left: 4px solid var(--maroon-color);
        padding: 1rem;
        max-width: 600px;
        margin: 2rem auto;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.08);
        text-align: center;
    }
    .rating-notice h5 { margin: 0 0 0.5rem; color: var(--maroon-color); font-size: 1.1rem; font-weight: 600; }
    .rating-notice p { margin: 0 0 1rem; color: #333; font-size: 0.95rem; }
    .rating-notice a { display: inline-block; padding: 0.5rem 1.5rem; background-color: var(--maroon-color); color: #fff; border-radius: 4px; text-decoration: none; transition: background 0.2s ease; }
    .rating-notice a:hover { background-color: #660000; }
</style>
</head>
<body>

<main>
   <section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: GIF -->
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <a href="https://ebadge.bestweb.lk/api/v1/clicked/princeofwales.edu.lk/BestWeb/2025/Rate_Us" title="Bestweb.LK" target="_blank">
                <img src="https://bestweb.lk/wp-content/uploads/2025/03/logoglow2-ezgif.com-optimize-1-2-1.gif" alt="Award Celebration" class="img-fluid" style="max-width:200px;" />
                </a>
            </div>

            <!-- Right Column: Text & Button -->
            <div class="col-md-8 text-center text-md-start">
                <h1 class="display-4 fw-bold text-maroon mb-3">Vote For Wales</h1>
                <p class="lead mb-4 text-muted">Support princeofwales.edu.lk to become the MOST POPULAR school website in BestWeb.lk 2025! Rate it before July 9th — let’s make this happen together!</p>
                <button class="btn btn-maroon btn-lg px-5 py-3" data-bs-toggle="modal" data-bs-target="#confirmModal">Rate Now</button>
            </div>
        </div>
    </div>
</section>

<br>
    <!-- Steps Accordion -->
    <section class="container mb-5" id="steps-section">
        <h2 class="text-maroon fw-bold mb-4 text-center">How to Vote:</h2>
        <div class="accordion" id="stepsAccordion">
            <!-- Steps -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        <i class="bi bi-globe2 me-2 text-maroon"></i> Go to the Rating Website
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse">
                    <div class="accordion-body">Visit <a href="https://ebadge.bestweb.lk/api/v1/clicked/princeofwales.edu.lk/BestWeb/2025/Rate_Us" target="_blank" class="text-maroon">https://www.rate.bestweb.lk/</a> and follow the instructions.</div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        <i class="bi bi-shield-check me-2 text-maroon"></i> Click Verify Button
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse">
                    <div class="accordion-body">Click "Verify" and complete the verification process.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        <i class="bi bi-envelope-at me-2 text-maroon"></i> Enter Email or Phone Number
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse">
                    <div class="accordion-body">Provide your phone number or email as instructed.</div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4">
                        <i class="bi bi-key me-2 text-maroon"></i> Enter OTP
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse">
                    <div class="accordion-body">Input the OTP you receive to proceed.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse5">
                        <i class="bi bi-search me-2 text-maroon"></i> Search for Our Website "princeofwales.edu.lk"
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse">
                    <div class="accordion-body">Search “princeofwales.edu.lk” and select our school.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse6">
                        <i class="bi bi-star-fill me-2 text-maroon"></i> Give 5 Stars and Submit
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse">
                    <div class="accordion-body">Rate 5 stars, leave a comment if you’d like, and click submit. Thank you for your support!</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rating Website Section -->
    <div class="rating-notice">
        <h5>Access the Official Rating Website</h5>
        <p>Please click the button below to navigate to the official platform and submit your vote.</p>
        <a href="https://ebadge.bestweb.lk/api/v1/clicked/princeofwales.edu.lk/BestWeb/2025/Rate_Us" target="_blank">Visit Rating Website</a>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title text-maroon">Ready to Vote?</h5></div>
            <div class="modal-body">When you’re all set, click <strong>Proceed</strong> to go to the voting platform.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                <a href="https://ebadge.bestweb.lk/api/v1/clicked/princeofwales.edu.lk/BestWeb/2025/Rate_Us" target="_blank" class="btn btn-maroon">Proceed</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-light text-center mt-auto">
    <div class="container">
        <p class="text-maroon fs-5 fw-semibold mb-0">Your vote means the world to us. <b>#BeThereForWales</b></p>
    </div>
   
</footer>
 <?php include 'includes/footer.php'; ?>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
