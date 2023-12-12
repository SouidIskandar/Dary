<?php include("./db-connect.php");
   $search = '';
   if (isset($_GET) && $_GET && $_GET['search']){
       $search = $_GET['search'];
       $sql = "SELECT * FROM `reservation` WHERE `titre` LIKE '%" . $_GET['search'] . "%' or `description` LIKE '%" . $_GET['search'] . "%';";
   }else {
       $sql = "SELECT * FROM `reservation`";
   }

   $result = $conn->query($sql);
   $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>catalogue</title>
</head>
<body>
    <?php include("./lib/navbar.php") ?>
    <section class="properties container" id="properties">
        <div class="heading">
            <h2>Récent</h2>
        </div>
        <div class="rech container">
            <div class="rech-container">
        <form >
        <span>Recherche</span>
        <input type="text" name="search" id="search" placeholder="Recherche" value="<?= $search ?>">
        <input type="submit" value="Recherche" class="buttom"/>
    </form>
             </div>
        </div>
        
            <!--
            <div class="box">
                <img src="m1.jpg" alt="" >
                <h3>$12.999 </h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London,UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath' ><span>2</span></i>
                    </div>
                </div>
            </div>
             
             <div class="box">
                <img src="m2.jpg" alt="" >
                <h3>$12.999 </h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London,UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath' ><span>2</span></i>
                    </div>
                </div>
            </div>
             
            <div class="box">
                <img src="m3.jpg" alt="" >
                <h3>$12.999 </h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London,UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath' ><span>2</span></i>
                    </div>
                </div>
            </div>
             
            <div class="box">
                <img src="m4.jpg" alt="" >
                <h3>$12.999 </h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London,UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath' ><span>2</span></i>
                    </div>
                </div>
            </div> 
          
            <div class="box">
                <img src="m5.jpg" alt="" >
                <h3>$12.999 </h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London,UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath' ><span>2</span></i>
                    </div>
                </div>
            </div> -->
          
<div class="properties-container container">
<?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
   
            <div class="box">
                <img src="<?= $row["image"] ?>" alt="" >
                <h3><?= number_format ($row["prix"],2) ?> DT</h3>
                <div class="content">
                    <div class="text">
                        <h3><?= $row["titre"] ?></h3>
                        <p><?= $row["description"] ?></p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath'  ><span>2</span></i>
                    </div>
                </div>
            </div>
        
            <?php }
            } else {
                echo "0 results";
            }
        ?>
          </div>





    </section>
    <?php include("./lib/footer.php") ?>
    
</body>
</html>