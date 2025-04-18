<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../database_connection.php';

  $page = 'blog';

  ?>

  <?php



  $slug = $_GET['slug'];
  $query = "SELECT * FROM pwc_db_news WHERE slug='$slug'";
  $statement = $connect->prepare($query);
  $statement->execute();
  $rows = $statement->fetchAll();

  if (count($rows) === 0) {
    header("Location: https://princeofwales.edu.lk/404");
  }

  foreach ($rows as $row) {
  }
  ?>

  <title><?php echo $row["title"]; ?></title>


  <!-- Primary Meta Tags -->
  <meta name="title" content="<?php echo $row["title"]; ?>" />
  <meta name="description" content="<?= htmlspecialchars(strip_tags($row['excerpt'])) ?>" />
  <meta name="keywords" content="<?php echo htmlspecialchars($row['tags'], ENT_QUOTES, 'UTF-8'); ?>" />
  <meta name="author" content="<?php echo htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8'); ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="article" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://princeofwales.edu.lk/blog/<?php echo $row["slug"]; ?>" />
  <meta property="og:title" content="<?php echo $row["title"]; ?>" />
  <meta property="og:description" content="<?= htmlspecialchars(strip_tags($row['excerpt'])) ?>" />
  <meta property="og:image"
    content="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" />
  <meta property="og:site_name" content="Prince of Wales College" />
  <meta property="article:published_time" content="<?php echo date('c', strtotime($row['date'])); ?>" />
  <meta property="article:author" content="<?php echo htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8'); ?>" />

  <!-- Twitter / WA / TG -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://princeofwales.edu.lk/blog/<?php echo $row["slug"]; ?>" />
  <meta property="twitter:title" content="<?php echo $row["title"]; ?>" />
  <meta property="twitter:description" content="<?= htmlspecialchars(strip_tags($row['excerpt'])) ?>" />
  <meta property="twitter:image"
    content="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" />
  <meta property="twitter:site" content="@PrinceOfWales" />
  <meta property="twitter:creator" content="@<?php echo htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8'); ?>" />


  <!-- AI Meta Tags -->
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="bingbot" content="index, follow">
  <meta name="revisit-after" content="1 days">
  <meta name="rating" content="general">
  <meta name="distribution" content="global">

  <?php include '../includes/header.php';
  include '../includes/greetings.php';

  ?>


  <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/rss">



</head>

<body class="blog-page">


  <!-- <script async type="application/javascript" src="https://news.google.com/swg/js/v1/swg-basic.js"></script>
  <script>
    (self.SWG_BASIC = self.SWG_BASIC || []).push(basicSubscriptions => {
      basicSubscriptions.init({
        type: "NewsArticle",
        isPartOfType: ["Product"],
        isPartOfProductId: "CAowjtCnDA:openaccess",
        clientOptions: {
          theme: "light",
          lang: "en"
        },
      });
    });
  </script> -->

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "headline": "<?php echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'); ?>",
      "description": "<?php echo htmlspecialchars(strip_tags($row['excerpt']), ENT_QUOTES, 'UTF-8'); ?>",
      "image": "https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row['photo'], ENT_QUOTES, 'UTF-8'); ?>",
      "author": {
        "@type": "Organization",
        "name": "<?php echo htmlspecialchars($row['author'], ENT_QUOTES, 'UTF-8'); ?>"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Prince of Wales College",
        "logo": {
          "@type": "ImageObject",
          "url": "https://princeofwales.edu.lk/content/img/logo-pwc.webp"
        }
      },
      "datePublished": "<?php echo date('c', strtotime($row['date'])); ?>",
      "dateModified": "<?php echo date('c', strtotime($row['date'])); ?>",
      "url": "https://princeofwales.edu.lk/blog/<?php echo $row['slug']; ?>",
      "mainEntityOfPage": "https://princeofwales.edu.lk/blog/<?php echo $row['slug']; ?>"
    }
  </script>


  <span>
    <link itemprop="thumbnailUrl"
      href="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url"
        href="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>">
    </span>

    <?php

    $schoolPride = $row["schoolPride"];

    if ($schoolPride == 'ON') {
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


    <script>
      function openFacebookLinksInNewTab() {
        var links = document.querySelectorAll('a[href*="facebook.com"]');
        links.forEach(function(link) {
          link.setAttribute('target', '_blank');
        });
      }

      document.addEventListener('DOMContentLoaded', function() {
        openFacebookLinksInNewTab();
      });
    </script>


    <header>
      <br>

      <div id="blog-specific-links">
        <!-- Mobile layout -->
        <article class="mobile-layout blog-page">
          <div class="container">
            <div class="row g-5">
              <div class="col-12 wow fadeInUp">
                <a href="/blog/category/<?php echo strtolower($row["category"]); ?>">
                  <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $row["category"]; ?></h6>
                </a>
                <h3 class="mb-4"><?php echo $row["title"]; ?></h3>
                <h4 style="vertical-align: middle;" class="h6 bg-white text-start text-primary">
                  Published By: <?php echo $row["author"]; ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-patch-check-fill" viewBox="0 0 16 16" style="vertical-align: TOP;">
                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                  </svg>
                  | <?php $date = $row["date"];
                  echo date("Y-m-d h:i A", strtotime($date)); ?>
                </h4>
                <br>
                <div class="position-relative">
                  <img class="img-fluid w-100 h-100" src="/content/img/img-blog/<?php echo $row["photo"]; ?>"
                    alt="<?php echo $row["title"]; ?>" style="object-fit: cover; border-radius: 8px;">
                  <br><br>
                </div>
                <p class="mb-4"><?php echo $row["content"]; ?></p>
                <?php
                if (!empty($row["extra_link"])):
                  $parts = explode(" | ", $row["extra_link"]); // Split text and URL
                  if (count($parts) == 2):
                ?>
                    <p class="mb-4"><?php echo htmlspecialchars($parts[0]); ?> | <a
                        href="<?php echo htmlspecialchars($parts[1]); ?>"
                        target="_blank"><?php echo htmlspecialchars($parts[1]); ?></a></p>
                <?php
                  endif;
                endif;
                ?>
                <p class="mb-4"><?php echo $row["tags"]; ?></p>
              </div>
            </div>
          </div>
        </article>

        <!-- Desktop layout -->
        <article class="desktop-layout blog-page">
          <div class="container">
            <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <a href="/blog/category/<?php echo strtolower($row["category"]); ?>">
                  <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $row["category"]; ?></h6>
                </a>
                <h3 class="mb-4"><?php echo $row["title"]; ?></h3>

                <h4 style="vertical-align: middle;" class="h6 bg-white text-start text-primary">
                  Published By: <?php echo $row["author"]; ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-patch-check-fill" viewBox="0 0 16 16" style="vertical-align: TOP;">
                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                  </svg>
                  | <?php $date = $row["date"];
                  echo date("Y-m-d h:i A", strtotime($date)); ?>
                </h4>

                <p class="mb-4"><?php echo $row["content"]; ?></p>
                <?php
                if (!empty($row["extra_link"])):
                  $parts = explode(" | ", $row["extra_link"]); // Split text and URL
                  if (count($parts) == 2):
                ?>
                    <p class="mb-4"><?php echo htmlspecialchars($parts[0]); ?> | <a
                        href="<?php echo htmlspecialchars($parts[1]); ?>"
                        target="_blank"><?php echo htmlspecialchars($parts[1]); ?></a></p>
                <?php
                  endif;
                endif;
                ?>
                <p class="mb-4"><?php echo $row["tags"]; ?></p>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative ">
                  <img class="img-fluid w-100 h-100" src="/content/img/img-blog/<?php echo $row["photo"]; ?>"
                    alt="<?php echo $row["title"]; ?>" style="object-fit: cover; border-radius: 8px;">
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>

      <style>
        #blog-specific-links a {
          color: #800000 !important;
          text-decoration: none !important;
        }

        #blog-specific-links a:hover,
        #blog-specific-links a:focus {
          color: #660000 !important;
          text-decoration: underline !important;
        }
      </style>

      <style>
        .desktop-layout {
          display: none;
        }

        @media only screen and (max-width: 767px) {
          .mobile-layout {
            display: block;
          }

          .desktop-layout {
            display: none;

          }
        }


        @media only screen and (min-width: 768px) {
          .mobile-layout {
            display: none;

          }

          .desktop-layout {
            display: block;

          }
        }
      </style>


    </header>

    <br>


    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>