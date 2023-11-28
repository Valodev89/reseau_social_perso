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
    include('post_Modif_profil.php');
?>
    <main>
        <div class="adapt" id="adapt">
            <h2 class = "title">Votre prénom</h2>  
                <div class="update">
                    <p><?php echo $_SESSION['name']; ?></p>
                    <a class ="update-button" href="./Modif_profil.php">Modifier</a>
                </div>
            <h2 class = "title">Votre nom</h2>
                <div class="update">
                    <p><?php echo $_SESSION['lastname'] ?></p>
                    <a class ="update-button" href="./Modif_profil.php">Modifier</a>
                 </div>

            <h2 class = "title">Votre date de naissance</h2>
            
            <?php 
            
            function dateFr($date) {
                return strftime('%d-%m-%Y' ,strtotime($date));
            }

            ?>
                <div class="update">
                    <p><?php echo dateFr($_SESSION['birthday']); ?></p>
                    <a class ="update-button" href="./Modif_profil.php">Modifier</a>
                </div>


            <h2 class = "title" >Votre mail</h2>
                <div class="update">
                    <p><?php echo $_SESSION['mail'] ?></p>
                    <a class ="update-button" href="./Modif_profil.php">Modifier</a>
                </div>

            <h2 class = "title" >Votre mot de passe</h2>
                <div class="update">
                    <p><?php echo "*************" ?></p>
                    <a class ="update-button" href="./Modif_profil.php">Modifier</a>
                </div>
        </div>

<?php
include('includes/footer.php');
?>

<?php
} else {
    header("Location: page_connecter.php");
}
?>

   
