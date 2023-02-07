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
        '<img class="image" src=' . $artistPlaceholder['image'] . '>' .
        '<p>Favourite Medium: ' . $artistPlaceholder['favouriteMedium'] . '</p>' . 
        '<p>Known For: ' . $artistPlaceholder['knownFor'] . '</p>' . 
        '<p>Place Of Birth: ' . $artistPlaceholder['placeOfBirth'] . '</p>';

        $actualOutput = generateArtistHtml($artistPlaceholder);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testGenerateArtistHtmlFail()
    {
        
        $artistPlaceholderFail = ['sausages' => '', 'potatos' => '', 'gravy' => '', 'favouriteMedium' => '', 'knownFor' => '', 'placeOfBirth' => ''];
       
        $this->expectException(Exception::class);
        
        generateArtistHtml($artistPlaceholderFail);
        
    }

    public function testGenerateArtistHtmlFai_indexed()
    {
        
        $artistPlaceholderFail_indexed = ['', '', '', '', '', ''];
       
        $this->expectException(Exception::class);
        
        generateArtistHtml($artistPlaceholderFail_indexed);
        
    }
}