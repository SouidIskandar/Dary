<?php 
include("./db-connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
session_start();
$firstname = $_POST['nom'];
$lastname = $_POST['prenom'];
$adress = $_POST['adresse'];
$gmail = $_POST['email'];
$password = $_POST['password'];

if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{
   $query = "insert into signup (nom, prenom, adresse, email, password) values('$firstname','$lastname','$adress','$gmail','$password ')";

   mysqli_query($conn,$query);
   echo"<script type='text/javascript'> alter('Successfully Register')</script>";
}  
else{
   echo "<script>alert('Error : Please fill all fields and use a valid email address');</script>";
}
}
?>

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
         <form action="" method="POST">
         <span>Nom</span>
            <input type="text" name="nom" id="" placeholder="Entrer votre nom" required>
            <span>Prénom</span>
            <input type="text" name="prenom" id="" placeholder="Entrer votre prénom" required>
            <span>Adresse</span>
            <input type="text" name="adresse" id="" placeholder="Entrer votre adresse" required>
            <span>E-mail</span>
            <input type="email" name="email" id="" placeholder="yourmail@gmail.com" required>
            <span>Mot de passe</span>
            <input type="password" name="password" id="" placeholder="password" required>
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