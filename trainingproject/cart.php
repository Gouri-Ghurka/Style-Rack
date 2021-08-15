<?php
   require "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
    } 
 ?>
<!DOCTYPE html>
<!--CART PAGE-->
<html>
    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <style>
            h2{
                color: #ff0080;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <?php
          include 'includes/header.php';
          ?>
        
        <div class="container">
                 <?php
                    if(isset($_SESSION['user_id'])){
                    $user_id=$_SESSION['user_id'];
                     $query = "SELECT products.price AS Price, products.pid, products.name AS Name FROM users_products INNER JOIN products ON users_products.product_id = products.pid WHERE users_products.user_id='$user_id' and status='Added To Cart'";
                     $result = mysqli_query($con, $query)or die($mysqli_error($con));
                     if (mysqli_num_rows($result) >= 1) {
                     ?>
                <table class="table table-bordered table-striped table-responsive">
                    <thead>
                      <tr>
                       <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php
                           $sum=0;
                           while ($row = mysqli_fetch_array($result))
                            {
                              $sum+= $row["Price"];                                    
                              
                        ?>      
                        <tr>
                            <td><?php echo $row['pid']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo "Rs.".$row['Price']; ?></td>
                            <td><a href="cart-remove.php?id=<?php echo $row['pid']; ?>" class="btn btn-danger btn-block"> Remove</a> </td>
                        </tr>
                            <?php } ?>
                        <tr><td></td><td>Total</td><td><?php echo "Rs.".$sum; ?></td><td></td></tr>
                    
                        <tr><td></td><td>Apply Discount Coupon</td><td>
                            <form action="discount.php" class="form-inline" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="code" placeholder="Enter Discount Code Here" value="OFF">                
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
                        </td><td></td></tr>
                        <?php
                           if(isset($_GET['m1'])){
                                $disc=$_GET['m1'];
                            }     
                            if(isset($disc)){
                                  $sum = $sum - $sum * (0.2);
                            }
                            echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                        ?>    
                        
                   </tbody>
                   <?php
                     }else{
                    ?>
                   <div class="row_style">
                        <?php echo "<h2>Add items to the cart first!</h2>"; ?>
                       <center>
                       <img src="img/cart.jpg" alt="">
                       </center>
                   </div>
                   <?php
                     }
                    }
                   ?>
                </table>
            </div>
        
        
       <?php
          include 'includes/footer.php';
          ?>
    </body>
</html>
