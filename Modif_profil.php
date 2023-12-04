<?php
session_start();

if (isset($_SESSION['name'])){
    $titre = "CitrusLife - ". $_SESSION['name'];
    $profil = $_SESSION['name'];
    $log = "Pour te déconnecter";
    $style = "css/Modif_profil.css";
    $script = "js/script_page_principal_log.js"; 
    $inscription = 'Poster';
  
    include("includes/header.php");
    include('connexion.php');
?>
    <main>
        <div class="adapt" id="adapt">
        
        <form action="post_Modif_profil.php" id="form" method="post">

            <div class = "no-visuality">
              <label style class = "title" for="id">id</label>
              <input type="id" name="id" id="id" required>
            </div>

            <label class = "title" for="lastname">Votre prénom</label>
            <input type="lastname" name="lastname" id="lastname" required>

            <label class = "title" for="name">Votre nom</label>
            <input type="name" name="name" id="name" required>

            <label class = "title" for="birthday">Votre date de naissance</label>
            <input type="birthday" name="birthday" id="birthday" required>

            <label class = "title" for="mail">Votre mail</label>
            <input type="mail" name="mail" id="mail" required>

            <label class = "title" for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Valider" id="valid">
              <?php 
                if (isset($_SESSION['error'])) {

                  echo $_SESSION['error'];
                
                } else {

                 echo $_SESSION['error'] = '';
                 
                }
               ?>
        </form>
      </div>

<?php
include('includes/footer.php');
?>

<?php
} else {
    header("Location: page_connecter.php");
}
?>

   
