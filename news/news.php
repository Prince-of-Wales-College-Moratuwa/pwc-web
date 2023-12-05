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
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/news/<?php echo $row["slug"]; ?>" />
<meta property="og:title" content="<?php echo $row["title"]; ?>" />
<meta property="og:description" content="<?php echo $row["excerpt"]; ?>" />
<meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-news/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/news/<?php echo $row["slug"]; ?>" />
<meta property="twitter:title" content="<?php echo $row["title"]; ?>" />
<meta property="twitter:description" content="<?php echo $row["excerpt"]; ?>" />
<meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-news/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" />


</head>

<body>

<?php
// Assuming you have fetched the category field value from the database into $row["category"]
$category = $row["category"];

if (stripos($category, "Achievement") !== false) {

    echo '<div class="confetti-container"></div>';
    
    // Include the confetti script
    echo '<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>';
    
    // Run the confetti animation script
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


    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $row["category"]; ?></h6>
          <h2 class="mb-4"><?php echo $row["title"]; ?></h2>
          <h6 class="bg-white text-start text-primary "><?php echo $row["date"]; ?></h6>
          <p class="mb-4"><?php echo $row["content"]; ?></p>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="position-relative ">
            <img class="img-fluid w-100 h-100" src="../../content/img/img-news/<?php echo $row["photo"]; ?>" alt="<?php echo $row["photo"]; ?>"
              style="object-fit: cover; border-radius: 8px;">
          </div>
        </div>
      </div>
    </div>
  </header>

  <br>


  </div>
  <?php include 'footer.php'; ?>
</body>

</html>
