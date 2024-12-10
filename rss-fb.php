<?php
// Include database connection
include 'database_connection.php';

// Fetch blog posts with date <= current date and time
$query = "SELECT title, slug, content, author, date, photo 
          FROM pwc_db_news 
          ORDER BY date DESC";

//

$statement = $connect->prepare($query);
$statement->execute();
$rows = $statement->fetchAll();

// Set content-type to XML
header("Content-Type: application/rss+xml; charset=UTF-8");

// Start RSS feed
echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>
<rss version="2.0">
  <channel>
    <title>Prince of Wales' College Moratuwa</title>
    <link>https://princeofwales.edu.lk/blog</link>
    <description>The latest updates and articles from Prince of Wales College Blog.</description>
    <language>en-us</language>

    <?php foreach ($rows as $row): ?>
    <item>
      <title><?php echo htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8'); ?></title>
      <link>https://princeofwales.edu.lk/blog/<?php echo htmlspecialchars($row["slug"], ENT_QUOTES, 'UTF-8'); ?></link>
      <description><?php echo htmlspecialchars($row["content"], ENT_QUOTES, 'UTF-8'); ?></description>
      <author><?php echo htmlspecialchars($row["author"], ENT_QUOTES, 'UTF-8'); ?></author>
      <pubDate><?php echo date(DATE_RSS, strtotime($row["date"])); ?></pubDate>
      <guid>https://princeofwales.edu.lk/blog/<?php echo htmlspecialchars($row["slug"], ENT_QUOTES, 'UTF-8'); ?></guid>

      <?php if (!empty($row["photo"])): ?>
        <enclosure 
          url="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" 
          type="image/jpeg" 
          length="<?php echo filesize("../content/img/img-blog/" . $row["photo"]); ?>" />
      <?php endif; ?>

    </item>
    <?php endforeach; ?>
  </channel>
</rss>
