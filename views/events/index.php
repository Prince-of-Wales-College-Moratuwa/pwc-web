<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    $page = 'events';

include '../../database_connection.php';

?>

<title>Events</title>

    <!-- seo -->

<!-- Primary Meta Tags -->
<meta name="title" content="Events" />
<meta name="description" content="Explore Prince of Wales College's vibrant event calendar, packed with exciting educational and cultural experiences for students and the community." />
<meta name="keywords" content="prince of wales college events, prince of wales college event calender" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/events/" />
<meta property="og:title" content="Events" />
<meta property="og:description" content="Explore Prince of Wales College's vibrant event calendar, packed with exciting educational and cultural experiences for students and the community." />
<meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-events/event-header-pwc.webp" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/events/" />
<meta property="twitter:title" content="Events" />
<meta property="twitter:description" content="Explore Prince of Wales College's vibrant event calendar, packed with exciting educational and cultural experiences for students and the community." />
<meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-events/event-header-pwc.webp" />

<?php  
include '../includes/header.php'; ?>

    <style>
        .event-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(../content/img/img-events/event-header-pwc.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .event-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }

        .course-item {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 400px; /* Ensure all boxes have the same height */
}
.course-item .text-center {
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

    </style>

</head>

<body>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 event-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">EVENTS</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Up Events Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <?php
            $currentDate = date("Y-m-d"); 

            $query = "SELECT * FROM pwc_db_events ORDER BY date DESC"; 
            $statement = $connect->prepare($query);
            $statement->execute();

            $upcomingEvents = array();
            $pastEvents = array();

            if ($statement->rowCount() > 0) {
                foreach ($statement->fetchAll() as $row) {
                    $eventDate = $row["date"];

                    if ($eventDate > $currentDate) {
                        $upcomingEvents[] = $row;
                    } else {
                        $pastEvents[] = $row;
                    }
                }
            }

            echo '<div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Upcoming Events</h6>
            </div>';
            if (empty($upcomingEvents)) {
                echo '<div class="text-center mb-5">';
                echo '<i class="fas fa-exclamation-circle text-primary mb-4"></i>';
                echo '&nbsp; No Upcoming Events to Show';
                echo '</div>';
            } else {
                foreach ($upcomingEvents as $row) {
                    echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                    echo '<div class="course-item bg-light d-flex flex-column" style="min-height: 300px;">';
                    echo '<div class="position-relative overflow-hidden">';
                    echo '<img class="img-fluid" loading="lazy" src="../content/img/img-events/' . $row["img"] . '" alt="' . $row["title"] . '" style="width: auto;">';
                    echo '</div>';
                    echo '<div class="text-center p-4 flex-grow-1">';
                    echo '<h4 class="mb-4">' . $row["title"] . '</h4>';
                    echo '</div>';
                    echo '<div class="mt-auto w-100 d-flex justify-content-center mb-4">';
                    echo '<a href="/events/' . $row["slug"] . '" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;" aria-label="Read more about ' . $row["event_title"] . '">View Event</a>';
                    echo '</div>';
                    echo '<div class="d-flex border-top">';
                    echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>' . $row["date"] . '</small>';
                    echo '<small class="flex-fill text-center py-2"><i class="fa fa-map-marker text-primary me-2"></i>' . $row["location"] . '</small>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }

            // past events
            echo '<div class="text-center wow fadeInUp mb-5 mt-5" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Past Events</h6>
            </div>';
            foreach ($pastEvents as $row) {
                echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                echo '<div class="course-item bg-light d-flex flex-column" style="min-height: 300px;">';
                echo '<div class="position-relative overflow-hidden">';
                echo '<img class="img-fluid" loading="lazy" src="../content/img/img-events/' . $row["img"] . '" alt="' . $row["title"] . '" style="width: auto;">';
                echo '</div>';
                echo '<div class="text-center p-4 flex-grow-1">';
                echo '<h4 class="mb-4">' . $row["title"] . '</h4>';
                echo '</div>';
                echo '<div class="mt-auto w-100 d-flex justify-content-center mb-4">';
                echo '<a href="/events/' . $row["slug"] . '" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;" aria-label="Read more about ' . $row["title"] . '">View Event</a>';
                echo '</div>';
                echo '<div class="d-flex border-top">';
                echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>' . $row["date"] . '</small>';
                echo '<small class="flex-fill text-center py-2"><i class="fa fa-map-marker text-primary me-2"></i>' . $row["location"] . '</small>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        </div>
    </div>
</div>





    <?php include '../includes/footer.php'; ?>
</body>

</html>