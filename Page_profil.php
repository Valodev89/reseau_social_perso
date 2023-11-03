<?php
    

    session_start();

    $style = "css/Page_profil.css";
    $script = "js/script_page_principal_log.js";
    $titre = "CitrusLife - ". $_SESSION['name'];
    $log = "Pour te déconnecter";
    $profil = $_SESSION['name'];
  
    include("includes/header.php");
    include('connexion.php');
?>
    <body>
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
    </body>
<?php
    include('includes/footer.php');
?>