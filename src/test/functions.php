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
        '<h3>Favourite Medium: ' . $artistPlaceholder['favouriteMedium'] . '</h3>' . 
        '<h3>Known For: ' . $artistPlaceholder['knownFor'] . '</h3>' . 
        '<h3>Place Of Birth: ' . $artistPlaceholder['placeOfBirth'] . '</h3>';

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

