<?php
//TODO Check cookie, session, and GET
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Starwish</title>
    <link rel="stylesheet" href="resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/css/style.css">
</head>
<body class="body">
<header>
    <a href="profile.php"><img alt="Logo de starwish" src="resource/img/WhiteLogo.png" id="logo"></a>

    <form name="search" method="post" class="form-inline">
        <div class="form-group">
            <input type="text" name="search" class="form-control input-lg">
            <button type="submit" class="btn btn-primary btn-lg">Rechercher</button>
        </div>
    </form>

    <ul class="nav-button-bar">
        <li><a href="lists.php"><img class="nav-button" id="following" src="resource/img/People.png"></a></li>
        <li><a href="lists.php"><img  class="nav-button" id="confidentialite" src="resource/img/Gears.png"></a></li>
        <li><a href="lists.php"><img class="nav-button" id="wishlist" src="resource/img/WhiteStar.png"></a></li>
        <li>
            <a><img class="nav-button" id="wishlist" src="resource/img/notification5.png"></a>
            <!-- Liste des notifs ici -->
        </li>
    </ul>
</header>