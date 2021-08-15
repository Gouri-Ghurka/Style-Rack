<?php
   require "./includes/common.php";
 ?>
<!DOCTYPE html>
<!--INDEX PAGE-->
<html>
    <head>
        <title>Products Page|Style Rack</title>
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
         include './includes/header.php';
        ?>
        
          <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        $email = $_SESSION['email'];
                        echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
                </div>

                <!-- Row 1 -->
                <div class="row">
                    <center>
                    <div class="col-md-4  col-md-offset-2">
                        <div class="panel panel-default text-center">
                           <div class="panel-body">
                               <a href="men.php">
                                   <center><img src="img/men.jpg" class="img-responsive img-pdt" alt=""></center>
                               <div class="caption">
                                 <h2>Men's Fashion</h2>
                                 <p>Create your Individuality</p>
                               </div>
                              </a>
                            </div>
                        </div>
                    </div>
                
                   <div class="col-md-4">
                        <div class="panel panel-default text-center">
                           <div class="panel-body">
                             <a href="women.php">
                                 <center><img src="img/women.jpg" class="img-responsive img-pdt" alt=""></center>
                               <div class="caption">
                                 <h2>Women's Fashion</h2>
                                 <p>Style your Confidence</p>
                               </div>
                              </a>
                           </div>
                        </div>
                    </div>
                    </center>
                </div>   
            </div>
          </div>
 
        <?php
          include './includes/footer.php';
          ?>
    </body>
</html>