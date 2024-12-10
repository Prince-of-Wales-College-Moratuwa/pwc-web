<?php
// Facebook API credentials
$pageId = "113882365076383"; // Replace with your page ID
$accessToken = ""; // Replace with your Facebook page access token

// RSS feed URL
$rssFeedUrl = "https://princeofwales.edu.lk/rss";

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

// Get Instagram Business Account ID linked to the Facebook Page
$instagramAccountResponse = file_get_contents("https://graph.facebook.com/v17.0/$pageId?fields=instagram_business_account&access_token=$accessToken");
$instagramAccountData = json_decode($instagramAccountResponse, true);
$instagramAccountId = $instagramAccountData['instagram_business_account']['id'] ?? null;

if (!$instagramAccountId) {
    echo '<script>alert("Failed to fetch Instagram Business Account ID.");</script>';
    exit;
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

    // Facebook post URL (using /photos endpoint for images)
    $postUrl = "https://graph.facebook.com/$pageId/photos";

    // Prepare the data for the Facebook post
    $postData = [
        'message' => $message,
        'url' => $imageUrl,
        'access_token' => $accessToken
    ];

    // Post to Facebook
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $postUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $fbResponse = curl_exec($ch);
    curl_close($ch);

    // Check Facebook post response
    if ($fbResponse) {
        $fbData = json_decode($fbResponse, true);
        if (isset($fbData['id'])) {
            echo '<script>alert("Post sent to Facebook successfully.");</script>';
        } else {
            echo '<script>alert("Failed to post to Facebook: ' . $fbResponse . '");</script>';
        }
    }

    // Prepare the data for Instagram
    $igPostData = [
        'image_url' => $imageUrl,
        'caption' => $message,
        'access_token' => $accessToken
    ];

    // Post to Instagram
    $igMediaUrl = "https://graph.facebook.com/v17.0/$instagramAccountId/media";
    $igPublishUrl = "https://graph.facebook.com/v17.0/$instagramAccountId/media_publish";

    // Step 1: Create Instagram media object
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $igMediaUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($igPostData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $igResponse = json_decode(curl_exec($ch), true);
    curl_close($ch);

    // Check Instagram media creation response
    if (isset($igResponse['id'])) {
        // Step 2: Publish the Instagram media
        $publishData = [
            'creation_id' => $igResponse['id'],
            'access_token' => $accessToken
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $igPublishUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($publishData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $igPublishResponse = curl_exec($ch);
        curl_close($ch);

        // Check Instagram publish response
        if ($igPublishResponse) {
            $igPublishData = json_decode($igPublishResponse, true);
            if (isset($igPublishData['id'])) {
                echo '<script>alert("Post sent to Instagram successfully.");</script>';
            } else {
                echo '<script>alert("Failed to publish Instagram post: ' . $igPublishResponse . '");</script>';
            }
        }
    } else {
        echo '<script>alert("Failed to create Instagram media: ' . json_encode($igResponse) . '");</script>';
    }

    // Save the current item's GUID as the last processed GUID
    file_put_contents($lastProcessedFile, $guid);
    break; // Process only the first valid item published today
}
?>
