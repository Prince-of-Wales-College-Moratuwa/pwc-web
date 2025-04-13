<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../database_connection.php'; 

    $page = 'events';
  
  ?>
  
<?php

$slug = $_GET['slug'];
$query = "SELECT * FROM pwc_db_events WHERE slug='$slug'";
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
  <meta name="description" content="<?php echo $row["about"]; ?>" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://princeofwales.edu.lk/events/<?php echo $row["id"]; ?>" />
  <meta property="og:title" content="<?php echo $row["title"]; ?>" />
  <meta property="og:description" content="<?php echo $row["about"]; ?>" />
  <meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-events/<?php echo $row["img"] ?>" />

  <!-- Twitter / WA / TG -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://princeofwales.edu.lk/events/<?php echo $row["id"]; ?>" />
  <meta property="twitter:title" content="<?php echo $row["title"]; ?>" />
  <meta property="twitter:description" content="<?php echo $row["about"]; ?>" />
  <meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-events/<?php echo $row["img"] ?>" />

  <?php include '../includes/header.php'; ?>

  <style>
  .countdown-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff0f3; /* soft maroon-ish bg */
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(128, 0, 0, 0.15); /* subtle maroon shadow */
    border: 1px solid #e0c4c4;
  }

  .countdown-item {
    text-align: center;
    flex: 1;
  }

  .countdown-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #800000; /* maroon */
    margin-bottom: 5px;
  }

  .countdown-label {
    font-size: 0.9rem;
    font-weight: 500;
    text-transform: uppercase;
    color: #6b0000; /* dark maroon */
    letter-spacing: 0.5px;
  }

  .separator {
    width: 1px;
    height: 50px;
    background-color: #d9a7a7; /* soft maroon line */
    margin: 0 15px;
  }

  @media (max-width: 576px) {
    .countdown-container {
      flex-direction: column;
    }
    .separator {
      display: none;
    }
    .countdown-item {
      margin-bottom: 10px;
    }
  }
</style>

</head>

<body>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <h1><?php echo $row["title"]; ?></h1>

      <br>

        <p class="mt-3"><i class="fa fa-calendar text-primary me-2"></i>Date: <b><?php echo $row["date"]; ?></b></p>
        <p><i class="fa fa-clock text-primary me-2"></i>Time: <b><?php echo $row["time"]; ?></b></p>
        <p><i class="fa fa-map-marker text-primary me-2"></i>Location: <b><?php echo $row["location"]; ?></b></p>

        <div class="row mt-4">
          <div class="col-md-12">
          <br>
            <p><i class="fa fa-user text-primary me-2"></i>Event Organizer: <b><?php echo $row["organizer_name"]; ?></b></p>
            <p><i class="fa fa-phone text-primary me-2"></i>Contact: <?php echo $row["organizer_phone"]; ?></p>
            <br>
            <h3>About this Event</h3>
            <p><?php echo $row["about"]; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="../../content/img/img-events/<?php echo $row["img"]; ?>" alt="<?php echo $row["title"]; ?>" class="img-fluid"
          style="object-fit: cover; border-radius: 8px; max-width: 100%; height: auto;">

        <!-- Countdown Timer -->
        <div id="countdown" class="countdown-container mt-3">
          <div class="countdown-item">
            <div class="countdown-number" id="days">00</div>
            <div class="countdown-label">Days</div>
          </div>
          <div class="separator"></div>
          <div class="countdown-item">
            <div class="countdown-number" id="hours">00</div>
            <div class="countdown-label">Hrs</div>
          </div>
          <div class="separator"></div>
          <div class="countdown-item">
            <div class="countdown-number" id="minutes">00</div>
            <div class="countdown-label">Mins</div>
          </div>
          <div class="separator"></div>
          <div class="countdown-item">
            <div class="countdown-number" id="seconds">00</div>
            <div class="countdown-label">Secs</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const eventTime = new Date("<?php echo $row["date"] . ' ' . $row["time"]; ?>").getTime(); // Event timestamp

      const daysElement = document.getElementById("days");
      const hoursElement = document.getElementById("hours");
      const minutesElement = document.getElementById("minutes");
      const secondsElement = document.getElementById("seconds");
      const countdownElement = document.getElementById("countdown");

      function updateCountdown() {
        const now = new Date().getTime();
        const timeLeft = eventTime - now;

        if (timeLeft > 0) {
          const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
          const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
          const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

          daysElement.textContent = days.toString().padStart(2, "0");
          hoursElement.textContent = hours.toString().padStart(2, "0");
          minutesElement.textContent = minutes.toString().padStart(2, "0");
          secondsElement.textContent = seconds.toString().padStart(2, "0");
        } else {
          // Hide the countdown timer after the event time has passed
          countdownElement.style.display = "none";
          clearInterval(interval); // Stop the interval
        }
      }

      const interval = setInterval(updateCountdown, 1000); // Update every second
      updateCountdown(); // Initial call
    });
  </script>

  <?php include '../includes/footer.php'; ?>
</body>

</html>