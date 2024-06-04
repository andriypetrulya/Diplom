<?php

use Google\Cloud\Vision\V1\ImageAnnotatorClient;

if($_POST['vision'] != '') {
    
require 'vendor/autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/active-axle-423801-n1-3ec2bc06f735.json');



function analyze_image_safety($imagePath)
{
    $imageAnnotator = new ImageAnnotatorClient();

    $imageData = file_get_contents($imagePath);
    $response = $imageAnnotator->safeSearchDetection($imageData);
    $safeSearch = $response->getSafeSearchAnnotation();

    $likelihoodName = ['UNKNOWN', 'VERY_UNLIKELY', 'UNLIKELY', 'POSSIBLE', 'LIKELY', 'VERY_LIKELY'];

    //echo "Safe search results:\n";
    //echo "Adult: " . $likelihoodName[$safeSearch->getAdult()] . "\n";
    //echo "Spoof: " . $likelihoodName[$safeSearch->getSpoof()] . "\n";
    //echo "Medical: " . $likelihoodName[$safeSearch->getMedical()] . "\n";
    //echo "Violence: " . $likelihoodName[$safeSearch->getViolence()] . "\n";
    //echo "Racy: " . $likelihoodName[$safeSearch->getRacy()] . "\n";

    $imageAnnotator->close();

    if ($safeSearch->getAdult() >= 3 ||  // POSSIBLE
        $safeSearch->getViolence() >= 3 ||  // POSSIBLE
        $safeSearch->getRacy() >= 3)  // POSSIBLE
    {
        return false;  // Изображение не подходит для детей до 18 лет
    }
    return true;  // Изображение подходит для детей до 18 лет
}

$imagePath = $_POST['vision'];

$isSafeForChildren = analyze_image_safety($imagePath);

if ($isSafeForChildren) {
    echo "1";
} else {
    echo "0";
}
} else {
    
}