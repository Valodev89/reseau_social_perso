<?php
    session_start();

    include('includes/config.php');

    // Vérification que les champs sont bien renseignés    
    if(!isset($_POST['name']) || !isset($_POST['lastname']) || !isset($_POST['birthday']) || !isset($_POST['mail']) || !isset($_POST['password'])) {
        echo 'merci de remplir les champs dans le formulaire d\'inscription';
        include('page_inscription.php');
    } else {
        // Si bien remplis on les stocks dans les variables et on injecte les informations dans la base de donnée
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
        // On renvoie l'utilisateur sur le formulaire de connexion
        header("Location: page_connecter.php");
    }
?>