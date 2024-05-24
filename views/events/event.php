<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../database_connection.php'; 
    $page = 'events';
  
  ?>
  
      <!-- Primary Meta Tags -->
<meta name="title" content="<?php echo $row["title"]; ?>" />
<meta name="description" content="<?php echo $row["about"]; ?>" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://princeofwales.edu.lk/events/<?php echo $row["id"]; ?>" />
<meta property="og:title" content="<?php echo $row["title"]; ?>" />
<meta property="og:description" content="<?php echo $row["about"]; ?>" />
<meta property="og:image" content="https://princeofwales.edu.lk/content/img/img-events/<?php echo htmlspecialchars($row["img"], ENT_QUOTES, 'UTF-8'); ?>" />

<!-- Twitter / WA / TG -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://princeofwales.edu.lk/events/<?php echo $row["id"]; ?>" />
<meta property="twitter:title" content="<?php echo $row["title"]; ?>" />
<meta property="twitter:description" content="<?php echo $row["about"]; ?>" />
<meta property="twitter:image" content="https://princeofwales.edu.lk/content/img/img-events/<?php echo htmlspecialchars($row["img"], ENT_QUOTES, 'UTF-8'); ?>" />

<?php  
include '../includes/header.php'; ?>

<?php

$slug=$_GET['slug'];
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



</head>

<style>
  @media (min-width: 768px) {
    img {
      max-width: 50%;
    }
  }

  @media (min-width: 992px) {
    img {
      max-width: 30%;
    }
  }
</style>

</head>

<body>


  <!-- Event Detail Content -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h1><?php echo $row["title"]; ?></h1>
        <br>
        <p><i class="fa fa-calendar text-primary me-2"></i>Date: <b><?php echo $row["date"]; ?></b></p>
        <p><i class="fa fa-clock text-primary me-2"></i>Time: <b><?php echo $row["time"]; ?></b></p>
        <p><i class="fa fa-map-marker text-primary me-2"></i>Location: <b><?php echo $row["location"]; ?></b></p>

        <div class="row mt-4">
          <div class="col-md-12">
            <p><i class="fa fa-user text-primary me-2"></i>Event Organizer: <b><?php echo $row["organizer_name"]; ?></b>
            </p>
            <p><i class="fa fa-phone text-primary me-2"></i>Contact: <?php echo $row["organizer_phone"]; ?></p>
            <br>
            <h3>About this Event</h3>
            <p><?php echo $row["about"]; ?></p>

            <h3>Agenda and other Details</h3>
            <p><?php echo $row["other_details"]; ?></p>

          </div>

        </div>
      </div>
      <div class="col-md-4">
        <br><br>
        <img src="../../content/img/img-events/<?php echo $row["img"]; ?>" alt="<?php echo $row["img"]; ?>" class="img-fluid"
          style="object-fit: cover; border-radius: 8px; max-width: 100%; height: auto; width: auto;">

      </div>
    </div>



  </div>


  <?php include '../includes/footer.php'; ?>
</body>

</html>