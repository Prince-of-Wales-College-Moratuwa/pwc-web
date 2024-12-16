<?php
include '../../database_connection.php';
$page = 'blog';


// Get the category slug and page number from the URL
$categoryslug = isset($_GET['categoryslug']) ? $_GET['categoryslug'] : '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$limit = 9; // Number of posts per page
$start = ($page - 1) * $limit;

// Fetch total number of posts
$query = "SELECT COUNT(*) FROM pwc_db_news WHERE categoryslug=?";
$statement = $connect->prepare($query);
$statement->execute([$categoryslug]);
$total_results = $statement->fetchColumn();
$total_pages = ceil($total_results / $limit);

// Fetch posts for the current page
$query = "SELECT * FROM pwc_db_news WHERE categoryslug=? AND date <= NOW() ORDER BY date DESC, id DESC LIMIT $start, $limit";
$statement = $connect->prepare($query);
$statement->execute([$categoryslug]);
$rows = $statement->fetchAll();

if (count($rows) === 0) {
    header("Location: https://princeofwales.edu.lk/404.php");
    exit();
}


// Get the category slug from the URL
$categoryslug = isset($_GET['categoryslug']) ? $_GET['categoryslug'] : '';

// Fetch article count for the specific category
$query = "SELECT COUNT(*) AS article_count FROM pwc_db_news WHERE categoryslug=?";
$statement = $connect->prepare($query);
$statement->execute([$categoryslug]);
$article_count = $statement->fetchColumn();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($rows[0]["category"]); ?> Archives</title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="<?php echo htmlspecialchars($rows[0]["category"]); ?> Archives | Prince of Wales' College" />
    <meta name="description" content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
    <meta name="keywords" content="prince of wales college blog, prince of wales college achievements, prince of wales college blog" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://princeofwales.edu.lk/blog/category/<?php echo strtolower($rows[0]["category"]); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($rows[0]["category"]); ?> | Prince of Wales' College" />
    <meta property="og:description" content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
    <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-blog/blog-<?php echo htmlspecialchars(strtolower($rows[0]["category"])); ?>-header-pwc.webp" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://princeofwales.edu.lk/blog/category/<?php echo strtolower($rows[0]["category"]); ?>" />
    <meta property="twitter:title" content="<?php echo htmlspecialchars($rows[0]["category"]); ?> | Prince of Wales' College" />
    <meta property="twitter:description" content="Stay informed with the latest updates and insights from Prince of Wales College on our blog. Your source for educational excellence and campus happenings." />
    <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-blog/blog-<?php echo htmlspecialchars(strtolower($rows[0]["category"])); ?>-header-pwc.webp" />

    <?php include '../includes/header.php'; ?>

    <style>
        .category-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url('/content/img/img-blog/blog-<?php echo htmlspecialchars(strtolower($rows[0]["category"])); ?>-header-pwc.webp');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .category-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }

        .active-link {
            color: #ff0000; 
        }
    </style>
</head>
<body>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 category-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h5 class="display-12 text-white text-uppercase animated slideInDown">category</h5>
                    <h1 class="display-3 text-white text-uppercase animated slideInDown"><?php echo htmlspecialchars($rows[0]["category"]); ?></h1>
                    <p class="btn text-white animated slideInDown"> <?php echo $article_count; ?> Articles</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-1">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <center>
                <div class="col-lg-9 col-md-6">
                    <p class="mb-4">Filter by Category;</p>
                    <a class="btn btn-link" href="/blog/">All</a>
                    <a class="btn btn-link" href="/blog/category/sports">Sports</a>
                    <a class="btn btn-link" href="/blog/category/aesthetic">Aesthetic</a>
                    <a class="btn btn-link" href="/blog/category/education">Education</a>
                    <a class="btn btn-link" href="/blog/category/academic">Academic</a>
                    <a class="btn btn-link" href="/blog/category/announcements">Announcements</a>
                    <a class="btn btn-link" href="/blog/category/exclusives">Exclusives</a>
                </div>
            </center>
        </div>
    </div>


    <script>
        var currentUrl = window.location.href;
        var links = document.querySelectorAll('.btn-link');

        links.forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add('active-link');
            } else {
                var urlWithoutPage = currentUrl.replace(/\/page\/\d+/, '');
                if (link.href === urlWithoutPage) {
                    link.classList.add('active-link');
                }
            }
        });
    </script>
    <br><br>

    <div class="colorlib-blog colorlib-light-grey">
        <div class="container">
            <div class="row">
                <?php 
                foreach ($rows as $row) { 
                ?>
                    <div class="col-md-4 animate-box wow fadeInUp">
                        <article class="article-entry">
                            <a href="/blog/<?php echo $row["slug"]; ?>" class="blog-img">
                                <img src="/content/img/img-blog/<?php echo htmlspecialchars($row["photo"]); ?>" alt="<?php echo htmlspecialchars($row["title"]); ?>" loading="lazy"><br><br>
                                <p class="meta"><span class="day"><?php $date = $row["date"]; echo date("Y-m-d h:i A", strtotime($date)); ?></span> │ <span></span> <span><?php echo htmlspecialchars($row["category"]); ?></span></p>
                            </a>
                            <div class="desc">
                                <h4><a href="/blog/<?php echo htmlspecialchars($row["slug"]); ?>"><?php echo htmlspecialchars($row["title"]); ?></a></h4>
                                <p><?php echo htmlspecialchars(strip_tags($row["excerpt"])); echo "......"; ?></p>
                            </div>
                        </article>
                    </div>
                <?php 
                } 
                ?>
            </div>
            <!-- Pagination Links -->
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <?php if ($page > 1): ?>
                                <li class="page-item">
                                    <a class="page-link" href="/blog/category/<?php echo $categoryslug; ?>/page/<?php echo $page-1; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?php if ($i == $page) echo 'active'; ?>"><a class="page-link" href="/blog/category/<?php echo $categoryslug; ?>/page/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php endfor; ?>
                            <?php if ($page < $total_pages): ?>
                                <li class="page-item">
                                    <a class="page-link" href="/blog/category/<?php echo $categoryslug; ?>/page/<?php echo $page+1; ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
