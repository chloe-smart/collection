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
        
        $expectedOutput = '<h2 tabindex=0 >Salvador Dali</h2>' . 
            '<p tabindex=0 class="years">11 May 1904 - 23 January 1989</p>' .
            '<img tabindex=0 src="images/src="images/dali.jpg" alt="an image of artwork by Salvador Dali" "alt="an image of artwork by Salvador Dali">' .
            '<h3 tabindex=0 >Favourite Medium: oil on canvas</h3>' . 
            '<h3 tabindex=0 >Known For: exploring subconscious imagery, his most famous painting is The Persistence of Memory (1931), depicting limp melting watches</h3>' . 
            '<h3 tabindex=0 >Place Of Birth: Spain</h3>';

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

