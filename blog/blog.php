<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../database_connection.php'; ?>

  <?php



$slug = $_GET['slug'];
$query = "SELECT * FROM pwc_db_news WHERE slug='$slug'";
$statement = $connect->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();

if (count($rows) === 0) {
    header("Location: https://princeofwales.edu.lk/404.php");
}

foreach ($rows as $row) {
}
?>

  <title><?php echo $row["title"]; ?></title>

  <?php include 'header.php'; ?>

  <!-- Primary Meta Tags -->
  <meta name="title" content="<?php echo $row["title"]; ?>" />
  <meta name="description" content="<?php echo $row["excerpt"]; ?>" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="article" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://princeofwales.edu.lk/blog/<?php echo $row["slug"]; ?>" />
  <meta property="og:title" content="<?php echo $row["title"]; ?>" />
  <meta property="og:description" content="<?php echo $row["excerpt"]; ?>" />
  <meta property="og:image"
    content="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" />

  <!-- Twitter / WA / TG -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://princeofwales.edu.lk/blog/<?php echo $row["slug"]; ?>" />
  <meta property="twitter:title" content="<?php echo $row["title"]; ?>" />
  <meta property="twitter:description" content="<?php echo $row["excerpt"]; ?>" />
  <meta property="twitter:image"
    content="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" />


</head>

<body>

  <span>
    <link itemprop="thumbnailUrl"
      href="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url"
        href="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>">
    </span>

    <?php
$category = $row["category"];

if (stripos($category, "Achievement") !== false) {

    echo '<div class="confetti-container"></div>';
    
    echo '<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>';
    
    echo '
    <script>
      var end = Date.now() + (2 * 1000);
      var colors = [\'#800080\', \'#ffd700\', \'#800000\'];
    
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
    </script>';
}
?>



    <header>
      <br>

      <!-- Mobile layout -->
      <article class="mobile-layout">
        <div class="container">
          <div class="row g-5">
            <div class="col-12 wow fadeInUp">
              <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $row["category"]; ?></h6>
              <h2 class="mb-4"><?php echo $row["title"]; ?></h2>
              <h6 class="bg-white text-start ">By<?php echo $row["author"]; ?></h6>
              <h6 class="bg-white text-start text-primary"><?php echo $row["date"]; ?></h6>
              <br>
              <div class="position-relative">
                <img class="img-fluid w-100 h-100" src="../../content/img/img-blog/<?php echo $row["photo"]; ?>"
                  alt="<?php echo $row["title"]; ?>" style="object-fit: cover; border-radius: 8px;">
                <br><br>
              </div>
              <p class="mb-4"><?php echo $row["content"]; ?></p>
            </div>
          </div>
        </div>
      </article>

      <!-- Desktop layout -->
      <article class="desktop-layout">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
              <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $row["category"]; ?></h6>
              <h2 class="mb-4"><?php echo $row["title"]; ?></h2>
              <h6 class="bg-white text-start ">By <?php echo $row["author"]; ?></h6>
              <h6 class="bg-white text-start text-primary "><?php echo $row["date"]; ?></h6>
              <p class="mb-4"><?php echo $row["content"]; ?></p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="position-relative ">
                <img class="img-fluid w-100 h-100" src="../../content/img/img-blog/<?php echo $row["photo"]; ?>"
                  alt="<?php echo $row["title"]; ?>" style="object-fit: cover; border-radius: 8px;">
              </div>
            </div>
          </div>
        </div>
      </article>

      <style>
        /* Default styles for both mobile and desktop */
        .desktop-layout {
          display: none;
          /* Hide desktop layout by default */
        }

        /* Media query for mobile devices */
        @media only screen and (max-width: 767px) {
          .mobile-layout {
            display: block;
            /* Show mobile layout */
          }

          .desktop-layout {
            display: none;
            /* Hide desktop layout for mobile devices */
          }
        }

        /* Media query for desktop devices */
        @media only screen and (min-width: 768px) {
          .mobile-layout {
            display: none;
            /* Hide mobile layout for desktop devices */
          }

          .desktop-layout {
            display: block;
            /* Show desktop layout */
          }
        }
      </style>


    </header>

    <br>


    </div>
    <?php include 'footer.php'; ?>
</body>

</html>