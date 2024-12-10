<?php
// Facebook API credentials
$pageId = "113882365076383"; // Replace with your page ID
$accessToken = "EAA6yrfZCpcSEBO7xPg3dO86oaXqzfuW4nZB72iqvFQtv2TUr7xLZAmGzNKmfxNQBgUoy3DebFzwB2NoZBztZCk3nVYNwZCGZBZCoVtxVAD8vgZCr15ZCWYHCzuqoyRoZBe9nqnwRxxt9Aj3gtnVm1sRF3tBdfyZClqGVc8dUSOvQXiA1mQEpEGFV6tQD6McMCxtky6cTORzK2VnYADRWSHNlhjBT7dZBlVneZCBjTYAOgzZCdkZD"; // Replace with your Facebook page access token

// RSS feed URL
$rssFeedUrl = "https://princeofwales.edu.lk/rss";

// File to store the last processed item's GUID
$lastProcessedFile = "last_guid_fb.txt";

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

    // Format the Facebook post message
    $message = $title . "\n\n" . strip_tags($description) . "\n\n" . "Read more: $link";

    // Facebook post URL
    $postUrl = "https://graph.facebook.com/$pageId/feed";

    // Prepare data to post
    $postData = [
        'message' => $message,
        'link' => $link,
        'access_token' => $accessToken
    ];

    // Initialize cURL
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
    echo '<script>alert("RSS feed processed and post sent to Facebook.");</script>';
    break; // Process only the first valid item published today
}
?>
