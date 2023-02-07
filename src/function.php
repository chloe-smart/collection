<?php


function generateArtistHtml($artists) {
    $artistsOutput ="";
    foreach($artists as $artist){
    $artistsOutput .='<h2>' . $artist['name'] . '</h2>' . 
    '<p>' . $artist['yearsLived'] . '</p>' .
    '<img src=' . $artist['image'] . '>' .
    '<p>Favourite Medium: ' . $artist['favouriteMedium'] . '</p>' . 
    '<p>Known For: ' . $artist['knownFor'] . '</p>' . 
    '<p>Place Of Birth: ' . $artist['placeOfBirth'] . '</p>';
    }
    return $artistsOutput;
}
