<?php
require "includes/common.php";
?>

<!DOCTYPE html>
<!--PRODUCTS PAGE-->
<html>
    <head>
        <title>Men's Wear | Style Rack</title>
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
    
    <body style="background-color: #ffe6ff;">
       <?php
          include 'includes/header.php';
          include 'includes/check-if-added.php';
       ?>
        
        <div class="container">
          <div class="row">
            <div style="background-color:#ff3333;color: black;">
                <h2>Ethnic Wear</h2>
            </div>
          </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/fabindia.jpg" alt="">
                            <div class="caption">
                                <h3>Fabindia</h3>
                                <p>Price:Rs.3000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                     //We have created a function to check whether
                                     // this particular product is added to cart or not.
                                         if (check_if_added_to_cart(1))
                                          {
                                             //This is same as if(check_if_added_to_cart != 0)
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/manyavar.jpg" alt="">
                            <div class="caption">
                                <h3>Manyavar</h3>
                                <p>Price:Rs.4000.00</p>
                                <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(2))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/neeru's.jpg" alt="">
                            <div class="caption">
                                <h3>Neeru's</h3>
                                <p>Price:Rs.6000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(3))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/mebaz.jpg" alt="">
                            <div class="caption">
                                <h3>Mebaz</h3>
                                <p>Price:Rs.4500.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(4))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a> 
                </div> 
            </div>
            
            
            <div style="background-color:#ff3333;color: black;">
                <h2>Jeans</h2>
            </div>
            
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/dieseljeans.jpg" alt="">
                            <div class="caption">
                                <h3>Diesel</h3>
                                <p>Price:Rs.2000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(5))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/leecooper.jpg" alt="">
                            <div class="caption">
                                <h3>LeeCooper</h3>
                                <p>Price:Rs.1200.00</p>
                                <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(6))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/levisjeans.jpg" alt="">
                            <div class="caption">
                                <h3>Levis</h3>
                                <p>Price:Rs.1600.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(7))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/pepejeans.jpg" alt="">
                            <div class="caption">
                                <h3>Pepe Jeans</h3>
                                <p>Price:Rs.1900.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(8))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a> 
                </div> 
            </div>
            <div style="background-color:#ff3333;color: black;"">
                <h2>Shirts</h2>
            </div>
            <div class="row text-center content">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/8.jpg" alt="">
                            <div class="caption">
                                <h3>Peter England</h3>
                                <p>Price:Rs.1500.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(9))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/6.jpg" alt="">
                            <div class="caption">
                                <h3>Louis Philippe</h3>
                                <p>Price:Rs.1400.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(10))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/13.jpg" alt="">
                            <div class="caption">
                                <h3>Allen Solly</h3>
                                <p>Price:Rs.1000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(11))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/14.jpg" alt="">
                            <div class="caption">
                                <h3>Arrow</h3>
                                <p>Price:Rs.1100.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(12))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a> 
                </div> 
            </div>
        </div>
        <br><br>

         <?php
          include 'includes/footer.php';
         ?>
    </body>
</html>
