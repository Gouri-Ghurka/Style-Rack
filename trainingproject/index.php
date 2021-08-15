<?php
   require "./includes/common.php";

if (isset($_SESSION['email'])) {
    header('location: products.php');
    } 
 ?>
<!DOCTYPE html>
<!--INDEX PAGE-->
<html>
    <head>
        <title>StyleRack</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <?php
         include './includes/header.php';
        ?>
        
        <div  id="banner_image">
            <div class="container">
                <div class="row">  
                <div class="col-xs-12">
               <center> 
                <div id="banner_content">
                    <h1>Best Brands.Exclusive Offers.</h1>
                    <p>Flat 40% OFF on premium brands </p>
                    <a href="products.php" class ="btn btn-danger btn-lg active">Shop Now</a>
                </div>
               </center>
                </div>
                </div>
            </div>
        </div>

        <?php
          include './includes/footer.php';
          ?>
    </body>
</html>
