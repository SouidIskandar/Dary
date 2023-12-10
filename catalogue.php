<?php $connect = mysqli_connect("localhost","root","","dary-bd");
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
            <span>Recent</span>
            <h2>Our Featured Properties</h2>
            <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Quam, repudiandae!</p>
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

$query = "SELECT * FROM reservation" ;
$result = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($result))
{?>
   
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
                        <i class='bx bx-bath' ><span>2</span></i>
                    </div>
                </div>
            </div>
        
<?php }
    ?>    </div>





    </section>
    <?php include("./lib/footer.php") ?>
    
</body>
</html>