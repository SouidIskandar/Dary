<?php
    if (isset($_POST) && $_POST){
        include_once("db-connect.php");

        $sql = "INSERT INTO `contact` (`email`, `message`) 
        VALUES ('" . $_POST['email'] . "', '" . $_POST['message'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
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
            <span>Entrer votre message</span>
            <textarea name="message" id="" cols="30" rows="10"></textarea><br><br>
            <input type="submit" value="envoyer" class="buttom">
         </form>
         
        
      
      <div class="login-image">
         <img src="image\login.png" alt="" class="imlog">
      </div>
    </div></div>
<?php include("./lib/footer.php") ?>



   
    
      
</body>
</html>