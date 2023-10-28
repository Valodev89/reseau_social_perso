<?php
  session_start();
  
  $style = "css/se_connecter.css";
  $script = "js/se_connecter.js";
  $titre = "CitrusLife - home";

  include("includes/header.php");

?>
  <main>
    <div class="adapt" id="adapt">
      <div class="dummy-adapt">
        
        <form action="connexion.php" id="form" method="post">

            <p class="formulaire">Pour vous connecter :</p>

            <label for="pseudo">Indiquez votre pseudo ou votre mail</label>
            <input type="mail" name="mail" id="mail" required>

            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Valider" id="valid">
        </form>
      </div>
    </div>
    <?php

  include('includes/footer.php');

?>