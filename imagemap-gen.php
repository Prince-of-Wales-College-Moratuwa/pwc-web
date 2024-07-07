<?php
date_default_timezone_set('UTC'); // Set the default timezone

// Function to scan directory and subdirectories, returning array of image files
function scanDirectory($directory) {
    $images = array();
    $allowedExtensions = array('png', 'webp');

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($iterator as $file) {
        // Exclude the 'icons' folder within 'content'
        if ($file->isDir() && $file->getFilename() === 'icons' && strpos($file->getPathname(), $directory . DIRECTORY_SEPARATOR . 'icons') !== false) {
            $iterator->next();
        } elseif ($file->isFile()) {
            $extension = strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
            if (in_array($extension, $allowedExtensions)) {
                $images[] = $file->getPathname();
            }
        }
    }

    return $images;
}

// Function to generate XML from array of images
function generateSitemap($images, $baseUrl) {
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"></urlset>');

    foreach ($images as $image) {
        $relativePath = str_replace('\\', '/', str_replace(realpath(dirname(__FILE__)), '', realpath($image)));
        $url = $xml->addChild('url');
        $url->addChild('loc', htmlspecialchars($baseUrl));
        $url->addChild('lastmod', date('c'));
        $url->addChild('priority', '0.6');
        $img = $url->addChild('image:image', null, 'http://www.google.com/schemas/sitemap-image/1.1');
        $img->addChild('image:loc', htmlspecialchars($baseUrl . ltrim($relativePath, '/')), 'http://www.google.com/schemas/sitemap-image/1.1');
    }

    return $xml->asXML();
}

// Main function to execute the script
function generateImagesSitemap($directory, $baseUrl, $outputFile) {
    $images = scanDirectory($directory);
    $sitemapContent = generateSitemap($images, $baseUrl);

    if (file_put_contents($outputFile, $sitemapContent)) {
        echo "";
    } else {
        echo "There was an error writing the sitemap.";
    }
}

// Usage
$directory = 'content'; // Replace with your content directory
$baseUrl = 'https://princeofwales.edu.lk/'; // Replace with your base URL
$outputFile = 'images.xml'; // Output sitemap file name

generateImagesSitemap($directory, $baseUrl, $outputFile);
?>
