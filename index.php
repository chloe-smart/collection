<?php

require 'src/db.php';
require 'src/functions.php';

$db = connectToDb('artistsApp');
$artists = getAllArtists($db);


?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Chloe's Collector App</title>
    <link rel="stylesheet" href="https://use.typekit.net/rkk2hbc.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <html lang="en"></html>
</head>
<body>
    <header>
        <h1 tabindex=0 >ARTISTS</h1>
    </header>
    <?php
    foreach($artists as $artist) {
        try {
            echo generateArtistHtml($artist);
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 3, "error.log"); 
        }
    }
    ?>
</body>
</html>