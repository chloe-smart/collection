<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testGenerateArtistHtml()
    {
        $artist= ['name' => 'Salvador Dali', 'yearsLived' => '11 May 1904 - 23 January 1989', 'image' => 'images/dali.jpg', 'favouriteMedium' => 'oil on canvas', 'knownFor' => 'exploring subconscious imagery, his most famous painting is The Persistence of Memory (1931), depicting limp melting watches', 'placeOfBirth' => 'Spain'];
        $expectedOutput = '<h2>' . $artist['name'] . '</h2>' . 
        '<p class="years">' . $artist['yearsLived'] . '</p>' .
        '<img class="image" src=' . $artist['image'] . '>' .
        '<p>Favourite Medium: ' . $artist['favouriteMedium'] . '</p>' . 
        '<p>Known For: ' . $artist['knownFor'] . '</p>' . 
        '<p>Place Of Birth: ' . $artist['placeOfBirth'] . '</p>';

        $actualOutput = generateArtistHtml($artist);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}