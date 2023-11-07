<?php
session_start();

$style = "css/page_poster.css";
$script = "js/script_page_principal_log.js";

// si l'utilisateur est connecté on passe les variables de sessions
if (isset($_SESSION['name'])){
  $titre = "CitrusLife - ". $_SESSION['name'];
  $profil = $_SESSION['name'];
  $log = "Pour te déconnecter";
  $inscription = 'Poster';
  // Sinon on injecte des variables standard
} else {
  $titre = 'CitrusLife';
  $log = "Se connecter";
  $profil = 'Mon profil';
  $inscription = 'Inscription';
}

include("includes/header.php");
include('connexion.php');
  
?>
  <main>
    <p id="poster">Poster une publication : </p>
    <div class="adapt2" id="adapt2">  
        <form method="POST" id="form2" action="poster.php" enctype="multipart/form-data">  
          <label for="publication"></label>
          <textarea name="publication" id="publication" cols="30" rows="10" required></textarea>
          <label for="file"></label>
          <input type="file" name="file" id="file" value="Sélectionner une photo">
          <input type="submit" value="Valider">
        </form>
    </div>

<?php

include('includes/footer.php');

?>