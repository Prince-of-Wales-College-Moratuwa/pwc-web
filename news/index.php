<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../database_connection.php';
    include 'header.php';
    include '../functions.php';
    ?>

    <!-- seo -->

<!-- Primary Meta Tags -->
<meta name="title" content="News" />
<meta name="description" content="Stay informed with the latest updates and insights from Prince of Wales College on our news blog. Your source for educational excellence and campus happenings." />
<meta name="keywords" content="prince of wales college news, prince of wales college achievements, prince of wales college blog" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/news/" />
<meta property="og:title" content="News" />
<meta property="og:description" content="Stay informed with the latest updates and insights from Prince of Wales College on our news blog. Your source for educational excellence and campus happenings." />
<meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-news/news-header-pwc.webp" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/news/" />
<meta property="twitter:title" content="News" />
<meta property="twitter:description" content="Stay informed with the latest updates and insights from Prince of Wales College on our news blog. Your source for educational excellence and campus happenings." />
<meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-news/news-header-pwc.webp" />

    <style>
        .news-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(../content/img/img-news/news-header-pwc.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .news-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }
    </style>
</head>

<body>

    <body>
        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 news-page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">NEWS</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->






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
                                <img src="../content/img/img-news/<?php echo $row["photo"]; ?>"
                                    alt="<?php echo $row["photo"]; ?>"><br><br>
                                <p class="meta"><span class="day"><?php echo $row["date"]; ?></span> │ <span></span>
                                    <span><?php echo $row["category"]; ?></span></p>
                            </a>
                            <div class="desc">
                                <h4><a href="<?php echo $row["slug"]; ?>"><?php echo $row["title"]; ?></a>
                                </h4>
                                <p><?php echo $row["excerpt"]; echo "......" ?></p>
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