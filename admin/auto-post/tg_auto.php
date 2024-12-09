<?php
// Telegram Bot API credentials
$botToken = "7764590275:AAGzNd2YcBCshcVjCLo7sAOoQQiqvD-nIQs";
$chatId = "-1002437489499"; // Use channel ID if sending to a Telegram channel

// RSS feed URL
$rssFeedUrl = "https://princeofwales.edu.lk/rss";

// File to store the last processed item's GUID
$lastProcessedFile = "last_guid.txt";

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
    $link = (string)$item->link; // Dynamic entity link from RSS
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

    // Extract hashtags from the description (e.g., #example)
    preg_match_all('/#\w+/', $description, $hashtags);
    $hashtagsText = implode(" ", $hashtags[0]);

    // Remove hashtags from the description to avoid repetition
    $descriptionWithoutHashtags = preg_replace('/#\w+/', '', $description);

    // Format the Telegram message (no hashtags in the description)
    $message = "*$title*\n\n" . 
               strip_tags($descriptionWithoutHashtags) . "\n\n" . 
               "Read More | $link\n\n" . 
               $hashtagsText;

    // Turn off link preview by adding `disable_web_page_preview`
    $sendMessageUrl = "https://api.telegram.org/bot$botToken/sendPhoto";

    // Send the message with an attached image
    $postData = [
        'chat_id' => $chatId,
        'photo' => $imageUrl, // URL of the image to attach
        'caption' => $message,
        'parse_mode' => 'Markdown',
        'disable_web_page_preview' => true,
    ];

    // Initialize cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $sendMessageUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute and check the response
    $response = curl_exec($ch);
    if ($response === false) {
        echo '<script>alert("Failed to send message to Telegram: ' . curl_error($ch) . '");</script>';
        exit;
    }

    // Close cURL
    curl_close($ch);

    // Save the current item's GUID as the last processed GUID
    file_put_contents($lastProcessedFile, $guid);
    echo '<script>alert("RSS feed processed and notifications sent.");</script>';
    break; // Process only the first valid item published today
}
?>
