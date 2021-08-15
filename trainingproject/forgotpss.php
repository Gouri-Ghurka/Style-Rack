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
        <title>Forgot Password|Stylerack</title>
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
        
         <div class="container">
            <div class="row row_style">
                
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          New Password 
                        </div>
                        <div class="panel-body">
                           <p>Please enter your e-mail address.A one time password will be sent to your e-mail
                               address using which you can log in.Once logged in reset your password. </p>
                           <form action="login_script2.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                </div>
                                <!--<button type="submit" class="btn btn-primary" style="background-color: whitesmoke; color: blue;">
                                    Submit
                                </button>-->
                               <h3 style="color: red;">Enter OTP</h3>
                               <div class="form-group">
                                <input class="form-control" type="text" value="3456">
                            </div>
                       
                            <button type="submit" class="btn btn-primary" style="background-color: whitesmoke; color: blue;">
                                Submit
                            </button>
                               
                                <div class="form-group">
                                   <div>
                                       <?php
                                       if(isset($_GET['m1'])){
                                       echo $_GET['m1'];
                                       }
                                       ?>
                                   </div>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        
        
        
        <?php
          include './includes/footer.php';
        ?>
    </body>
</html>