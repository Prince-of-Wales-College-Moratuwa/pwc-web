<?php

$currentYear = date("Y");

$baseYear = 1876;

$yearDifference = $currentYear - $baseYear;

$currentDate = date("m-d");

$startDate = "09-12";
$endDate = "09-16";

if ($currentDate >= $startDate && $currentDate <= $endDate) {
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Celebration</title>
    <style>
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100; 
        }
        .popup-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 500px; /* Increased width */
            position: relative; 
        }
        .popup-box h1 {
            color: #800000; /* Maroon color */
            margin: 0 0 10px;
        }
        .popup-box p {
            color: #555555;
            margin: 0 0 20px;
        }
        .popup-box button {
            background-color: #800000; /* Maroon color */
            border: none;
            padding: 10px 20px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        .popup-box button:hover {
            background-color: #a00000; /* Darker maroon on hover */
        }

    </style>
</head>
<body>
    <script>
        function closePopup() {
            document.getElementById("popup-overlay").style.display = "none";
        }
    </script>
    <div class="popup-overlay wow fadeInUp" id="popup-overlay">
    <div class="popup-box wow fadeInUp">
        <h4>
            <video autoplay loop muted onplay="this.playbackRate = 2;">
                <source src="content/icons/aniiversary-icon.webm" type="video/webm">
                Your browser does not support the video tag.
            </video>
        </h4>
        <h1>Celebrating <strong>' . $yearDifference . '</strong> Years of Excellence</h1>
        <p>We are celebrating this year, which is <strong>' . $yearDifference . ' years</strong> since 14th September 1876!</p>
        <button onclick="closePopup()">Close</button>
    </div>
</div>

</body>
</html>';
}
?>
