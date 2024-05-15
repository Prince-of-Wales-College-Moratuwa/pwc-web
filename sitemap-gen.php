<?php
// Include the database connection file
include 'database_connection.php';

// Array of URLs
$urls = array(
    "https://princeofwales.edu.lk/",
    "https://princeofwales.edu.lk/blog/",
    "https://princeofwales.edu.lk/events/",
    "https://princeofwales.edu.lk/publications/",
    "https://princeofwales.edu.lk/sports",
    "https://princeofwales.edu.lk/clubs",
    "https://princeofwales.edu.lk/history",
    "https://princeofwales.edu.lk/about",
    "https://princeofwales.edu.lk/contact",
    "https://princeofwales.edu.lk/principal-message",
    "https://princeofwales.edu.lk/about/school-administration",
    "https://princeofwales.edu.lk/big-match",
    "https://princeofwales.edu.lk/privacy",
    "https://princeofwales.edu.lk/cookies",
    "https://princeofwales.edu.lk/team",
    "https://princeofwales.edu.lk/cmbu/",
    "https://princeofwales.edu.lk/blog/category/sports",
    "https://princeofwales.edu.lk/blog/category/aesthetic",
    "https://princeofwales.edu.lk/blog/category/education",
    "https://princeofwales.edu.lk/blog/category/academic",
    "https://princeofwales.edu.lk/blog/category/announcements",
    "https://princeofwales.edu.lk/blog/category/exclusives",
    "https://princeofwales.edu.lk/publications/golden-book/education-sector/",
    "https://princeofwales.edu.lk/publications/golden-book/sports-sector/",
    "https://princeofwales.edu.lk/publications/golden-captures/",
    "https://princeofwales.edu.lk/publications/music/",
    "https://princeofwales.edu.lk/about/prefects-guild",
    "https://princeofwales.edu.lk/history/former-principals",
    "https://princeofwales.edu.lk/about/lassana-wales",
    "https://princeofwales.edu.lk/about/school-infrastructure",
    "https://princeofwales.edu.lk/forms/apply-al/",
    "https://princeofwales.edu.lk/content/docs/exiting-plan-pwc.pdf",
    "https://princeofwales.edu.lk/about/school-infrastructure/founders-statue",
    "https://princeofwales.edu.lk/about/school-infrastructure/the-shrine",
    "https://princeofwales.edu.lk/faq",
);

// Fetch slugs from pwc_db_news
$sql_news = "SELECT slug FROM pwc_db_news";
$result_news = $connect->query($sql_news);

// Fetch slugs from pwc_db_events
$sql_events = "SELECT slug FROM pwc_db_events";
$result_events = $connect->query($sql_events);

// Add slugs from pwc_db_news to $urls array
if ($result_news->rowCount() > 0) {
    while ($row = $result_news->fetch(PDO::FETCH_ASSOC)) {
        $urls[] = "https://princeofwales.edu.lk/blog/" . $row['slug'];
    }
}

// Add slugs from pwc_db_events to $urls array
if ($result_events->rowCount() > 0) {
    while ($row = $result_events->fetch(PDO::FETCH_ASSOC)) {
        $urls[] = "https://princeofwales.edu.lk/events/" . $row['slug'];
    }
}

// Start XML file
$xml = new XMLWriter();
$xml->openURI("sitemap.xml");
$xml->startDocument();
$xml->setIndent(true);

// Start urlset element
$xml->startElement('urlset');
$xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

// Loop through URLs and add them to the XML
foreach ($urls as $url) {
    $xml->startElement('url');
    $xml->writeElement('loc', $url);
    $xml->writeElement('lastmod', date('Y-m-d'));
    $xml->writeElement('priority', '0.80');
    $xml->endElement();
}

// End urlset element
$xml->endElement();

// End XML document
$xml->endDocument();

?>
