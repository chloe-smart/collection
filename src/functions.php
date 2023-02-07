<?php


function generateArtistHtml(array $artists): string {
    return '<h2>' . $artists['name'] . '</h2>' . 
    '<p class="years">' . $artists['yearsLived'] . '</p>' .
    '<img class="image" src=' . $artists['image'] . '>' .
    '<p>Favourite Medium: ' . $artists['favouriteMedium'] . '</p>' . 
    '<p>Known For: ' . $artists['knownFor'] . '</p>' . 
    '<p>Place Of Birth: ' . $artists['placeOfBirth'] . '</p>';
    }

