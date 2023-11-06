<?php
   
session_start(); 

$style = "css/styleinscription.css";
$script = "js/scriptinscription.js";
$titre = 'CitrusLife';
$log = "Se connecter";
$profil = 'Mon profil';
$inscription = 'Inscription';
  
include("includes/header.php");

session_destroy();
?>
  <main>
    <div class="adapt" id="adapt">
      <div class="dummy-adapt">
        <form method="post" id="form" action="inscription.php">

            <p class="formulaire">Pas encore inscrit? Merci de remplir de formulaire ci-dessous</p>

            <label for="name">Indiquez votre Prénom</label>
            <input type="text" name="name" id="name" required>

            <label for="lastname">Indiquez votre Nom</label>
            <input type="text" name="lastname" id="lastname" required>

            <label for="birthday">Votre date de naissance</label>
            <input type="date" name="birthday" id="birthday" required>

            <label for="mail">Votre mail</label>
            <input type="mail" name="mail" id="mail" required>

            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Valider">
        </form>
      </div>
    </div>
<?php

include('includes/footer.php');

?>