<?php
    session_start();

    include('includes/config.php');

    if(!isset($_POST['name']) || !isset($_POST['lastname']) || !isset($_POST['birthday']) || !isset($_POST['mail']) || !isset($_POST['password'])) {
        echo 'merci de remplir les champs dans le formulaire d\'inscription';
        include('Page_inscription.php');
    } else {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];

	    $insertuser = $db->prepare('INSERT INTO utilisateurs(name, lastname, birthday, mail, password) VALUES (:name, :lastname, :birthday, :mail, :password)');
	    $insertuser->execute([
            'name' => $name,
            'lastname' => $lastname,
            'birthday' => $birthday,
            'mail' => $mail,
            'password' => $password
        ]);
        echo "<script>window.location.replace('se_connecter.php')</script>";
    }
?>