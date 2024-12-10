<?php
// Facebook API credentials
$pageId = "113882365076383"; // Replace with your page ID
$accessToken = "EAA6yrfZCpcSEBO55o1nZChRs0x7kyuIwYMAZBfeTZCmgVNiWpLlyOjPZBBsIksaqoaGZAx9SC3mxPZCfytcvRqNIHB9dyMpdZAmauITeVURwBZAawJFCL23WtpXSrLZCQ7xgYl4cXa59www1dQjZBqE9LgWl342JnZBjvxGHacwuSmuaiMW5zT8fZAbJ8qNEeBZAiDFZBbVR5QewZBKbOuzcmGiKaK7P5RfVJvfrHSZCWWfDZCvisq"; // Replace with your Facebook page access token

// RSS feed URL
$rssFeedUrl = "https://princeofwales.edu.lk/rss-fb";

// File to store the last processed item's GUID
$lastProcessedFile = "last_guid_fb.txt";

// Set timezone to Sri Lanka Standard Time (UTC +5:30)
date_default_timezone_set('Asia/Colombo');

// Fetch the RSS feed
$rssContent = file_get_contents($rssFeedUrl);
if (!$rssContent) {
    echo '<script>alert("Unable to fetch RSS feed.");</script>';
    exit;
}

// Parse the RSS feed
$rss = simplexml_load_string($rssContent);
if (!$rss) {
    echo '<script>alert("Invalid RSS feed format.");</script>';
    exit;
}

// Read the last processed GUID
$lastProcessedGuid = file_exists($lastProcessedFile) ? file_get_contents($lastProcessedFile) : "";

// Get today's date in the RSS date format (e.g., "Mon, 09 Dec 2024")
$today = date("D, d M Y");

// Loop through RSS items
foreach ($rss->channel->item as $item) {
    $guid = (string)$item->guid;
    $title = (string)$item->title;
    $link = (string)$item->link;
    $description = (string)$item->description;
    $imageUrl = (string)$item->enclosure['url']; // Assuming RSS includes <enclosure> for images
    $pubDate = (string)$item->pubDate;

    // Check if the item's publication date matches today's date
    if (strpos($pubDate, $today) === false) {
        continue; // Skip items not published today
    }

    // If this item is already processed, skip it
    if ($guid === $lastProcessedGuid) {
        continue;
    }

    // Extract hashtags from the description using a regular expression
    preg_match_all('/#\w+/', $description, $hashtags);

    // Remove hashtags from the description
    $cleanDescription = preg_replace('/#\w+/', '', $description);

    // Format the Facebook post message
    $message = strip_tags($cleanDescription) . "\n\n" . "Read more | $link";

    // Add hashtags at the end of the message if any were found
    if (!empty($hashtags[0])) {
        $message .= "\n\n" . implode(" ", $hashtags[0]);
    }

    // Convert the publication date to Unix timestamp
    $pubTimestamp = strtotime($pubDate);

    // Adjust the publication date for the local time zone (+5:30)
    // We add 5 hours and 30 minutes to the timestamp to adjust to SLST
    $pubTimestampLocal = $pubTimestamp + (5 * 3600) + (30 * 60);

    // Facebook post URL (using /photos endpoint for images)
    $postUrl = "https://graph.facebook.com/$pageId/feed";

    // Prepare the data for the post
    $postData = [
        'message' => $message,
        'link' => $imageUrl, // Use the image URL from the RSS feed
        'access_token' => $accessToken
    ];

    // Check if the publication date is in the future
    if ($pubTimestampLocal > time()) {
        // Schedule the post
        $postData['scheduled_publish_time'] = $pubTimestampLocal;
        $postData['published'] = false; // Don't publish immediately
    } else {
        // Instant posting (this section can be modified to suit other use cases)
        $postData['published'] = true;
    }

    // Initialize cURL for posting to Facebook
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $postUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the POST request
    $response = curl_exec($ch);
    if ($response === false) {
        echo '<script>alert("Failed to send message to Facebook: ' . curl_error($ch) . '");</script>';
        exit;
    }

    // Close cURL
    curl_close($ch);

    // Save the current item's GUID as the last processed GUID
    file_put_contents($lastProcessedFile, $guid);
    echo '<script>alert("Post scheduled to Facebook Page: FrontLine Developers.");</script>';
    break; // Process only the first valid item published today
}
?>
