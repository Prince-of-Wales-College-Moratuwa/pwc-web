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
      flex-direction: row !important; /* Always inline on mobile */
      gap: 0;
      padding: 10px;
    }
    .separator {
      display: block;
      height: 40px;
      margin: 0 5px;
    }
    .countdown-item {
      margin-bottom: 0;
    }
  }
</style>

</head>

<body>

  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 order-1 order-md-1">
        <h1><?php echo $row["title"]; ?></h1>
        <!-- Event image for mobile, shown after title -->
        <img src="../../content/img/img-events/<?php echo $row["img"]; ?>" alt="<?php echo $row["title"]; ?>" class="img-fluid d-block d-md-none my-3"
          style="object-fit: cover; border-radius: 8px; max-width: 100%; height: auto;">
        <!-- Countdown for mobile, shown after image -->
        <div id="countdown" class="countdown-container mt-3 d-flex d-md-none justify-content-center"></div>
        <!-- Event details -->
        <div class="row mt-4">
          <div class="col-12">
            <p class="mt-3"><i class="fa fa-calendar text-primary me-2"></i>Date: <b><?php echo $row["date"]; ?></b></p>
            <p><i class="fa fa-clock text-primary me-2"></i>Time: <b><?php echo $row["time"]; ?></b></p>
            <p><i class="fa fa-map-marker text-primary me-2"></i>Location: <b><?php echo $row["location"]; ?></b></p>
            <br>
            <p><i class="fa fa-user text-primary me-2"></i>Event Organizer: <b><?php echo $row["organizer_name"]; ?></b></p>
            <p><i class="fa fa-phone text-primary me-2"></i>Contact: <?php echo $row["organizer_phone"]; ?></p>
            <br>
            <h3>About this Event</h3>
            <p><?php echo $row["about"]; ?></p>
          </div>
        </div>
      </div>
      <!-- Desktop right column: image and countdown -->
      <div class="col-md-4 d-none d-md-block order-2">
        <img src="../../content/img/img-events/<?php echo $row["img"]; ?>" alt="<?php echo $row["title"]; ?>" class="img-fluid"
          style="object-fit: cover; border-radius: 8px; max-width: 100%; height: auto;">
        <div id="countdown-desktop" class="countdown-container mt-3"></div>
      </div>
    </div>
  </div>

  <style>
  .countdown-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff0f3;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(128, 0, 0, 0.15);
    border: 1px solid #e0c4c4;
    gap: 0;
  }
  .countdown-item {
    text-align: center;
    flex: 1;
  }
  .countdown-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #800000;
    margin-bottom: 5px;
  }
  .countdown-label {
    font-size: 0.9rem;
    font-weight: 500;
    text-transform: uppercase;
    color: #6b0000;
    letter-spacing: 0.5px;
  }
  .separator {
    width: 1px;
    height: 50px;
    background-color: #d9a7a7;
    margin: 0 15px;
  }
  @media (max-width: 576px) {
    .countdown-container {
      flex-direction: row !important; /* Always inline on mobile */
      gap: 0;
      padding: 10px;
    }
    .separator {
      display: block;
      height: 40px;
      margin: 0 5px;
    }
    .countdown-item {
      margin-bottom: 0;
    }
  }
  </style>

  <script>
    // Countdown HTML template
    function getCountdownHTML() {
      return `
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
      `;
    }

    document.addEventListener("DOMContentLoaded", () => {
      // Render countdown in both mobile and desktop containers
      const mobileCountdown = document.getElementById("countdown");
      const desktopCountdown = document.getElementById("countdown-desktop");
      if (mobileCountdown) mobileCountdown.innerHTML = getCountdownHTML();
      if (desktopCountdown) desktopCountdown.innerHTML = getCountdownHTML();

      // Use only one set of IDs for countdown numbers
      // Prefer mobile if visible, else desktop
      function getCountdownElements() {
        let root = window.innerWidth <= 768 ? mobileCountdown : desktopCountdown;
        if (!root || root.style.display === "none") root = desktopCountdown;
        return {
          days: root.querySelector("#days"),
          hours: root.querySelector("#hours"),
          minutes: root.querySelector("#minutes"),
          seconds: root.querySelector("#seconds"),
          container: root
        };
      }

      const eventTime = new Date("<?php echo $row["date"] . ' ' . $row["time"]; ?>").getTime();

      function updateCountdown() {
        const { days, hours, minutes, seconds, container } = getCountdownElements();
        const now = new Date().getTime();
        const timeLeft = eventTime - now;

        if (timeLeft > 0) {
          days.textContent = Math.floor(timeLeft / (1000 * 60 * 60 * 24)).toString().padStart(2, "0");
          hours.textContent = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, "0");
          minutes.textContent = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, "0");
          seconds.textContent = Math.floor((timeLeft % (1000 * 60)) / 1000).toString().padStart(2, "0");
        } else {
          container.style.display = "none";
          clearInterval(interval);
        }
      }

      const interval = setInterval(updateCountdown, 1000);
      updateCountdown();
    });
  </script>

  <?php include '../includes/footer.php'; ?>
</body>

</html>