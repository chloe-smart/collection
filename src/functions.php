<?php


function generateArtistHtml(array $artists): string {
    if (array_key_exists('name', $artists) 
    && array_key_exists('yearsLived', $artists) 
    && array_key_exists('image', $artists) 
    && array_key_exists('favouriteMedium', $artists)
    && array_key_exists('knownFor', $artists)
    && array_key_exists('placeOfBirth', $artists)) {
        return '<h2 tabindex=0 >' . $artists['name'] . '</h2>' . 
        '<p tabindex=0 class="years">' . $artists['yearsLived'] . '</p>' .
        '<img tabindex=0 src="images/' . $artists['image'] . ' "alt="an image of artwork by ' . $artists['name'] . '">' .
        '<h3 tabindex=0 >Favourite Medium: ' . $artists['favouriteMedium'] . '</h3>' . 
        '<h3 tabindex=0 >Known For: ' . $artists['knownFor'] . '</h3>' . 
        '<h3 tabindex=0 >Place Of Birth: ' . $artists['placeOfBirth'] . '</h3>';
    } else {
        throw new Exception('Missing or incorrect array keys entered'); 
    }
}

    