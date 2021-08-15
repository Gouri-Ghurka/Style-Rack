<?php
  require "includes/common.php";
   if (!isset($_SESSION['email'])) {
      header('location: index.php');
}
?>

<!DOCTYPE html>
<!--SUCCESS PAGE-->
<html>
    <head>
        <title>Success Page|Style Rack</title>
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
          require 'confirm.php';
        ?>
    
        <div class="container">
        <div class="row_style jumbotron">
           <center>
              <h1>Your order is confirmed.</h1>
              <h3>Thank You for shopping with us.Your ordered will be delivered shortly.</h3>
              <h4><a href="products.php">Click Here</a> to purchase another item</h4>
           </center>
        </div>
        </div>
        
       <?php
          include 'includes/footer.php';
        ?>
    </body>
</html>