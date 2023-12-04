<?php

session_start();  
include('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newlastname = $_POST['lastname'];
    $newname = $_POST['name'];
    $newbirthday = $_POST['birthday'];
    $newmail = $_POST['mail'];
    $newpassword = $_POST['password'];
    $id = $_POST['id'];
    
    // Requête SQL pour mettre à jour le nom de l'utilisateur dans la base de données
    $requete = $db->prepare("
    UPDATE utilisateurs 
    SET name = :newname, lastname = :newlastname, birthday = :newbirthday, mail = :newmail, password = :newpassword 
    WHERE id = :id");
    $requete->execute([
        'lastname' => $newlastname,
        'name' => $newname,
        'birthday' => $newbirthday,
        'mail' => $newmail,
        'password' => $newpassword,
        'id' => $id
    ]);
    
    // Redirection vers la page de profil ou autre traitement
    header("Location: Page_profil.php");
    exit();
}
?>