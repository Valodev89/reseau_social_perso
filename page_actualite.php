<?php

session_start();
// Si l'utilisateur est connecté php le renvoi vers sa page personnel sinon il le renvoi vers la page de connexion
if ($_SESSION['name']){
    echo "<script>window.location.replace('page_principal_log.php')</script>";
} else {
    echo "<script>window.location.replace('page_connecter.php')</script>";
}

?>
