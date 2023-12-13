<?php include("./athan.php")?>
<div class="nav container">
            <a href="http://localhost/dary/index.php" class="logo"><i class='bx bx-home-heart'></i>Dary</a>
            <input type="checkbox" name="" id="menu">
            <label for="menu" i class='bx bx-menu' id="menu-icon" ></i></label>
            <ul class="navbar">
                <li><a href="http://localhost/dary/index.php">Accueil</a></li>
                <li><a href="http://localhost/dary/index.php#Apropos">A propos</a></li>
                <li><a href="http://localhost/dary/contact.php">Contact</a></li>
                <li><a href="http://localhost/dary/catalogue.php">catalogue</a></li>
            </ul>
            <?php if($logedin == TRUE){ ?>
                <form action="">
                <a href="" class="btn">déconnecter</a>
             <?php }else{ ?>
              <a href="login.php" class="btn">Se connecter</a>
        <?php } ?>
    </form>

        
        </div>


    