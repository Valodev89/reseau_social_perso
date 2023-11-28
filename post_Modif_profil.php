<?php 

session_start();  

include('includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newlastname = $_POST['lastname'];
    $newname = $_POST['name'];
    $newbirthday = $_POST['birthday'];
    $newmail = $_POST['mail'];
    $newpassword = $_POST['password'];
    
    // Requête SQL pour mettre à jour le nom de l'utilisateur dans la base de données
    $requete = $db->prepare("UPDATE utilisateurs SET name = :newname, lastname = :newlastname, birthday = :newbirthday, mail = :newmail, password = :newpassword WHERE id = :id");
    $requete->bindParam(':newname', $newname);
    $requete->bindParam(':newlastname', $newlastname);
    $requete->bindParam(':newbirthday', $newbirthday);
    $requete->bindParam(':newmail', $newmail);
    $requete->bindParam(':newpassword', $newpassword);
    $requete->bindParam(':id', $id); // Assurez-vous d'avoir l'ID de l'utilisateur
    $requete->execute();
    
    // Redirection vers la page de profil ou autre traitement
    header("Location: Page_profil.php");
    exit();
}
?>