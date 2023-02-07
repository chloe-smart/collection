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
    <html lang="en">
</head>
    <header>
        <h1>ARTISTS</h1>
    </header>
<body>
    <?php
    foreach($artists as $artist) {
    $artistsOutput = generateArtistHtml($artist);
    echo $artistsOutput;
    }
    ?>
</body>
</html>