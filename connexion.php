<?php

session_start();  

include('includes/config.php');

// Vérification que les champs mails et mot de passe sont bien renseignés
if(!isset($_POST['mail']) && !isset($_POST['password'])) {
  echo 'Il faut remplir les champs pour vous connecter';
} else {
  // si ok on récupère les informations dans 2 variables
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  
  // Récupération des données de la base de donnée
  $sqlQuery = 'SELECT * FROM utilisateurs WHERE mail=:mail';
  $usersStatement = $db->prepare($sqlQuery);
  $usersStatement->bindParam(':mail',$mail);
  $usersStatement->execute();
  $users = $usersStatement->fetchAll();

// On recherche si le compte existe bien dans la base de donnée et si oui on envoie l'utilisateur sur sa page personnel 
foreach ($users as $user) {

    if ($user['mail'] === $_POST['mail'] || $user['password'] == crypt($_POST['password'], $salt)) {
    
    // Créations des variables de sessions
      $_SESSION['name'] = $user['name'];
      $_SESSION['lastname'] = $user['lastname'];
      $_SESSION['birthday'] = $user['birthday'];
      $_SESSION['mail'] = $user['mail'];
      $_SESSION['password'] = $user['password'];

    header("Location: page_principal_log.php");

  } else {

      $_SESSION['error'] = 'Mot de passe ou mail incorrect';
      // Si l'utilisateur n'est pas connecté les variables de sessions sont remplacées par des variables standard
      header('Location: page_connecter.php');
      
    }
  }
}
?>