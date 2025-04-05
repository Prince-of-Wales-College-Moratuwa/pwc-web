<?php
// Include database connection file
include 'database_connection.php';

// Define the file path where the ICS file will be saved
$icsFilePath = 'pwc-calendar.ics';  // Save to 'events' folder

// Open the file for writing. If the file exists, it will be overwritten
$file = fopen($icsFilePath, 'w'); // 'w' mode creates a new file or overwrites if it exists

// Check if the file was successfully opened
if (!$file) {
    die('Unable to open or create the file for writing');
}

// Write the ICS calendar header
fwrite($file, "BEGIN:VCALENDAR\r\n");
fwrite($file, "VERSION:2.0\r\n");
fwrite($file, "CALSCALE:GREGORIAN\r\n");
fwrite($file, "METHOD:PUBLISH\r\n");
fwrite($file, "PRODID:-//Prince of Wales College//Event Calendar//EN\r\n");

// Fetch ALL future events from the database
$query = "SELECT * FROM pwc_db_events ORDER BY date ASC";
$statement = $connect->prepare($query);
$statement->execute();
$events = $statement->fetchAll();

foreach ($events as $row) {
    // Convert the start date and time to UTC
    $startDateTime = new DateTime($row["date"] . ' ' . $row["time"], new DateTimeZone('Asia/Colombo'));
    $startDateTime->setTimezone(new DateTimeZone('UTC'));
    $start = $startDateTime->format('Ymd\THis\Z');

    // Default to 2 hours after the start time for event end time
    $endDateTime = clone $startDateTime;
    $endDateTime->modify('+2 hours'); // Adjust the end time as needed
    $end = $endDateTime->format('Ymd\THis\Z');

    // Write each event in ICS format
    fwrite($file, "BEGIN:VEVENT\r\n");
    fwrite($file, "UID:" . md5($row["id"] . $row["title"]) . "@princeofwales.edu.lk\r\n");
    fwrite($file, "SUMMARY:" . addslashes($row["title"]) . "\r\n");
    fwrite($file, "DESCRIPTION:" . addslashes($row["about"]) . "\r\n");
    fwrite($file, "DTSTART:$start\r\n");
    fwrite($file, "DTEND:$end\r\n");
    fwrite($file, "LOCATION:" . addslashes($row["location"]) . "\r\n");
    fwrite($file, "URL:https://princeofwales.edu.lk/events/" . $row["slug"] . "\r\n");
    fwrite($file, "END:VEVENT\r\n");
}

// Write the ICS calendar footer
fwrite($file, "END:VCALENDAR\r\n");

// Close the file after writing
fclose($file);

// Output success message
// echo "ICS file has been successfully generated and saved as 'pwc-calendar.ics' in the 'events' folder.";
?>
