<?php

session_start();

if ($_SESSION['name']){
    echo "<script>window.location.replace('page_principal_log.php')</script>";
} else {
    echo "<script>window.location.replace('se_connecter.php')</script>";
}

?>
