<?php
    include('includes/variable.php');
    
    if(!isset($_POST['mail']) && !isset($_POST['password'])) {
        echo 'Il faut remplir les champs pour vous connecter';
    } else {
        $mail = $_POST['mail'];
        $password = $_POST['password'];
       
        
        if(array_key_exists($mail,$users) && $users[$mail]['password'] == $password) {  
            $_SESSION['name'] = $users[$mail]['name']; 
            echo "<script>window.location.replace('page_principal_log.php')</script>";
        } else {
           
            $style = "css/se_connecter.css";
            $script = "js/se_connecter.js";
            $titre = "CitrusLife - home";
            $profil = "Mon profil";
            $log = "Se connecter";

            include("includes/header.php");

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
                    <p id="message">Votre mot de passe ou mail n'est pas valide</p>
                </form>
            </div>
        </div>
<?php

  include('includes/footer.php');

        }
    }
?>