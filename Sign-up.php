<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php include("./lib/navbar.php") ?>
    <div class="login container">
      <div class="login-container">
         <h2>inscrivez-vous </h2>
         <form action="">
         <span>Nom</span>
            <input type="text" name="" id="" placeholder="Entrer votre nom" required>
            <span>Prénom</span>
            <input type="text" name="" id="" placeholder="Entrer votre prénom" required>
            <span>Adresse</span>
            <input type="text" name="" id="" placeholder="Entrer votre adresse" required>
            <span>E-mail</span>
            <input type="email" name="" id="" placeholder="yourmail@gmail.com" required>
            <span>Mot de passe</span>
            <input type="password" name="" id="" placeholder="password" required>
            <input type="submit" value="S'inscrire" class="buttom">
         </form>
        </div>
      
      <div class="login-image">
         <img src="image\login.png" alt="" class="imlog">
      </div>
    </div>
<?php include("./lib/footer.php") ?>
    
</body>
</html>