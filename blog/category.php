<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    include '../database_connection.php';

    include 'header.php';
    include '../functions.php';
    ?>

<?php
$categoryslug = $_GET['categoryslug'];
$query = "SELECT * FROM pwc_db_news WHERE categoryslug='$categoryslug'";
$statement = $connect->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();

if (count($rows) === 0) {
    header("Location: https://princeofwales.edu.lk/404.php");
}

foreach ($rows as $row) {
}
?>

<title><?php echo $row["category"]; ?></title>

    <!-- seo -->

    <!-- Primary Meta Tags -->
    <meta name="title" content="Blog" />
    <meta name="description"
        content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
    <meta name="keywords"
        content="prince of wales college blog, prince of wales college achievements, prince of wales college blog" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/blog/category/<?php echo $row["category"]; ?>" />
    <meta property="og:title" content="blog" />
    <meta property="og:description"
        content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-blog/blog-header-pwc.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/blog/<?php echo $row["category"]; ?>" />
    <meta property="twitter:title" content="blog" />
    <meta property="twitter:description"
        content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-blog/blog-header-pwc.webp" />

    <style>
        .blog-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(/content/img/img-blog/blog-header-pwc.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .blog-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }
    </style>
</head>


    <body>
        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 blog-page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white text-uppercase animated slideInDown"><?php echo $row["category"]; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <style>
        .active-link {
            color: #ff0000; 
          
        }
    </style>
    
        <div class="container-xxl py-1">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <center>
                    <div class="col-lg-9 col-md-6">
                    <p class="mb-4">Filter by Category;</p>
                    <a class="btn btn-link" href="/blog">All</a>
                    <a class="btn btn-link" href="sports">Sports</a>
                    <a class="btn btn-link" href="aesthetic">Aesthetic</a>
                    <a class="btn btn-link" href="education">Education</a>
                    <a class="btn btn-link" href="academic">Academic</a>
                    <a class="btn btn-link" href="announcements">Announcements</a>
                    <a class="btn btn-link" href="exclusives">Exclusives</a>
                </center>

                <script>
                    var currentUrl = window.location.href;
                    var links = document.querySelectorAll('.btn-link');
                    links.forEach(function(link) {
                        if (link.href === currentUrl) {
                            link.classList.add('active-link');
                        }
                    });
                </script>

            </div>
        </div>

        <br><br>


        <div class="colorlib-blog colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <?php 

$query = "SELECT * FROM pwc_db_news WHERE categoryslug='$categoryslug' ORDER BY date DESC";

$statement = $connect->prepare($query);

$statement->execute();

if($statement->rowCount() > 0)
{
    foreach($statement->fetchAll() as $row)
    { 
        ?>




                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="/blog/<?php echo $row["slug"]; ?>" class="blog-img">
                                <img src="/content/img/img-blog/<?php echo $row["photo"]; ?>"
                                    alt="<?php echo $row["photo"]; ?>"><br><br>
                                <p class="meta"><span class="day"><?php echo $row["date"]; ?></span> │ <span></span>
                                    <span><?php echo $row["category"]; ?></span></p>
                            </a>
                            <div class="desc">
                                <h4><a href="/blog/<?php echo $row["slug"]; ?>"><?php echo $row["title"]; ?></a>
                                </h4>
                                <p><?php echo htmlspecialchars(strip_tags($row["excerpt"])); echo "......"; ?></p>
                            </div>
                        </article>
                    </div>


                    <?php 
					}
		}	
        ?>
                </div>
            </div>
        </div>




        <?php include 'footer.php'; ?>
    </body>

</html>