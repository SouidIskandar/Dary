<?php include("./db-connect.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Dary</title>
</head>

    <header>
      <?php include ("./lib/navbar.php") ?>
    </header>
    <section class="home container" id="home">
        <div class="home-text">
            <h1>Trouvez votre prochain <br>endroit idéal où <br>vivre</h1>
            <a href="http://localhost/dary/catalogue.php" class="btn">Réserver</a>
        </div>
    </section>
    <section class="about container" id="Apropos">
        <div class="about-img">
          <img src="im2.jpg" alt="">
        </div>
        <div class="about-text">
            <span>A propos de nous </span>
            <h2>Nous vous proposons <br>la meilleure propriété !</h2>
            <p>nous sommes un réseau de professionnels du immobilier spécialisés dans la vente et la location de maisons.</p>
            <p>nous visons à offrir aux clients un service simple et rapide, ainsi qu'une large gamme de choix.</p>
            <p>En outre, nous mettons l'accent sur la sécurité et la protection des données des clients.</p>
            <a href="#" class="btn">Afficher plus</a>
        </div>
    </section>
    <section class="sales container" id="sales">
        <!--box1-->
        <div class="box">
            <i class='bx bx-user' ></i>
            <h3>Réalisez votre rêve</h3>          
         </div>
          <!--box2-->
        <div class="box">
            <i class='bx bx-desktop' ></i>
            <h3>Commencez votre adhésion</i></h3>           
         </div>
          <!--box3-->
        <div class="box">
            <i class='bx bx-home-alt' ></i>
            <h3>Profitez de votre nouvelle maison</h3>
         </div>
    </section>
    
    <section class="newsletter container">
        <h2>Vous avez une question ? <br>Laissez-nous vous aider </h2>
        <form action="">
            <input type="email" id="email-box" placeholder="yourmail@gmail.com" required>
            <input type="submit" value="Send" class="btn">
        </form>
    </section>
   <?php include("./lib/footer.php") ?> 

   
    
      
</body>
</html>