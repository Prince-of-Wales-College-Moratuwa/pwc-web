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
            height: 400px;
            /* Ensure all boxes have the same height */
        }

        .course-item img {
            width: 100%;
            aspect-ratio: 1 / 1;
            /* Ensures 1:1 aspect ratio */
            object-fit: cover;
            /* Prevents distortion and ensures the image fills the area */
            border-radius: 10px;
            /* Optional: Add rounded corners */
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

    <!-- <div class="container-xxl py-1">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

            <p class="mb-4">
                📅 Add these events directly to your calendar. Once subscribed, new events will automatically sync with your phone or computer – no need to come back and click again!
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
                
                <a href="https://calendar.google.com/calendar/u/0/r?cid=https://princeofwales.edu.lk/pwc-calendar.ics"
                    class="btn btn-danger py-3 px-4 wow zoomIn" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-google me-2"></i> Google Calendar
                </a>

                <a href="webcal://princeofwales.edu.lk/pwc-calendar.ics"
                    class="btn btn-dark py-3 px-4 wow zoomIn" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-apple me-2"></i> Apple Calendar
                </a>

                <a href="/pwc-calendar.ics"
                    class="btn btn-success py-3 px-4 wow zoomIn" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-download me-2"></i> .ICS File
                </a>
            </div>

        </div>
    </div> -->



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

                        // Calculate the difference between the current date and the event date
                        $eventDateObj = new DateTime($eventDate);
                        $currentDateObj = new DateTime();
                        $interval = $currentDateObj->diff($eventDateObj);
                        $daysDifference = (int)$interval->format('%r%a'); // Positive for future, negative for past

                        // Determine the label text
                        if ($daysDifference < 0) {
                            $statusLabel = "Event Ended";
                        } elseif ($daysDifference === 0) {
                            $statusLabel = "Today";
                        } elseif ($daysDifference === 1) {
                            $statusLabel = "1 Day More";
                        } else {
                            $statusLabel = "$daysDifference Days More";
                        }

                        if ($eventDate > $currentDate) {
                            $upcomingEvents[] = array_merge($row, ["statusLabel" => $statusLabel]);
                        } else {
                            $pastEvents[] = array_merge($row, ["statusLabel" => $statusLabel]);
                        }
                    }
                }

                // Display upcoming events
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
                        echo '<div class="course-item bg-light d-flex flex-column h-100">';
                        echo '<div class="position-relative overflow-hidden image-container">';
                        echo '<img class="img-fluid" loading="lazy" src="../content/img/img-events/' . $row["img"] . '" alt="' . $row["title"] . '">';
                        // Status Label
                        echo '<div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-1 small" style="border-radius: 0 0 5px 0;">';
                        echo $row["statusLabel"];
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="text-center p-4 flex-grow-1">';
                        echo '<h4 class="mb-4">' . $row["title"] . '</h4>';
                        echo '</div>';
                        echo '<div class="mt-auto w-100 d-flex justify-content-center mb-4">';
                        echo '<a href="/events/' . $row["slug"] . '" class="flex-shrink-0 btn btn-sm btn-primary px-3" aria-label="Read more about ' . $row["title"] . '">View Event</a>';
                        echo '</div>';
                        echo '<div class="d-flex border-top">';
                        echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>' . $row["date"] . '</small>';
                        echo '<small class="flex-fill text-center py-2"><i class="fa fa-map-marker text-primary me-2"></i>' . $row["location"] . '</small>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }

                // Display past events
                echo '<div class="text-center wow fadeInUp mb-5 mt-5" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Past Events</h6>
                </div>';
                foreach ($pastEvents as $row) {
                    echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                    echo '<div class="course-item bg-light d-flex flex-column h-100">';
                    echo '<div class="position-relative overflow-hidden image-container">';
                    echo '<img class="img-fluid" loading="lazy" src="../content/img/img-events/' . $row["img"] . '" alt="' . $row["title"] . '">';
                    echo '</div>';
                    echo '<div class="text-center p-4 flex-grow-1">';
                    echo '<h4 class="mb-4">' . $row["title"] . '</h4>';
                    echo '</div>';
                    echo '<div class="mt-auto w-100 d-flex justify-content-center mb-4">';
                    echo '<a href="/events/' . $row["slug"] . '" class="flex-shrink-0 btn btn-sm btn-primary px-3" aria-label="Read more about ' . $row["title"] . '">View Event</a>';
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

    <style>
        /* Ensure the container for the image maintains 1:1 ratio */
        .image-container {
            width: 100%;
            /* Full width of the card */
            padding-top: 100%;
            /* 1:1 aspect ratio using padding hack */
            position: relative;
            /* For positioning the image absolutely */
            overflow: hidden;
            /* Crop the overflowing parts of the image */
            border-radius: 10px;
            /* Optional: Rounded corners */
        }

        /* Properly fit the image inside the container */
        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures the image scales and crops to fit the container */
        }

        /* Flexbox improvements */
        .course-item {
            display: flex;
            flex-direction: column;
        }
    </style>





    <?php include '../includes/footer.php'; ?>
</body>

</html>