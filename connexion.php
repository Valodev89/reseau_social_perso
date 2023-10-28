<?php
    session_start();

    include('includes/config');

    $query_mail = $db->prepare('SELECT mail FROM connexion');
    $query_password = $db->prepare('SELECT password FROM connexion');

    if(!isset($_POST['mail'] && !isset($_POST['password']))) {
        echo 'Merci d';
    } else {
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        if ($mail === && $password ===)
    }
    

?>