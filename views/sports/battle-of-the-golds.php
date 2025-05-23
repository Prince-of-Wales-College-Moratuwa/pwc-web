<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Battle of The Golds</title>
        <?php
    $page = 'sports';
    include '../../database_connection.php'; 

?>

        <!-- Primary Meta Tags -->
        <meta name="title" content="Battle of The Golds | Prince of Wales' College" />
        <meta name="description"
            content="Experience the excitement of the Prince of Wales College Big Match (Battle of the Golds) – a legendary sporting showdown that defines tradition and rivalry. Join us for thrilling cricket action and unforgettable moments!" />
        <meta name="keywords"
            content="prince of wales college big match, prince of wales college vs st. Sebastian college, battle of the golds, cricket match, school cricket, sports rivalry, annual cricket match, PWC vs SSC, cricket tradition, school sports event" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://princeofwales.edu.lk/big-match" />
        <meta property="og:title" content="Battle of The Golds | Prince of Wales' College" />
        <meta property="og:description"
            content="Experience the excitement of the Prince of Wales College Big Match (Battle of the Golds) – a legendary sporting showdown that defines tradition and rivalry. Join us for thrilling cricket action and unforgettable moments!" />
        <meta property="og:image"
            content="https://princeofwales.edu.lk/content/img/img-sports/battle-of-the-golds-header-pwc.webp" />

        <!-- Twitter / WA / TG -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://princeofwales.edu.lk/big-match" />
        <meta property="twitter:title" content="Battle of The Golds | Prince of Wales' College" />
        <meta property="twitter:description"
            content="Experience the excitement of the Prince of Wales College Big Match (Battle of the Golds) – a legendary sporting showdown that defines tradition and rivalry. Join us for thrilling cricket action and unforgettable moments!" />
        <meta property="twitter:image"
            content="https://princeofwales.edu.lk/content/img/img-sports/battle-of-the-golds-header-pwc.webp" />

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Battle of The Golds | Prince of Wales' College">
        <meta itemprop="description" content="Experience the excitement of the Prince of Wales College Big Match (Battle of the Golds) – a legendary sporting showdown that defines tradition and rivalry. Join us for thrilling cricket action and unforgettable moments!">
        <meta itemprop="image" content="https://princeofwales.edu.lk/content/img/img-sports/battle-of-the-golds-header-pwc.webp">

        <!-- Additional Meta Tags for AI Chatbots -->
        <meta name="robots" content="index, follow">
        <meta name="author" content="Prince of Wales' College">
        <meta name="language" content="English">
        <meta name="revisit-after" content="7 days">

        <?php include '../includes/header.php'; ?>



        <style>
            .bog-page-header {
                background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/img-sports/battle-of-the-golds-header-pwc.webp);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .bog-page-header-inner {
                background: rgba(15, 23, 43, .7);
            }
        </style>

    </head>


<body>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 bog-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">BATTLE OF THE GOLDS</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-1">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <p class="mb-4">The Prince of Wales'–St. Sebastian's Cricket Encounter (The Battle of the Golds)<br>is
                an annual cricket match played between PWC and SSC
                since 1933.<br>It is known as The Battle of the Golds due to the colours of the two school's
                flags i.e. Purple, Gold and Maroon of PWC<br>and Green, White & Gold of St.
                Sebastian's College.</p>
        </div>
    </div>

    <br>

    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">HEAD-TO-HEAD</h6>
            <h1 class="mb-5">Test Matches</h1>
        </div>

        <div class="row g-4">
            <?php
    // Get total matches played
    $query = "SELECT * FROM bigmatch_2day_results WHERE result NOT LIKE '%not played%'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $twodayplayed = $statement->rowCount();

    // Get matches won by PWC
    $query = "SELECT * FROM bigmatch_2day_results WHERE LOWER(result) LIKE LOWER('%Won by PWC%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $twodaypwcWonCount = $statement->rowCount();

    // Get matches won by SSC
    $query = "SELECT * FROM bigmatch_2day_results WHERE LOWER(result) LIKE LOWER('%Won by SSC%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $twodaysscWonCount = $statement->rowCount();

    // Get matches with no result (drawn or NR)
    $query = "SELECT * FROM bigmatch_2day_results WHERE LOWER(result) NOT LIKE LOWER('%Won by PWC%') AND LOWER(result) NOT LIKE LOWER('%Won by SSC%') AND LOWER(result) NOT LIKE LOWER('%not played%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $twodaynoResultCount = $statement->rowCount();

    // Get the latest year from the database
    $query = "SELECT MAX(year) as latest_year FROM bigmatch_2day_results";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $latestYear = isset($result['latest_year']) ? $result['latest_year'] : date('Y'); // Default to current year if no data
    $nextYear = $latestYear + 1;

    // Calculate percentages
    $pwcPercent = ($twodaypwcWonCount / $twodayplayed) * 100;
    $sscPercent = ($twodaysscWonCount / $twodayplayed) * 100;
    $drawPercent = ($twodaynoResultCount / $twodayplayed) * 100;
    ?>

            <!-- Matches Played -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $twodayplayed; ?></h1>
                        <h5 class="mb-3">Matches Played</h5>
                    </div>
                </div>
            </div>

            <!-- Matches Won by PWC -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $twodaypwcWonCount; ?></h1>
                        <h5 class="mb-3">Matches Won By PWC</h5>
                    </div>
                </div>
            </div>

            <!-- Matches Won by SSC -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $twodaysscWonCount; ?></h1>
                        <h5 class="mb-3">Matches Won by SSC</h5>
                    </div>
                </div>
            </div>

            <!-- NR / Drawn -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $twodaynoResultCount; ?></h1>
                        <h5 class="mb-3">NR / Drawn</h5>
                    </div>
                </div>
            </div>

            <!-- Win Predictor Bar -->
            <div class="col-12 mt-5 wow fadeInUp">
                <h4 class="text-center mb-3">Win Predictor <?php echo $nextYear; ?></h4>
                <p class="text-center" style="font-size: 12px; color: gray;">This prediction is based on all past
                    results.</p>
                <div class="d-flex">
                    <!-- PWC Section -->
                    <div
                        style="width: <?php echo $pwcPercent; ?>%; background-color: maroon; height: 30px; border-radius: 5px 0 0 5px;">
                    </div>
                    <!-- Draw Section -->
                    <div style="width: <?php echo $drawPercent; ?>%; background-color: gray; height: 30px;">
                    </div>
                    <!-- SSC Section -->
                    <div
                        style="width: <?php echo $sscPercent; ?>%; background-color: green; height: 30px; border-radius: 0 5px 5px 0;">
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>PWC: <?php echo round($pwcPercent, 1); ?>%</span>
                    <span>Draw: <?php echo round($drawPercent, 1); ?>%</span>
                    <span>SSC: <?php echo round($sscPercent, 1); ?>%</span>
                </div>
            </div>
        </div>


        <br><br>
  


    </div>



    <?php
// Fetch the latest 5 years of results
$query = "SELECT * FROM bigmatch_2day_results ORDER BY year DESC LIMIT 5";
$statement = $connect->prepare($query);
$statement->execute();
$latestResults = $statement->fetchAll();

// Fetch the remaining results
$query = "SELECT * FROM bigmatch_2day_results ORDER BY year DESC LIMIT 18446744073709551615 OFFSET 5";
$statement = $connect->prepare($query);
$statement->execute();
$remainingResults = $statement->fetchAll();
?>

<!-- Display the latest 5 years of results -->
<div class="container mt-5">
    <table class="table table-bordered" id="2dayresults">
        <thead class="thead-light">
            <tr>
                <th rowspan='2'>Year</th>
                <th rowspan='1' colspan="2">PWC</th>
                <th rowspan='1' colspan="2">SSC</th>
                <th>Result</th>
            </tr>
        </thead>
        <tr>
            <th rowspan='1' colspan="1"></th>
            <th rowspan='1' colspan="1">1st Innings</th>
            <th rowspan='1' colspan="1">2nd Innings</th>
            <th rowspan='1' colspan="1">1st Innings</th>
            <th rowspan='1' colspan="1">2nd Innings</th>
        </tr>

        <?php foreach($latestResults as $row): ?>
        <tr>
            <td><?php echo $row["year"]; ?></td>
            <td><?php echo $row["pwc_1st"]; ?></td>
            <td><?php echo $row["pwc_2nd"]; ?></td>
            <td><?php echo $row["ssc_1st"]; ?></td>
            <td><?php echo $row["ssc_2nd"]; ?></td>
            <td><?php echo $row["result"]; ?></td>
        </tr>
        <?php endforeach; ?>

        <!-- Placeholder for remaining results -->
        <tbody id="remainingResults" style="display: none;">
            <?php foreach($remainingResults as $row): ?>
            <tr>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["pwc_1st"]; ?></td>
                <td><?php echo $row["pwc_2nd"]; ?></td>
                <td><?php echo $row["ssc_1st"]; ?></td>
                <td><?php echo $row["ssc_2nd"]; ?></td>
                <td><?php echo $row["result"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<center>
    <button class="btn wow fadeInUp" style="background-color: maroon; color: white; padding: 15px 30px; margin-top: 10px; font-size: 16px; border-radius: 5px;" id="showMore2dayresults">
        Show More 🡇
    </button>
</center>





    <br><br>

    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">HEAD-TO-HEAD</h6>
            <h1 class="mb-5">1-Day Limited Over Matches</h1>
        </div>

        <div class="row g-4">

            <?php
                $query = "SELECT * FROM bigmatch_1day_results WHERE result NOT LIKE '%not played%'";
                $statement = $connect->prepare($query);
                $statement->execute();
                $onedayplayed = $statement->rowCount();
            ?>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $onedayplayed ?></h1>
                        <h5 class="mb-3">Matches Played</h5>
                    </div>
                </div>
            </div>

            <?php
                $query = "SELECT * FROM bigmatch_1day_results WHERE LOWER(result) LIKE LOWER('%PWC Won%')";
                $statement = $connect->prepare($query);
                $statement->execute();
                $onedaypwcWonCount = $statement->rowCount();
            ?>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $onedaypwcWonCount ?></h1>
                        <h5 class="mb-3">Matches Won by PWC</h5>
                    </div>
                </div>
            </div>

            <?php
                $query = "SELECT * FROM bigmatch_1day_results WHERE LOWER(result) LIKE LOWER('%SSC Won%')";
                $statement = $connect->prepare($query);
                $statement->execute();
                $onedaysscWonCount = $statement->rowCount();
            ?>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $onedaysscWonCount ?></h1>
                        <h5 class="mb-3">Matches Won by SSC</h5>
                    </div>
                </div>
            </div>

            <?php
                $query = "SELECT * FROM bigmatch_1day_results WHERE LOWER(result) NOT LIKE LOWER('%PWC Won%') AND LOWER(result) NOT LIKE LOWER('%SSC Won%') AND LOWER(result) NOT LIKE LOWER('%not played')";
                $statement = $connect->prepare($query);
                $statement->execute();
                $onedaynoResultCount = $statement->rowCount();
            ?>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $onedaynoResultCount ?></h1>
                        <h5 class="mb-3">NR / Drawn</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- PHP Logic for Win Predictor -->
        <?php
    // Total Matches Played
    $query = "SELECT * FROM bigmatch_1day_results WHERE result NOT LIKE '%not played%'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $onedayplayed = $statement->rowCount();

    // Matches Won by PWC
    $query = "SELECT * FROM bigmatch_1day_results WHERE LOWER(result) LIKE LOWER('%PWC Won%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $onedaypwcWonCount = $statement->rowCount();

    // Matches Won by SSC
    $query = "SELECT * FROM bigmatch_1day_results WHERE LOWER(result) LIKE LOWER('%SSC Won%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $onedaysscWonCount = $statement->rowCount();

    // NR / Drawn Matches
    $query = "SELECT * FROM bigmatch_1day_results WHERE LOWER(result) NOT LIKE LOWER('%PWC Won%') AND LOWER(result) NOT LIKE LOWER('%SSC Won%') AND LOWER(result) NOT LIKE LOWER('%not played%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $onedaynoResultCount = $statement->rowCount();

        // Get the latest year from the database
        $query = "SELECT MAX(year) as latest_year FROM bigmatch_1day_results";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $latestYear = isset($result['latest_year']) ? $result['latest_year'] : date('Y'); // Default to current year if no data
        $nextYear = $latestYear + 1;

    // Calculate Percentages
    $pwcPercent = ($onedayplayed > 0) ? ($onedaypwcWonCount / $onedayplayed) * 100 : 0;
    $sscPercent = ($onedayplayed > 0) ? ($onedaysscWonCount / $onedayplayed) * 100 : 0;
    $drawPercent = ($onedayplayed > 0) ? ($onedaynoResultCount / $onedayplayed) * 100 : 0;
?>

        <!-- Win Predictor Bar -->
        <div class="col-12 mt-5 wow fadeInUp">
            <h4 class="text-center mb-3">Win Predictor <?php echo $nextYear; ?></h4>
            <p class="text-center" style="font-size: 12px; color: gray;">This prediction is based on all past results.
            </p>
            <div class="d-flex">
                <!-- PWC Section -->
                <div
                    style="width: <?php echo $pwcPercent; ?>%; background-color: maroon; height: 30px; border-radius: 5px 0 0 5px;">
                </div>
                <!-- Draw Section -->
                <div style="width: <?php echo $drawPercent; ?>%; background-color: gray; height: 30px;">
                </div>
                <!-- SSC Section -->
                <div
                    style="width: <?php echo $sscPercent; ?>%; background-color: green; height: 30px; border-radius: 0 5px 5px 0;">
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <span>PWC: <?php echo round($pwcPercent, 1); ?>%</span>
                <span>Draw/NR: <?php echo round($drawPercent, 1); ?>%</span>
                <span>SSC: <?php echo round($sscPercent, 1); ?>%</span>
            </div>
        </div>

        <br><br>


    </div>

    <?php
// Fetch the latest 5 years of 1-day results
$query = "SELECT * FROM bigmatch_1day_results ORDER BY year DESC LIMIT 5";
$statement = $connect->prepare($query);
$statement->execute();
$latest1DayResults = $statement->fetchAll();

// Fetch the remaining 1-day results
$query = "SELECT * FROM bigmatch_1day_results ORDER BY year DESC LIMIT 18446744073709551615 OFFSET 5";
$statement = $connect->prepare($query);
$statement->execute();
$remaining1DayResults = $statement->fetchAll();
?>

<!-- Display the latest 5 years of 1-day results -->
<div class="container mt-5">
    <table class="table table-bordered" id="1dayresults">
        <thead class="thead-light">
            <tr>
                <td>Year</td>
                <td>PWC</td>
                <td>SSC</td>
                <td>Result</td>
            </tr>
        </thead>

        <?php foreach($latest1DayResults as $row): ?>
        <tr>
            <td><?php echo $row["year"]; ?></td>
            <td><?php echo $row["pwc"]; ?></td>
            <td><?php echo $row["ssc"]; ?></td>
            <td><?php echo $row["result"]; ?></td>
        </tr>
        <?php endforeach; ?>

        <!-- Placeholder for remaining 1-day results -->
        <tbody id="remaining1DayResults" style="display: none;">
            <?php foreach($remaining1DayResults as $row): ?>
            <tr>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["pwc"]; ?></td>
                <td><?php echo $row["ssc"]; ?></td>
                <td><?php echo $row["result"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<center>
    <button class="btn wow fadeInUp" style="background-color: maroon; color: white; padding: 15px 30px; margin-top: 10px; font-size: 16px; border-radius: 5px;" id="showMore1dayresults">
        Show More 🡇
    </button>
</center>





    <br><br>

    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">HEAD-TO-HEAD</h6>
            <h1 class="mb-5">T20 Matches</h1>
        </div>


        <?php
    // Total T20 Matches Played
    $query = "SELECT * FROM bigmatch_t20_results WHERE LOWER(result) NOT LIKE LOWER('%not played%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $t20played = $statement->rowCount();

    // Matches Won by PWC
    $query = "SELECT * FROM bigmatch_t20_results WHERE LOWER(result) LIKE LOWER('%PWC Won%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $pwcWonCount = $statement->rowCount();

    // Matches Won by SSC
    $query = "SELECT * FROM bigmatch_t20_results WHERE LOWER(result) LIKE LOWER('%SSC Won%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $sscWonCount = $statement->rowCount();

    // No Results (Draw/NR)
    $query = "SELECT * FROM bigmatch_t20_results WHERE LOWER(result) NOT LIKE LOWER('%PWC Won%') AND LOWER(result) NOT LIKE LOWER('%SSC Won%') AND LOWER(result) NOT LIKE LOWER('%not played%')";
    $statement = $connect->prepare($query);
    $statement->execute();
    $noResultCount = $statement->rowCount();

    // Calculate Percentages
    $pwcPercent = ($t20played > 0) ? ($pwcWonCount / $t20played) * 100 : 0;
    $sscPercent = ($t20played > 0) ? ($sscWonCount / $t20played) * 100 : 0;
    $drawPercent = ($t20played > 0) ? ($noResultCount / $t20played) * 100 : 0;

          // Get the latest year from the database
          $query = "SELECT MAX(year) as latest_year FROM bigmatch_t20_results";
          $statement = $connect->prepare($query);
          $statement->execute();
          $result = $statement->fetch(PDO::FETCH_ASSOC);
          $latestYear = isset($result['latest_year']) ? $result['latest_year'] : date('Y'); // Default to current year if no data
          $nextYear = $latestYear + 1;
?>

        <div class="row g-4">
            <!-- Matches Played -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $t20played; ?></h1>
                        <h5 class="mb-3">Matches Played</h5>
                    </div>
                </div>
            </div>

            <!-- Matches Won by PWC -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $pwcWonCount; ?></h1>
                        <h5 class="mb-3">Matches Won by PWC</h5>
                    </div>
                </div>
            </div>

            <!-- Matches Won by SSC -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $sscWonCount; ?></h1>
                        <h5 class="mb-3">Matches Won by SSC</h5>
                    </div>
                </div>
            </div>

            <!-- No Results -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h1 class="mb-3" style="color: maroon;"><?php echo $noResultCount; ?></h1>
                        <h5 class="mb-3">No Results</h5>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-12 mt-5 wow fadeInUp">
            <h4 class="text-center mb-3">Win Predictor <?php echo $nextYear; ?></h4>
            <p class="text-center" style="font-size: 12px; color: gray;">This prediction is based on all past results.
            </p>
            <div class="d-flex">
                <!-- PWC Section -->
                <div
                    style="width: <?php echo $pwcPercent; ?>%; background-color: maroon; height: 30px; border-radius: 5px 0 0 5px;">
                </div>
                <!-- Draw Section -->
                <div style="width: <?php echo $drawPercent; ?>%; background-color: gray; height: 30px;">
                </div>
                <!-- SSC Section -->
                <div
                    style="width: <?php echo $sscPercent; ?>%; background-color: green; height: 30px; border-radius: 0 5px 5px 0;">
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <span>PWC: <?php echo round($pwcPercent, 1); ?>%</span>
                <span>NR: <?php echo round($drawPercent, 1); ?>%</span>
                <span>SSC: <?php echo round($sscPercent, 1); ?>%</span>
            </div>
        </div>
        <br><br>

    </div>

    <?php
// Fetch the latest 5 years of T20 results
$query = "SELECT * FROM bigmatch_t20_results ORDER BY year DESC LIMIT 5";
$statement = $connect->prepare($query);
$statement->execute();
$latestT20Results = $statement->fetchAll();

// Fetch the remaining T20 results
$query = "SELECT * FROM bigmatch_t20_results ORDER BY year DESC LIMIT 18446744073709551615 OFFSET 5";
$statement = $connect->prepare($query);
$statement->execute();
$remainingT20Results = $statement->fetchAll();
?>

<!-- Display the latest 5 years of T20 results -->
<div class="container mt-5">
    <table class="table table-bordered" id="t20results">
        <thead class="thead-light">
            <tr>
                <th rowspan='2'>Year</th>
                <th>PWC</th>
                <th>SSC</th>
                <th>Result</th>
            </tr>
        </thead>

        <?php foreach($latestT20Results as $row): ?>
        <tr>
            <td><?php echo $row["year"]; ?></td>
            <td><?php echo $row["pwc"]; ?></td>
            <td><?php echo $row["ssc"]; ?></td>
            <td><?php echo $row["result"]; ?></td>
        </tr>
        <?php endforeach; ?>

        <!-- Placeholder for remaining T20 results -->
        <tbody id="remainingT20Results" style="display: none;">
            <?php foreach($remainingT20Results as $row): ?>
            <tr>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["pwc"]; ?></td>
                <td><?php echo $row["ssc"]; ?></td>
                <td><?php echo $row["result"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<center>
    <button class="btn wow fadeInUp" style="background-color: maroon; color: white; padding: 15px 30px; margin-top: 10px; font-size: 16px; border-radius: 5px;" id="showMoreT20results">
        Show More 🡇
    </button>
</center>





    <br><br>

    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Cambrians'</h6>
            <h1 class="mb-5">RECORDS</h1>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                <h1 class="mb-4">2-Day Matches</h1>
                <p class="mb-4">In an exhilarating school cricket match, the Cambrian team etched their names into the
                    records with astounding achievements. Displaying remarkable prowess, they achieved the highest team
                    total of the season, amassing an impressive 280 runs. The team's star batsman shattered previous
                    records, notching up a stunning century in just 60 balls, leaving an indelible mark on the school's
                    cricket history.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Highest Score: 179 (not out)
                            by Nilantha Bopage in 1991
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Best Bowling: 7 for 33 by
                            Suranga Wijenayake in 1995</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Highest Total: 415/9 in 1958
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lowest Total: 67 in 1984</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Highest Partnership: 247 by
                            WG Fernando and Sunil de Silva in 1960
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-start text-primary pe-3"></h6>
                <h1 class="mb-4">1-Day Matches</h1>
                <p class="mb-4">In a remarkable display of cricket prowess, the Cambrians of School 1 secured an
                    awe-inspiring victory in a day-long 50-over match. Their stellar performance left an indelible mark
                    in the annals of school sports history. With exceptional batting, bowling, and fielding skills, the
                    Cambrians clinched victory, etching their names as champions in a thrilling encounter.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Highest Total: 336/7 in 2023
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lowest Total: 62 in 1982</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Highest Partnership: 197 Runs
                            Tharindu Amarasinghe and Rivith Jayasuriya in 2023</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-xxl py-5" id="past-captains">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">past</h6>
                <h1 class="mb-5">CAPTAINS</h1>
            </div>

            <div class="row g-4">

                <?php

                    $query = "SELECT * FROM past_cricket_captains ORDER BY id DESC";

                    $statement = $connect->prepare($query);

                    $statement->execute();

                    if($statement->rowCount() > 0)
                    {
                        foreach($statement->fetchAll() as $row)
                        { 
                            
                ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">

                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $row["name"]; ?></h5>
                            <small><?php echo $row["year"]; ?></small>
                        </div>
                    </div>
                </div>


                <?php 
                        }
                    }	
                ?>


            </div>

        </div>
    </div>


    <br><br>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var showButton = document.getElementById("show2dayresults");
            var myTable = document.getElementById("2dayresults");

            showButton.addEventListener("click", function () {
                if (myTable.style.display === "none") {
                    myTable.style.display = "table";
                } else {
                    myTable.style.display = "none";
                }
            });
        });


        document.addEventListener("DOMContentLoaded", function () {
            var showButton = document.getElementById("show1dayresults");
            var myTable = document.getElementById("1dayresults");

            showButton.addEventListener("click", function () {
                if (myTable.style.display === "none") {
                    myTable.style.display = "table";
                } else {
                    myTable.style.display = "none";
                }
            });
        });


        document.addEventListener("DOMContentLoaded", function () {
            var showButton = document.getElementById("showt20results");
            var myTable = document.getElementById("t20results");

            showButton.addEventListener("click", function () {
                if (myTable.style.display === "none") {
                    myTable.style.display = "table";
                } else {
                    myTable.style.display = "none";
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var showMoreButton = document.getElementById("showMore2dayresults");
            var remainingResults = document.getElementById("remainingResults");

            showMoreButton.addEventListener("click", function () {
                remainingResults.style.display = "table-row-group";
                showMoreButton.style.display = "none";
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var showMoreButton1Day = document.getElementById("showMore1dayresults");
            var remaining1DayResults = document.getElementById("remaining1DayResults");

            showMoreButton1Day.addEventListener("click", function () {
                remaining1DayResults.style.display = "table-row-group";
                showMoreButton1Day.style.display = "none";
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var showMoreButtonT20 = document.getElementById("showMoreT20results");
            var remainingT20Results = document.getElementById("remainingT20Results");

            showMoreButtonT20.addEventListener("click", function () {
                remainingT20Results.style.display = "table-row-group";
                showMoreButtonT20.style.display = "none";
            });
        });
    </script>

    <?php include '../includes/footer.php'; ?>


</body>

</html>