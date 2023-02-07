<?php


function generateArtistHtml($artists) {
    foreach($artists as $artist){
    return '<h2>' . $artist['name'] . '</h2>' . 
    '<p>' . $artist['yearsLived'] . '</p>' .
    '<p>Favourite Medium: ' . $artist['favouriteMedium'] . '</p>' . 
    '<p>Known For: ' . $artist['knownFor'] . '</p>' . 
    '<p>Place Of Birth: ' . $artist['placeOfBirth'] . '</p>';
    }
}
