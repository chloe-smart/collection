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
        '<img alt="an image of artwork by ' . $artists['name'] . '" class="image" src=' . $artists['image'] . '>' .
        '<h3>Favourite Medium: ' . $artists['favouriteMedium'] . '</h3>' . 
        '<h3>Known For: ' . $artists['knownFor'] . '</h3>' . 
        '<h3>Place Of Birth: ' . $artists['placeOfBirth'] . '</h3>';
    } else {
        throw new Exception('Wrong array keys entered'); 
    }
}

