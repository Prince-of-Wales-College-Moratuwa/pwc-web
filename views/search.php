<?php
    $page = 'search';
    include '../database_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/header.php'; ?>

    <title>Search</title>

    <style>
        /* Style for the curved search box */
        .search-box {
            border-radius: 25px;
        }

        .search-icon {
            background-color: maroon;
            border: none;
            border-radius: 0 25px 25px 0;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Type Here To Search</h6>
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control search-box" placeholder="Search" aria-label="Search"
                                aria-describedby="search-icon" name="search">
                            <div class="input-group-append">
                                <button class="input-group-text search-icon" id="search-icon" type="submit"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="colorlib-blog colorlib-light-grey">
        <div class="container">
            <div class="row">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
                    $keyword = trim($_POST['search']);

                    // Search in news
                    $sql = "SELECT * FROM pwc_db_news
                            WHERE title LIKE :keyword
                            OR excerpt LIKE :keyword
                            OR category LIKE :keyword ORDER BY date DESC";
                    $stmt = $connect->prepare($sql);
                    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
                    $stmt->execute();

                    // Display the search results
                    echo '<h6 class="section-title bg-white text-start text-primary">' . htmlspecialchars($keyword) . ' IN BLOG</h6>';
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<br><br><div class="col-md-4 animate-box">
                                    <article class="article-entry">
                                        <a href="blog/' . htmlspecialchars($row["slug"]) . '" class="blog-img">
                                            <img src="/content/img/img-blog/' . htmlspecialchars($row["photo"]) . '" alt="' . htmlspecialchars($row["title"]) . '"><br><br>
                                            <p class="meta"><span class="day">' . htmlspecialchars($row["date"]) . '</span> │ <span>' . htmlspecialchars($row["category"]) . '</span></p>
                                        </a>
                                        <div class="desc">
                                            <h4><a href="blog/' . htmlspecialchars($row["slug"]) . '">' . htmlspecialchars($row["title"]) . '</a></h4>
                                            <p>' . htmlspecialchars($row["excerpt"]) . '...</p>
                                        </div>
                                    </article>
                                </div>';
                        }
                    } else {
                        echo "No results found.";
                    }

                    // Search in events
                    $sql = "SELECT * FROM pwc_db_events
                            WHERE title LIKE :keyword
                            OR about LIKE :keyword
                            OR date LIKE :keyword
                            OR location LIKE :keyword
                            OR organizer_name LIKE :keyword ORDER BY date DESC";
                    $stmt = $connect->prepare($sql);
                    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
                    $stmt->execute();

                    // Display the search results
                    echo '<h6 class="section-title bg-white text-start text-primary">' . htmlspecialchars($keyword) . ' IN EVENTS</h6>';
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<br><br><div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="course-item bg-light">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid" src="/content/img/img-events/' . htmlspecialchars($row["img"]) . '" alt="' . htmlspecialchars($row["title"]) . '" style="width: auto;">
                                        </div>
                                        <div class="text-center p-4 pb-0">
                                            <h4 class="mb-4">' . htmlspecialchars($row["title"]) . '</h4>
                                        </div>
                                        <div class="w-100 d-flex justify-content-center bottom-0 start-0 mb-4">
                                            <a href="events/' . htmlspecialchars($row["slug"]) . '" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px;">Read More</a>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>' . htmlspecialchars($row["date"]) . '</small>
                                            <small class="flex-fill text-center py-2"><i class="fa fa-map-marker text-primary me-2"></i>' . htmlspecialchars($row["location"]) . '</small>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "No results found.";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>