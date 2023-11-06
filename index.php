<?php

session_start();

if ($_SESSION['name']) {

  echo "<script>window.location.replace('page_principal_log.php')</script>";

} else {
  
  $style = "css/style.css";
  $script = "js/script.js";
  $titre = 'CitrusLife';
  $log = "Se connecter";
  $profil = 'Mon profil';
  $inscription = 'Inscription';
}

include("includes/header.php");
 
?>
<main>
  <div class="adapt" id="adapt">
    <div class="dummy-adapt">
      <h2 id="adapt-title">Sophie vient de publier une photo..</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus magni animi autem adipisci fugit! Id fugiat
          doloribus similique itaque inventore aperiam magni officia quibusdam libero, culpa dolor mollitia quam ex aut
          ipsam excepturi sed voluptate laudantium doloremque! Officiis, repellendus labore?</p><br />
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam unde quis quam, alias nobis ut voluptatum
          iste totam. Explicabo aliquid magnam iure incidunt dolor beatae laudantium quia qui dolore facilis maxime quae
          deleniti fuga eum dicta numquam, veniam ea obcaecati modi?</p>
    </div>
    <img src="./media/svg/undraw_digital_currency_qpak.avif" alt="">
  </div>
  <div class="improvise" id="improvise">
    <img src="./media/svg/undraw_nakamoto_2iv6.jpg" alt="" id="imgImprovise">
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
  
 <?php

  include('includes/footer.php');

  ?>