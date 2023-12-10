<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['name'])) {
    header("Location: page_connecter.php");
    exit(); // Arrête l'exécution du script
}

// Définit les variables pour le titre, le profil, le style et le script
$titre = "CitrusLife - ". $_SESSION['name'];
$profil = $_SESSION['name'];
$log = "Pour te déconnecter";
$style = "css/Modif_profil.css";
$script = "js/script_page_principal_log.js"; 
$inscription = 'Poster';

// Inclut le header et la connexion à la base de données
include("includes/header.php");
include('connexion.php');
?>

<main>
    <div class="adapt" id="adapt">
        <form action="post_Modif_profil.php" id="form" method="post">
            <div class="no-visuality">
                <label class="title" for="id"><?php echo $_SESSION['id']; ?></label>
                <input type="text" name="id" id="id">
            </div>

            <label class="title" for="lastname">Votre prénom</label>
            <input type="text" name="lastname" id="lastname" required>

            <label class="title" for="name">Votre nom</label>
            <input type="text" name="name" id="name" required>

            <label class="title" for="birthday">Votre date de naissance</label>
            <input type="date" name="birthday" id="birthday" required>

            <label class="title" for="mail">Votre mail</label>
            <input type="email" name="mail" id="mail" required>

            <label class="title" for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Valider" id="valid">

            <?php 
            // Affiche les erreurs s'il y en a
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
            } else {
                echo $_SESSION['error'] = '';
            }
            ?>
        </form>
    </div>
</main>

<?php
// Inclut le footer
include('includes/footer.php');
?>

   
