<?php 
session_start();
include("./db-connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

$gmail = $_POST['email'];
$password = $_POST['password'];

if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{
   $query = "select * from signup where email = '$gmail' limit 1";
   $result = mysqli_query($conn, $query);

   if($result)
   {
   if($result && mysqli_num_rows($result) > 0)
   {
      $user_data = mysqli_fetch_assoc($result);

      if($user_data['password'] == $password)
      {
         header("Location: index.php");
         die;
      }
   }
   }
   echo"<script type='text/javascript'> alter('Successfully Register')</script>";
}
else echo "<script>alert('Error : Please fill all fields and use a valid email address');</script>";
}
?>
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
         <form action="" method="POST">
            <span>Entrer votre adresse E-mail</span>
            <input type="email" name="email" id="" placeholder="yourmail@gmail.com" required>
            <span>Entrer votre mot de passe</span>
            <input type="password" name="password" id="" placeholder="password" required>
            <input type="submit" value="Se connecter" class="buttom">
            <a href="#">Mot de passe oublié ?</a>
         </form>
         <a href="Sign-up.php" class="btn">S'inscrire</a>
        
      
      <div class="login-image">
         <img src="image\login.png" alt="" class="imlog">
      </div>
    </div></div>
<?php include("./lib/footer.php") ?>



   
    
      
</body>
</html>