<?php
// Include database connection
include 'database_connection.php';

// Fetch blog posts with date <= current date and time
$query = "SELECT title, slug, content, author, date, photo 
          FROM pwc_db_news 
          WHERE date <= NOW()
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

      <description>
      <?php 
  $content = html_entity_decode($row["content"]);
  
  // Convert HTML tags to Markdown
  $content = preg_replace('/<strong>(.*?)<\/strong>/', '**$1**', $content);   // <strong> to ** for bold
  $content = preg_replace('/<em>(.*?)<\/em>/', '*$1*', $content);           // <em> to * for italics
  $content = preg_replace('/<i>(.*?)<\/i>/', '*$1*', $content);             // <i> to * for italics
  $content = preg_replace('/<b>(.*?)<\/b>/', '**$1**', $content);           // <b> to ** for bold
  $content = preg_replace('/<u>(.*?)<\/u>/', '<u>$1</u>', $content);         // <u> is rare, preserving as-is
  $content = preg_replace('/<a href="(.*?)">(.*?)<\/a>/', '[$2]($1)', $content); // <a> to [text](url) for links
  $content = preg_replace('/<p>(.*?)<\/p>/', "\n\n$1", $content);           // <p> to new lines
  $content = preg_replace('/<br\s*\/?>/', "\n", $content);                  // <br> to new lines
  
  // Output the content with newlines
  echo $content; 
?>

</description>



      <author><?php echo htmlspecialchars($row["author"], ENT_QUOTES, 'UTF-8'); ?></author>
      <pubDate><?php echo date(DATE_RSS, strtotime($row["date"])); ?></pubDate>
      <guid>https://princeofwales.edu.lk/blog/<?php echo htmlspecialchars($row["slug"], ENT_QUOTES, 'UTF-8'); ?></guid>

      <?php if (!empty($row["photo"])): ?>
        <enclosure 
          url="https://princeofwales.edu.lk/content/img/img-blog/<?php echo htmlspecialchars($row["photo"], ENT_QUOTES, 'UTF-8'); ?>" 
          type="image/webp"  />
      <?php endif; ?>

    </item>
    <?php endforeach; ?>
  </channel>
</rss>