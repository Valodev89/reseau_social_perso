<?php
  
session_start();

$style = "css/se_connecter.css";
$script = "js/se_connecter.js";
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
        
        <form action="connexion.php" id="form" method="post">

            <p class="formulaire">Pour vous connecter :</p>

            <label for="mail">Indiquez votre pseudo ou votre mail</label>
            <input type="mail" name="mail" id="mail" required>

            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Valider" id="valid">
            <p id="message">
              <?php 
                if (isset($_SESSION['error'])) {

                  echo $_SESSION['error'];
                
                } else {

                 echo $_SESSION['error'] = '';
                 
                }
               ?></p>
        </form>
      </div>
    </div>
    <?php

    if(isset($_SESSION['error'])) {

      unset($_SESSION['error']);
    
    }

include('includes/footer.php');

?>