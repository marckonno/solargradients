<?php
// Set timezone (important for accuracy)
date_default_timezone_set('Europe/Tallinn');

// Total images
$totalImages = 16;

// Get current minutes since midnight
$hours = date('H');
$minutes = date('i');
$totalMinutes = ($hours * 60) + $minutes;

// Each image duration in minutes
$minutesPerImage = 1440 / $totalImages;

// Calculate index (0–15)
$index = floor($totalMinutes / $minutesPerImage);

// Convert to 1–16 and format filename
$imageNumber = str_pad($index + 1, 2, '0', STR_PAD_LEFT);

// Image path
$imagePath = "images/$imageNumber.jpg";

// Output image
header('Content-Type: image/jpeg');
readfile($imagePath);
exit;
?>