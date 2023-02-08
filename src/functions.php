<?php


function generateArtistHtml(array $artists): string {
    if (array_key_exists('name', $artists) 
    && array_key_exists('yearsLived', $artists) 
    && array_key_exists('image', $artists) 
    && array_key_exists('favouriteMedium', $artists)
    && array_key_exists('knownFor', $artists)
    && array_key_exists('placeOfBirth', $artists)) {
        return '<h2>' . $artists['name'] . '</h2>' . 
        '<p class="years">' . $artists['yearsLived'] . '</p>' .
        '<img class="image" src="images/' . $artists['image'] . ' "alt="an image of artwork by ' . $artists['name'] . '">' .
        '<p>Favourite Medium: ' . $artists['favouriteMedium'] . '</p>' . 
        '<p>Known For: ' . $artists['knownFor'] . '</p>' . 
        '<p>Place Of Birth: ' . $artists['placeOfBirth'] . '</p>';
    } else {
        throw new Exception('Missing or incorrect array keys entered'); 
    }
}

