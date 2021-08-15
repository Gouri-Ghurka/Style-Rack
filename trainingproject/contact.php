<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Contact | Style Rack</title>
</head>
<body>
  <!-- Header -->
  <?php
            include './includes/header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
          <div class="container">
              <div class="row">
                  <div class="col-xs-6 col-xs-offset-3">
                    <img src="./img/live-support.gif" class="img-responsive live-support-img" alt="Live Support">
                  </div>
              </div>  
          <div class="row">
              <div class="col-md-8">
                <h2 class="p-bold">Live Support</h2>
                <div class="box-padding-10">
                <h3>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h3>
                <h5>We are always here to serve you.</h5>
                <h4>For any query please fill the form below.Our team will get back to you within no time.</h4>
              </div>
              </div>

              <div class="col-md-4">
                  <img src="./img/contactus.jpg" class="img-responsive live-support-img" alt="Contact us">
              </div>
            </div>

            <div class="row content">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
              </div>
              </div>

              <div class="col-md-5">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">402, Plot No: 20, Sagar Society,Road No: 2,</p>
                  <p class="text-muted">Banjara Hills, Hyderabad, Telangana-500034.</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted">Phone : +91-123-0000000</p>
                  <p class="text-muted">Email : stylerack@xyz.com</p>                 
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Main End -->
  
    
    <?php
        include './includes/footer.php';
    ?>
   
</body>
</html>