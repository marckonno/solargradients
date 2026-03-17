<?php
date_default_timezone_set('Europe/Tallinn');

$totalImages = 16;

$hours = date('H');
$minutes = date('i');
$totalMinutes = ($hours * 60) + $minutes;

$minutesPerImage = 1440 / $totalImages;
$index = floor($totalMinutes / $minutesPerImage);

$imageNumber = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
$imagePath = __DIR__ . "/images/$imageNumber.jpg";

// DEBUG
if (!file_exists($imagePath)) {
    die("Image not found: " . $imagePath);
}

header('Content-Type: image/jpeg');
readfile($imagePath);
