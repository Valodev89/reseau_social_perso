<?php
  
  $style = "css/styleinscription.css";
  $script = "js/scriptinscription.js";
  $titre = "CitrusLife - home";
  $log = "se connecter";
  $profil = 'Mon profil';

  include("includes/header.php");

?>
  <main>
    <div class="adapt" id="adapt">
      <div class="dummy-adapt">
        <form method="post" id="form" action="">

            <p class="formulaire">Pas encore inscrit? Merci de remplir de formulaire ci-dessous</p>

            <label for="pseudo">Choisissez votre pseudo</label>
            <input type="text" name="pseudo" id="pseudo" required>

            <label for="name">Indiquez votre nom</label>
            <input type="text" name="name" id="name" required>

            <label for="lastname">Indiquez votre prénom</label>
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