<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../database_connection.php';
    include 'header.php';
    include '../functions.php';
    ?>
  <title>Blog</title>
    <!-- seo -->

<!-- Primary Meta Tags -->
<meta name="title" content="Blog | Prince of Wales' College" />
<meta name="description" content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
<meta name="keywords" content="prince of wales college blog, prince of wales college achievements, prince of wales college blog" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/blog/" />
<meta property="og:title" content="Blog | Prince of Wales' College" />
<meta property="og:description" content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
<meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-blog/blog-header-pwc.webp" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/blog/" />
<meta property="twitter:title" content="Blog | Prince of Wales' College" />
<meta property="twitter:description" content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
<meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-blog/blog-header-pwc.webp" />

    <style>
        .blog-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(../content/img/img-blog/blog-header-pwc.webp);
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

    <body>
        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 blog-page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">BLOG</h1>
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
                    <a class="btn btn-link active-link" href="/blog">All</a>
                    <a class="btn btn-link" href="category/sports">Sports</a>
                    <a class="btn btn-link" href="category/aesthetic">Aesthetic</a>
                    <a class="btn btn-link" href="category/education">Education</a>
                    <a class="btn btn-link" href="category/academic">Academic</a>
                    <a class="btn btn-link" href="category/announcements">Announcements</a>
                    <a class="btn btn-link" href="category/exclusives">Exclusives</a>

                </center>
            </div>
        </div>

        <br><br>


        <div class="colorlib-blog colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <?php 

$query = "SELECT * FROM pwc_db_news ORDER BY date DESC";

$statement = $connect->prepare($query);

$statement->execute();

if($statement->rowCount() > 0)
{
    foreach($statement->fetchAll() as $row)
    { 
        ?>




                    <div class="col-md-4 animate-box">
                        <article class="article-entry">
                            <a href="<?php echo $row["slug"]; ?>" class="blog-img">
                                <img src="../content/img/img-blog/<?php echo $row["photo"]; ?>"
                                    alt="<?php echo $row["photo"]; ?>"><br><br>
                                <p class="meta"><span class="day"><?php echo $row["date"]; ?></span> │ <span></span>
                                    <span><?php echo $row["category"]; ?></span></p>
                            </a>
                            <div class="desc">
                                <h4><a href="<?php echo $row["slug"]; ?>"><?php echo $row["title"]; ?></a>
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