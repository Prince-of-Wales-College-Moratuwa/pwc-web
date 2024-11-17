<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="jYZeftnqpxLLjE_8cKEhxIWBAB0ZD5EGWEF2z-3maLU" />

    <?php 
include '../database_connection.php'; 

include 'includes/header.php';

    ?>

    <title>Site Map - Prince of Wales' College, Moratuwa</title>

    <style>
        /* Add spacing between sections */
        h2 {
            margin-top: 20px;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
    <div class="container mt-5">
        <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $_SERVER['HTTP_HOST']; ?></h6>

        <h1 class="mb-4">Site Map</h1>
        <h2>Main Links</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="/">Home</a></li>
            <li class="list-group-item"><a href="/blog/">Blog</a></li>
            <li class="list-group-item"><a href="/events/">Events</a></li>
            <li class="list-group-item"><a href="/publications/">Publications</a></li>
            <li class="list-group-item"><a href="/sports">Sports</a></li>
            <li class="list-group-item"><a href="/clubs">Clubs</a></li>
            <li class="list-group-item"><a href="/history">History</a></li>
            <li class="list-group-item"><a href="/about">About</a></li>
            <li class="list-group-item"><a href="/contact">Contact</a></li>
        </ul>

        <h2>Blog Categories</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="/blog/category/sports">Sports</a></li>
            <li class="list-group-item"><a href="/blog/category/aesthetic">Aesthetic</a>
            </li>
            <li class="list-group-item"><a href="/blog/category/education">Education</a>
            </li>
            <li class="list-group-item"><a href="/blog/category/academic">Academic</a></li>
            <li class="list-group-item"><a href="/blog/category/announcements">Announcements</a></li>
            <li class="list-group-item"><a href="/blog/category/exclusives">Exclusives</a>
            </li>
        </ul>

        <h2>Clubs</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="/clubs">Clubs</a></li>
            <li class="list-group-item"><a href="/cmbu">Cambrians' Media & Broadcasting Unit</a>
            <li class="list-group-item"><a href="/clubs/prefects-guild">Prefects' Guild</a>
            </li>
        </ul>

        <h2>Sports</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="/sports">Sports</a></li>
            <li class="list-group-item"><a href="/big-match">Big Match</a>
            </li>
        </ul>

        <h2>About</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="/principal-message">Principal's Message</a>
            </li>
            <li class="list-group-item"><a href="/about/school-administration">School Administration</a></li>
            <li class="list-group-item"><a href="/about/school-infrastructure">Locations & Infrastructure</a></li>
            <li class="list-group-item"><a href="/about/school-infrastructure/founders-statue">The Founders' Statue</a>
            </li>
            <li class="list-group-item"><a href="/about/school-infrastructure/the-shrine">The Shrine</a></li>
            <li class="list-group-item"><a href="/publications/projects/lassana-wales">ලස්සන Wales</a></li>
            <li class="list-group-item"><a href="/faq">Help / FAQ</a></li>
        </ul>

        <h2>Publications</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="/publications/golden-book/education-sector/">Golden Book -
                    Education Sector</a></li>
            <li class="list-group-item"><a href="/publications/golden-book/sports-sector/">Golden Book - Sports
                    Sector</a></li>
            <li class="list-group-item"><a href="/publications/music">Music On Demand</a>
            </li>
            <li class="list-group-item"><a href="/publications/golden-captures">Golden Captures</a></li>
            <li class="list-group-item"><a href="/publications/videos">Video On Demand</a></li>
        </ul>


        <h2>Legal</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="/privacy">Privacy Policy</a></li>
            <li class="list-group-item"><a href="/cookies">Cookies Policy</a></li>
            <li class="list-group-item"><a href="/terms">Terms & Conditions</a></li>
            <li class="list-group-item"><a href="/disclaimer">Disclaimer</a></li>
            <li class="list-group-item"><a href="/imprint">Imprint</a></li>

        </ul>


        <h2>Blog Posts</h2>
        <?php

            $query = "SELECT slug, title FROM pwc_db_news WHERE date <= NOW()";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();

            echo '<ul class="list-group">';
            if ($statement->rowCount() > 0) {
                foreach($result as $row) {
                    echo '<li class="list-group-item"><a href="/blog/' . $row["slug"] . '">' . $row["title"] . '</a></li>';
                }
            } else {
                echo '<li class="list-group-item">No results found</li>';
            }
            echo '</ul>';
            ?>

        <h2>Events</h2>
        <?php

$query = "SELECT slug, title FROM pwc_db_events";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

echo '<ul class="list-group">';
if ($statement->rowCount() > 0) {
    foreach($result as $row) {
        echo '<li class="list-group-item"><a href="/events/' . $row["slug"] . '">' . $row["title"] . '</a></li>';
    }
} else {
    echo '<li class="list-group-item">No results found</li>';
}
echo '</ul>';
?>

</body>

</html>

</div>

<?php include 'includes/footer.php'; ?>

</body>

</html>