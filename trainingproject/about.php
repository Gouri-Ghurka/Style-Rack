<?php
   require "./includes/common.php";
 ?>
<!DOCTYPE html>
<!--INDEX PAGE-->
<html>
    <head>
        <title>About Us|Style Rack</title>
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
              
            <div class="row">
                <div class="col-md-4">
                  <h3 class="about-h3 text-uppercase">Who We Are</h3>                  
                  <div class="box-padding-10">
                  <img src="./img/ABOUT.png" alt="" class="img-responsive img-circle about-img">  
                  
                  <h2 style="font-style: italic">Our Mission</h2>
                       <p class="text-muted about-p" style="font-style: italic;">
                       To be the best at what we do.
                       We aim to serve our customers with the best products available across the world 
                       at affordable prices without any compromise in quality.</p>               
                  </div>
                </div>

                <div class="col-md-4">
                  <h3 class="about-h3">OUR HISTORY</h3>
                  <div class="box-padding-10">
                 
                  <p class="p-bold p-blue">2006 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2008 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2012 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2020 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>
                </div>
                </div>

                <div class="col-md-4">
                  <h3 class="about-h3">OPPURTUNITIES</h3>
                  <div class="box-padding-10">
                    <p class="p-bold">Availabe Roles</p>
                    <div class="box-padding-left">
                      <p class="text-muted">
                        1. Jr./Sr. Web Developer<br>
                        2. Graphic Designer<br>
                        3. Web Designer<br>
                        4. Front End Developer<br>
                        5. Back End Developer<br>
                        6. Database Admin<br>
                        7 .System Admin<br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <div style="margin-top: 50px">
        <?php
          include './includes/footer.php';
        ?>
        </div>
    </body>
</html>