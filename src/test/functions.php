<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testGenerateArtistHtmlSuccess()
    {
        $artistPlaceholder = ['name' => '', 'yearsLived' => '', 'image' => '', 'favouriteMedium' => '', 'knownFor' => '', 'placeOfBirth' => ''];
        
        $expectedOutput = '<h2>' . $artistPlaceholder['name'] . '</h2>' . 
        '<p class="years">' . $artistPlaceholder['yearsLived'] . '</p>' .
        '<img alt="an image of artwork by ' . $artistPlaceholder['name'] . '" class="image" src=' . $artistPlaceholder['image'] . '>' .
        '<p>Favourite Medium: ' . $artistPlaceholder['favouriteMedium'] . '</p>' . 
        '<p>Known For: ' . $artistPlaceholder['knownFor'] . '</p>' . 
        '<p>Place Of Birth: ' . $artistPlaceholder['placeOfBirth'] . '</p>';

        $actualOutput = generateArtistHtml($artistPlaceholder);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testGenerateArtistHtmlFail()
    {
        $badArray1 = ['sausage' => '', 'potatos' => '', 'gravy' => '', 'favouriteMedium' => '', 'knownFor' => '', 'placeOfBirth' => ''];
        
        $this->expectException(Exception::class);

        generateArtistHtml($badArray1);
    }
        
    public function testGenerateArtistHtmlFail_indexed()
    {
        
        $badArray2 = ['', '', '', '', '', ''];
        
        $this->expectException(Exception::class);   

        generateArtistHtml($badArray2);
    }
} 

