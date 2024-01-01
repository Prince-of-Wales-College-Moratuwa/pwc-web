<?php
    $page = 'search';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'database_connection.php';
    include 'header.php';
    include 'functions.php';
    ?>

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
                            <input type="text" class="form-control search-box" placeholder="Search" aria-label="Search" aria-describedby="search-icon" name="search">
                            <div class="input-group-append">
                                <button class="input-group-text search-icon" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
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
                if (isset($_POST['search'])) {
                    $keyword = $_POST['search'];

                    $sql = "SELECT * FROM pwc_db_news
                            WHERE title LIKE :keyword
                            OR excerpt LIKE :keyword
                            OR category LIKE :keyword ORDER BY date DESC";

                    $stmt = $connect->prepare($sql);
                    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
                    $stmt->execute();

                    // Get the number of rows returned by the query
                    $row_count = $stmt->rowCount();

                    if ($row_count > 0){
                        echo '<h6 class="section-title bg-white text-start text-primary">"';
                        echo $keyword;
                        echo '" IN BLOG</h6>';
                    } else {
                        echo '<h6 class="section-title bg-white text-start text-primary">"';
                        echo $keyword;
                        echo '" IN BLOG</h6>';
                    }

                    if ($row_count > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            // Generate the HTML output for each record
                            echo '<div class="col-md-4 animate-box">
                                    <article class="article-entry">
                                        <a href="blog/' . $row["slug"] . '" class="blog-img">
                                            <img src="content/img/img-blog/' . $row["photo"] . '" alt="' . $row["photo"] . '"><br><br>
                                            <p class="meta"><span class="day">' . $row["date"] . '</span> │ <span></span>
                                                <span>' . $row["category"] . '</span></p>
                                        </a>
                                        <div class="desc">
                                            <h4><a href="blog/' . $row["slug"] . '">' . $row["title"] . '</a></h4>
                                            <p>' . $row["excerpt"] . '...</p>
                                        </div>
                                    </article>
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

<br>

    <div class="colorlib-blog colorlib-light-grey">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_POST['search'])) {
                    $keyword = $_POST['search'];

                    $sql = "SELECT * FROM pwc_db_events
                            WHERE title LIKE :keyword
                            OR about LIKE :keyword
                            OR date LIKE :keyword
                            OR location LIKE :keyword
                            OR organizer_name LIKE :keyword ORDER BY date DESC";

                    $stmt = $connect->prepare($sql);
                    $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
                    $stmt->execute();

                    // Get the number of rows returned by the query
                    $row_count = $stmt->rowCount();

                    if ($row_count > 0){
                        echo '<h6 class="section-title bg-white text-start text-primary">"';
                        echo $keyword;
                        echo '" IN EVENTS</h6>';
                    } else {
                        echo '<h6 class="section-title bg-white text-start text-primary">"';
                        echo $keyword;
                        echo '" IN EVENTS</h6>';
                    }

                    if ($row_count > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            // Generate the HTML output for each record
                            echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                            echo '<div class="course-item bg-light">';
                            echo '<div class="position-relative overflow-hidden">';
                            echo '<img class="img-fluid" src="../content/img/img-events/' . $row["img"] . '" alt="' . $row["img"] . '" style="width: auto;">';
                            echo '</div>';
                            echo '<div class="text-center p-4 pb-0">';
                            echo '<h4 class="mb-4">' . $row["title"] . '</h4>';
                            echo '</div>';
                            echo '<div class="w-100 d-flex justify-content-center bottom-0 start-0 mb-4">';
                            echo '<a href="events/' . $row["slug"] . '" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30 30 30px;">Read More</a>';
                            echo '</div>';
                            echo '<div class="d-flex border-top">';
                            echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>' . $row["organizer_name"] . '</small>';
                            echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>' . $row["date"] . '</small>';
                            echo '<small class="flex-fill text-center py-2"><i class="fa fa-map-marker text-primary me-2"></i>' . $row["location"] . '</small>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "No results found.";
                    }
                }
                ?>
                            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
