<?php
// Instagram API credentials
$instagramUserId = "17841470743116279"; // Replace with your Instagram user ID
$accessToken = "IGQWRONkV3QjhEbGR2aG1ld182S2Rncmk2X1VMNE45a1ZAaM2ZA6eDNicUNhSHg4Um1MOFF2dlBVMngtRDJGUktWRnVYU3U3RUtUNlJnN1ZAhLUVreTdTSXZA5czhTcWs3RTN0RGhfWXFDMkxKemdCSlRBY05ZARE83WGcZD"; // Replace with your Instagram access token

// RSS feed URL
$rssFeedUrl = "https://princeofwales.edu.lk/rss";

// File to store the last processed item's GUID
$lastProcessedFile = "last_guid_ig.txt";

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
// Function to extract hashtags from a string
function extractHashtags($text) {
    preg_match_all('/#\w+/u', $text, $matches);
    return implode(' ', $matches[0]); // Return hashtags as a string
}

// Function to remove hashtags from the text
function removeHashtags($text) {
    return preg_replace('/#\w+/u', '', $text); // Remove all hashtags
}

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

    // Extract hashtags and clean the description
    $hashtags = extractHashtags($description);
    $cleanDescription = removeHashtags($description);

    // Format the Instagram caption
    $caption = $title . "\n\n" . strip_tags($cleanDescription) . "\n\n" . "Read more: $link\n\n" . $hashtags;

    // Step 1: Upload the media to Instagram
    $uploadUrl = "https://graph.facebook.com/v13.0/$instagramUserId/media";
    $uploadData = [
        'image_url' => $imageUrl,
        'caption' => $caption,
        'access_token' => $accessToken
    ];

    // Initialize cURL for media upload
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uploadUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($uploadData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $uploadResponse = curl_exec($ch);
    if ($uploadResponse === false) {
        echo '<script>alert("Failed to upload media to Instagram: ' . curl_error($ch) . '");</script>';
        exit;
    }

    $response_data = json_decode($uploadResponse, true);
    $mediaId = $response_data['id'];
    
    // Close cURL
    curl_close($ch);

    // Step 2: Publish the uploaded media
    $publishUrl = "https://graph.facebook.com/v13.0/$instagramUserId/media_publish";
    $publishData = [
        'creation_id' => $mediaId,
        'access_token' => $accessToken
    ];

    // Initialize cURL for publishing
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $publishUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($publishData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $publishResponse = curl_exec($ch);
    if ($publishResponse === false) {
        echo '<script>alert("Failed to publish media on Instagram: ' . curl_error($ch) . '");</script>';
        exit;
    }

    // Close cURL
    curl_close($ch);

    // Save the current item's GUID as the last processed GUID
    file_put_contents($lastProcessedFile, $guid);
    echo '<script>alert("RSS feed processed and post sent to Instagram.");</script>';
    break; // Process only the first valid item published today
}
