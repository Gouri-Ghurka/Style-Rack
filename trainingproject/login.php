<?php
   require './includes/common.php';
    if(isset($_SESSION['email'])){
       header('location:products.php');
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"/>
       <title>Login | Style Rack</title>
    
       <style>
            .text-warning{
                color: red;
            }
        </style>
</head>
<body>
     <!-- Header -->
     <?php
            include './includes/header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
           <div class="container">
            <div class="row row_style">
                
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          LOGIN  
                        </div>
                        <div class="panel-body">
                           <p class="text-warning">Login to make a purchase</p>
                           <form method="post" action="login_script.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" 
                                           placeholder="E-mail" required
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                 
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" 
                                           placeholder="Password" pattern=".{6,}" title="Password should contain atleast 6 charaters" required>
                                </div>
                                
                               <div class="form-group">
                                   <div>
                                       <?php
                                       if(isset($_GET['m1'])){
                                       echo $_GET['m1'];
                                       }
                                       ?>
                                   </div>
                               </div>
                               
                                  <button type="submit" class="btn btn-primary">Login</button>
                                  
                                <div class="form-group">
                                    <p><a href="forgotpss.php">Forgot Password?</a></p>
                                </div>

                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account?<a href="signup.php" >Register</a>
                        </div>
                    </div>
                </div>
             </div>
           </div>
        
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include './includes/footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>