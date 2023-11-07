<?php

session_start();
// Si l'utilisateur est connecté php le renvoi vers sa page personnel sinon il le renvoi vers la page de connexion
if (isset($_SESSION['name'])){
    header("Location: page_principal_log.php");
} else {
    header("Location: page_connecter.php");
}

?>
