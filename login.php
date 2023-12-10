<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Dary</title>
</head>

    <header>
         <?php include("./lib/navbar.php") ?>
    
    </header>
    <div class="login container">
      <div class="login-container">
         <h2>Connectez-vous </h2>
         <p>Connectez-vous avec vos données que vous avez renseignées lors de votre inscription</p>
         <form action="">
            <span>Enter your E-mail adress</span>
            <input type="email" name="" id="" placeholder="yourmail@gmail.com" required>
            <span>Enter your password</span>
            <input type="password" name="" id="" placeholder="password" required>
            <input type="submit" value="Log In" class="buttom">
            <a href="#">Forget Password ?</a>
         </form>
         <a href="Sign-up.php" class="btn">Sign up now</a>
        </div>
      
      <div class="login-image">
         <img src="image\login.png" alt="" class="imlog">
      </div>
    </div>
<?php include("./lib/footer.php") ?>



   
    
      
</body>
</html>