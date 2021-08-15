<?php
require "./includes/common.php";
?>

<!DOCTYPE html>
<!--Confirm PAGE-->
<html>
    <head>
        <title>Confirm Page</title>
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
        if(isset($_SESSION['user_id'])){
           $user_id = $_SESSION['user_id'];
           $query = "SELECT product_id FROM users_products WHERE user_id = '$user_id'";
           $result = mysqli_query($con, $query) or die(mysqli_error($con));

           while($row = mysqli_fetch_array($result)){
               $product_id = $row["product_id"];
               $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE product_id = '$product_id'";            
               $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
           }
        }
        ?>
    </body>
</html>
