<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testGenerateArtistHtmlSuccess()
    {
        $artistPlaceholder = ['name' => 'Salvador Dali',
            'yearsLived' => '11 May 1904 - 23 January 1989',
            'image' => 'src="images/dali.jpg" alt="an image of artwork by Salvador Dali"',
            'favouriteMedium' => 'oil on canvas',
            'knownFor' => 'exploring subconscious imagery, his most famous painting is The Persistence of Memory (1931), depicting limp melting watches',
            'placeOfBirth' => 'Spain'];
        
        $expectedOutput = '<h2>Salvador Dali</h2>' . 
            '<p class="years">11 May 1904 - 23 January 1989</p>' .
            '<img src="images/src="images/dali.jpg" alt="an image of artwork by Salvador Dali" "alt="an image of artwork by Salvador Dali">' .
            '<p>Favourite Medium: oil on canvas</p>' . 
            '<p>Known For: exploring subconscious imagery, his most famous painting is The Persistence of Memory (1931), depicting limp melting watches</p>' . 
            '<p>Place Of Birth: Spain</p>';

        $actualOutput = generateArtistHtml($artistPlaceholder);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testGenerateArtistHtmlFail()
    {
        $badArray1 = ['sausages' => 'Salvador Dali',
            'potatos' => '11 May 1904 - 23 January 1989',
            'gravy' => 'src="images/dali.jpg" alt="an image of artwork by Salvador Dali"',
            'favouriteMedium' => 'oil on canvas',
            'knownFor' => 'exploring subconscious imagery, his most famous painting is The Persistence of Memory (1931), depicting limp melting watches',
            'placeOfBirth' => 'Spain'];
        
        $this->expectException(Exception::class);

        generateArtistHtml($badArray1);
    }
        
    public function testGenerateArtistHtmlFail_indexed()
    {
        
        $badArray2 = ['Salvador Dali',
            '11 May 1904 - 23 January 1989',
            'src="images/dali.jpg" alt="an image of artwork by Salvador Dali"',
            'oil on canvas',
            'exploring subconscious imagery, his most famous painting is The Persistence of Memory (1931), depicting limp melting watches',
            'Spain'];
        
        $this->expectException(Exception::class);   

        generateArtistHtml($badArray2);
    }
} 

