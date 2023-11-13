<?php
    session_start();

    include('includes/config.php');

    // Vérification que les champs sont bien renseignés    
    if(!isset($_POST['publication'])) {
        echo 'merci de remplir le champ texte pour votre publication';
    } else {
        // Si bien remplis on les stocks dans les variables et on injecte les informations dans la base de donnée
        $file = $_FILES['file'];
        $publication = $_POST['publication'];
        $author = $_SESSION['name'];
        $date = date("Y-m-d");

	    $insertpost = $db->prepare('INSERT INTO post(author_name_post, date_post, pic_post, text_post) VALUES (:author_name_post, :date_post, :pic_post, :text_post)');
	    $insertpost->execute([
            'author_name_post' => $author,
            'date_post' => $date,
            'pic_post' => $file,
            'text_post' => $publication,
        ]);
        // On renvoie l'utilisateur sur le formulaire de connexion
        $_SESSION['author'] = $author;
        $_SESSION['date'] = $date;
        $_SESSION['file'] = $file;
        $_SESSION['text'] = $publication;
        header("Location: page_principal_log.php");
    }
?>