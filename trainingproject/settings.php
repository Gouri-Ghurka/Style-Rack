<?php
  require "./includes/common.php";
    if (!isset($_SESSION['email'])) {
      header('location: index.php');
   }
?>

<!DOCTYPE html>
<!--SETTINGS-->
<html>
    <head>
        <title>Settings|Style Rack</title>
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
          include 'includes/header.php';
         ?>
        
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1>Change Password</h1> 
                    <form action="settings_script.php" method="POST">
                         <div class="form-group">
                             <input type="password" class="form-control" name="OldPassword" placeholder="Old Password"
                                    required>
                         </div> 
                         <div class="form-group">
                             <input type="password" class="form-control" name="NewPassword" placeholder="New Password"
                                     pattern=".{6,}" title="Password should contain atleast 6 charaters" required>
                         </div> 
                         <div class="form-group">
                             <input type="password" class="form-control" name="NewPasswordRe" placeholder="Re-type New Password"
                                      pattern=".{6,}" title="Password should contain atleast 6 charaters" required>
                         </div>
                         <?php 
                          if(isset($_GET['m1'])){
                          echo $_GET['m1'];
                           }                      
                        ?>

                          <button type="submit" class="btn btn-primary">
                                    Change
                          </button>
                                
                      </form>
                </div>
            </div>
        </div>
        
       <?php
          include 'includes/footer.php';
          ?>
    </body>
</html>