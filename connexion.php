<?php

session_start();  

  include('includes/config.php');

  $sqlQuery = 'SELECT * FROM utilisateurs';
	$usersStatement = $db->prepare($sqlQuery);
	$usersStatement->execute();
	$users = $usersStatement->fetchAll();

  if(!isset($_POST['mail']) && !isset($_POST['password'])) {
      echo 'Il faut remplir les champs pour vous connecter';
  } else {
      $mail = $_POST['mail'];
      $password = $_POST['password'];

      foreach ($users as $user) {
        if ($user['mail'] === $_POST['mail'] && $user['password'] === $_POST['password']) {
          $_SESSION['name'] = $user['name'];
          $_SESSION['lastname'] = $user['lastname'];
          $_SESSION['birthday'] = $user['birthday'];
          $_SESSION['mail'] = $user['mail'];
          $_SESSION['password'] = $user['password'];
          echo "<script>window.location.replace('page_principal_log.php')</script>";
        } else {
          $style = "css/se_connecter.css";
          $script = "js/se_connecter.js";
          $titre = "CitrusLife - home";
          $profil = "Mon profil";
          $log = "Se connecter";
          
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Citrus Life</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="<?php echo $style; ?>" rel="stylesheet">
</head>
<body>
  <nav id="navbar">
    <div class="nav-elements" id="nav-elements">
      <a href="./index.php"><img src="media/Logo4.png" id="logo" alt="logo citrus"></a>
      <ul class="nav-links">
        <li class="linav"><a href="#adapt-title">Actualité</a></li>
        <li class="linav"><a href="#improvise"><?php echo $profil; ?></a></li>
        <li class="linav"><a href="./Page_inscription.php">Inscription</a></li>
        <li class="linav"><a href="./Se_connecter.php"><?php echo $log; ?></a></li>
        <li id="recherche">
          <input type="text" id="barrerecherche">
          <span class="material-symbols-outlined" id="logosearch">search</span>
        </li> 
      </ul>
    </div>
  </nav>
    <main>
        <div class="adapt" id="adapt">
            <div class="dummy-adapt">
                <form action="connexion.php" id="form" method="post">      
                    <p class="formulaire">Pour vous connecter :</p>

                    <label for="mail">Indiquez votre pseudo ou votre mail</label>
                    <input type="mail" name="mail" id="mail" required>

                    <label for="password">Votre mot de passe</label>
                    <input type="password" name="password" id="password" required>

                    <input type="submit" value="Valider" id="valid">
                    <p id="message">Votre mot de passe ou mail n'est pas valide</p>
                </form>
            </div>
        </div>
<?php

  include('includes/footer.php');
}
        }
    }
?>