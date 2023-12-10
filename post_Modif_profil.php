<?php
include('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newlastname = $_POST['lastname'];
    $newname = $_POST['name'];
    $newbirthday = $_POST['birthday'];
    $newmail = $_POST['mail'];
    $newpassword = $_POST['password'];
    // crypt($_POST['password'],$salt);
    $id = $_POST['id'];
    
    // Requête SQL pour mettre à jour le nom de l'utilisateur dans la base de données
    $requete = $db->prepare("UPDATE utilisateurs SET name = :newname, lastname = :newlastname, birthday = :newbirthday, mail = :newmail, password = :newpassword WHERE id = :id");

    $requete->bindParam(':newname', $newname);
    $requete->bindParam(':newlastname', $newlastname);
    $requete->bindParam(':newbirthday', $newbirthday);
    $requete->bindParam(':newmail', $newmail);
    $requete->bindParam(':newpassword', $newpassword);
    $requete->bindParam(':id', $id);
    $requete->execute();

    // Récupération de l'utilisateur modifié dans la base de données
    $requete = $db->prepare("SELECT * FROM utilisateurs WHERE id = :id");
    $requete->bindParam(':id', $id);
    $requete->execute();
    $updatedUser = $requete->fetch(PDO::FETCH_ASSOC);

    // Vérification que l'utilisateur a bien été modifié
    $this->assertEquals($newname, $updatedUser['name']);
    $this->assertEquals($newlastname, $updatedUser['lastname']);
    $this->assertEquals($newbirthday, $updatedUser['birthday']);
    $this->assertEquals($newmail, $updatedUser['mail']);
    $this->assertEquals($newpassword, $updatedUser['password']);
    
    // Redirection vers la page de profil ou autre traitement
    header("Location: Page_profil.php");
    exit();
}
?>