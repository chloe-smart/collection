<?php

require 'src/db.php';
require 'src/function.php';

$db = connectToDb('artistsApp');
$artists = getAllArtists($db);


?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Chloe's Collector App</title>
    <link rel="stylesheet" href="https://use.typekit.net/rkk2hbc.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
    <header>
        <h1>ARTISTS</h1>
    
    
    </header>
<body>
    <?php
       echo generateArtistHtml($artists);
    ?>
</body>
</html>