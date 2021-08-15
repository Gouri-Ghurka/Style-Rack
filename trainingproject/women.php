<?php
require "includes/common.php";
?>

<!DOCTYPE html>
<!--PRODUCTS PAGE-->
<html>
    <head>
        <title>Women's Wear | Style Rack</title>
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
    
    <body style="background-color: #ffe6ee;">
       <?php
          include 'includes/header.php';
          include 'includes/check-if-added.php';
       ?>
        
        <div class="container">
          <div class="row">
            <div style="background-color:#ff0066;color: black;">
                <h2>Western Wear</h2>
            </div>
          </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/veromoda.jpg" alt="">
                            <div class="caption">
                                <h3>Vero Moda</h3>
                                <p>Price:Rs.2000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                     //We have created a function to check whether
                                     // this particular product is added to cart or not.
                                         if (check_if_added_to_cart(13))
                                          {
                                             //This is same as if(check_if_added_to_cart != 0)
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/forever21.jpg" alt="">
                            <div class="caption">
                                <h3>Forever 21</h3>
                                <p>Price:Rs.1500.00</p>
                                <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(14))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/allensolly.jpg" alt="">
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
                                         if (check_if_added_to_cart(15))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/ginger.jpg" alt="">
                            <div class="caption">
                                <h3>Ginger</h3>
                                <p>Price:Rs.800.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(16))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a> 
                </div> 
            </div>
            
            
            <div style="background-color:#ff0066;color: black;">
                <h2>Ethnic Wear</h2>
            </div>
            
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/aurela.jpg" alt="">
                            <div class="caption">
                                <h3>Aurelas</h3>
                                <p>Price:Rs.1200.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(17))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/biba.jpg" alt="">
                            <div class="caption">
                                <h3>Biba</h3>
                                <p>Price:Rs.1500.00</p>
                                <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(18))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/wills.jpg" alt="">
                            <div class="caption">
                                <h3>Wills</h3>
                                <p>Price:Rs.1300.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(19))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/wneeru's.jpg" alt="">
                            <div class="caption">
                                <h3>Neeru's</h3>
                                <p>Price:Rs.3000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(20))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        } ?>
                            </div>
                        </div>
                    </a> 
                </div> 
            </div>
            <div style="background-color:#ff0066;color: black;"">
                <h2>Saree</h2>
            </div>
            <div class="row text-center content">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <div class="thumbnail">
                            <img src="img/banarsi.jpg" alt="">
                            <div class="caption">
                                <h3>Banarsi Saree</h3>
                                <p>Price:Rs.5000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(21))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/chiffon.jpg" alt="">
                            <div class="caption">
                                <h3>Chiffon Saree</h3>
                                <p>Price:Rs.2400.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(22))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/cotton.jpg" alt="">
                            <div class="caption">
                                <h3>Handloom Cotton Saree</h3>
                                <p>Price:Rs.4000.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(23))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                            <img src="img/silk.jpg" alt="">
                            <div class="caption">
                                <h3>Silk Saree</h3>
                                <p>Price:Rs.3500.00</p>
                                 <?php
                                 if (!isset($_SESSION['email'])) { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                 <?php
                                 } else {
                                         if (check_if_added_to_cart(24))
                                          {
                                             
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                          }
                                         else 
                                           { ?>
                                             <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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