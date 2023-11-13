<?php
session_start();

$style = "css/style_page_principal_log.css";
$script = "js/script_page_principal_log.js";

// si l'utilisateur est connecté on passe les variables de sessions
if (isset($_SESSION['name'])){
  $titre = "CitrusLife - ". $_SESSION['name'];
  $profil = $_SESSION['name'];
  $log = "Pour te déconnecter";
  $inscription = 'Poster';
  // Sinon on injecte des variables standard
} else {
  $titre = 'CitrusLife';
  $log = "Se connecter";
  $profil = 'Mon profil';
  $inscription = 'Inscription';
}

include("includes/header.php");
include('connexion.php');

?>
  <main>
    <div class="adapt" id="adapt">
      <div class="dummy-adapt">
        <?php if (isset($_SESSION['author'])) { ?>
        <h2 id="adapt-title">Publication de <?php echo $_SESSION['name']; ?><br><span id="date_publication">Le <?php 
        function datefr ($date) {
          return strftime('%d-%m-%Y', strtotime($date));
        }    
        echo datefr($_SESSION['date']); ?></span></h2>

        <p><?php echo $_SESSION['text']; ?> </p><br />
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus magni animi autem adipisci fugit! Id fugiat
        doloribus similique itaque inventore aperiam magni officia quibusdam libero, culpa dolor mollitia quam ex aut
        ipsam excepturi sed voluptate laudantium doloremque! Officiis, repellendus labore?</p><br />
      </div>  
        <img src="./media/svg/undraw_digital_currency_qpak.avif" alt="">
        <?php } else { ?>
        <h2 id="adapt-title">Pas de nouvelles publication</h2>
        <p>Désolé il n'y a pour le moment aucunes nouvelles publication, si vous le souhaitez vous pouvez poster un publication? Cliquez sur Poster puis remplir les champs</p><br />
      </div>  
        <img src="./media/pleure.jpg" alt="">
        <?php } ?>

    </div>
    <div class="improvise" id="improvise">
      <img src="./media/svg/undraw_nakamoto_2iv6.jpg" alt="" class="imgImprovise">
      <div>
        <h2>Envie de poster?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus magni animi autem adipisci fugit! Id fugiat
          doloribus similique itaque inventore aperiam magni officia quibusdam libero, culpa dolor mollitia quam ex
          aut ipsam excepturi sed voluptate laudantium doloremque! Officiis, repellendus labore?</p><br />
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum at, eum maxime enim blanditiis harum
          inventore, officia non eveniet repellendus expedita dolore ipsam explicabo exercitationem magni repudiandae
          perspiciatis consequuntur, debitis consequatur ea omnis? Quo natus velit, exercitationem aut nesciunt,
          molestiae doloremque facilis soluta qui tenetur pariatur quis, alias rem ut modi beatae at nisi illo
          officiis corrupti incidunt! Velit cum accusamus nobis, recusandae dignissimos laboriosam ratione fugit alias
          soluta nesciunt similique.</p>
      </div>
    </div>

    <div class="adapt" id="adapt2">
      <div class="dummy-adapt">
        <?php if (isset($_SESSION['author'])) { ?>
        <h2 id="adapt-title">Publication de <?php echo $_SESSION['name']; ?><br><span id="date_publication">Le <?php 
         
        echo datefr($_SESSION['date']); ?></span></h2>

        <p><?php echo $_SESSION['text']; ?> </p><br />
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus magni animi autem adipisci fugit! Id fugiat
        doloribus similique itaque inventore aperiam magni officia quibusdam libero, culpa dolor mollitia quam ex aut
        ipsam excepturi sed voluptate laudantium doloremque! Officiis, repellendus labore?</p><br />
      </div>  
        <img src="./media/svg/undraw_digital_currency_qpak.avif" alt="">
        <?php } else { ?>
        <h2 id="adapt-title">Pas de nouvelles publication</h2>
        <p>Désolé il n'y a pour le moment aucunes nouvelles publication, si vous le souhaitez vous pouvez poster un publication? Cliquez sur Poster puis remplir les champs</p><br />
      </div>  
        <img src="./media/pleure.jpg" alt="">
        <?php } ?>

    </div>
<?php

include('includes/footer.php');

?>