<?php
session_start();

if (isset($_SESSION['name'])){
    $titre = "CitrusLife - ". $_SESSION['name'];
    $profil = $_SESSION['name'];
    $log = "Pour te déconnecter";
    $style = "css/Page_profil.css";
    $script = "js/script_page_principal_log.js"; 
    $inscription = 'Poster';
  
    include("includes/header.php");
    include('connexion.php');
?>
    <main>
        <div class="adapt" id="adapt">
            <h2>Votre prénom</h2>
            <p><?php echo $_SESSION['name'] ?></p>

            <h2>Votre nom</h2>
            <p><?php echo $_SESSION['lastname'] ?></p>

            <h2>Votre date de naissance</h2>
            <p><?php echo $_SESSION['birthday'] ?></p>

            <h2>Votre mail</h2>
            <p><?php echo $_SESSION['mail'] ?></p>

            <h2>Votre mot de passe</h2>
            <p><?php echo $_SESSION['password'] ?></p>
        </div>

<?php
include('includes/footer.php');
?>

<?php
} else {
    header("Location: page_connecter.php");
}
?>

   
