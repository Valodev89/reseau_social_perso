<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title><?php echo $titre; ?></title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="<?php echo $style; ?>" rel="stylesheet">
</head>
<body>
  <nav id="navbar">
    <div class="nav-elements" id="nav-elements">
      <a href="./index.php"><img src="media/Logo4.png" id="logo" alt="logo citrus"></a>
      <ul class="nav-links">
        <li class="linav"><a href="./actualite.php">Actualité</a></li>
        <li class="linav"><a href="./Page_profil.php"><?php echo $profil; ?></a></li>
        <li class="linav"><a href="./Page_inscription.php">Inscription</a></li>
        <li class="linav"><a href="./Se_connecter.php"><?php echo $log; ?></a></li>
        <li id="recherche">
          <input type="text" id="barrerecherche">
          <span class="material-symbols-outlined" id="logosearch">search</span>
        </li>
      </ul>
      <div id="colorbutton">
        <input id="button1" class="button" type="button">
        <input id="button2"  class="button" type="button"> 
      </div>
      
    </div>
  </nav>