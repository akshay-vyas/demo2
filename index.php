<?php
include('import.php');

$page = $_SERVER['PHP_SELF'];
$sec = "3";

echo $num;


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Smart Garbage</title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

 
    <div class="page">
    
    
    <div id="colorlib-page">
     
   
      <!-- END slider -->
<?php
if($num == 1)
{
	?>
      <section class="ftco-section about-section">
        <div class="container">
          <div class="row d-flex" data-scrollax-parent="true">
            <div class="col-md-4 author-img" style="background-image: url(empty.ico);" data-scrollax=" properties: { translateY: '-70%'}"></div>
            
            <div class="col-md-6 wrap ftco-animate">
              <div class="about-desc">
                <h1 class="bold-text">Smart<br> Garbage</h1>
                <div class="p-5">
                  <h2 class="mb-5">Hi! Garbage is <span style="color:green"> <b>empty</b></span></h2>
                  
                  <p><a href="#">1 %</a></p>
                
                  <h5>Contact me here!</h5>
                  <p>Email: <a href="#">cleaners@pes.edu</a></p>
                  <p>Phone: <a href="#">080- 8512345</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
  }
  ?>



  <?php
if($num ==2)
{
	?>
      <section class="ftco-section about-section">
        <div class="container">
          <div class="row d-flex" data-scrollax-parent="true">
            <div class="col-md-4 author-img" style="background-image: url(half.png);" data-scrollax=" properties: { translateY: '-70%'}"></div>
            
            <div class="col-md-6 wrap ftco-animate">
              <div class="about-desc">
                <h1 class="bold-text">Smart<br> Garbage</h1>
                <div class="p-5">
                  <h2 class="mb-5">Hi! garbage is <span style="color:yellow"> <b>half full</b></span></h2>
                  
                  <p><a href="#">50 %</a></p>
                
                  <h5>Contact me here!</h5>
                  <p>Email: <a href="#">cleaners@pes.edu</a></p>
                  <p>Phone: <a href="#">080- 8512345</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
  }
  ?>



  <?php
if($num ==3)
{
	?>
      <section class="ftco-section about-section">
        <div class="container">
          <div class="row d-flex" data-scrollax-parent="true">
            <div class="col-md-4 author-img" style="background-image: url(full.png);" data-scrollax=" properties: { translateY: '-70%'}"></div>
           
            <div class="col-md-6 wrap ftco-animate">
              <div class="about-desc">
                <h1 class="bold-text">Smart<br> Garbage</h1>
                <div class="p-5">
                  <h2 class="mb-5">Hi! garbage is<span style="color:red"> <b>full</b></span></h2>
                  
                  <p><a href="#">90 %</a></p>
                
                  <h5>Contact me here!</h5>
                  <p>Email: <a href="#">cleaners@pes.edu</a></p>
                  <p>Phone: <a href="#">080- 8512345</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
  }
  ?>

      
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
             
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contact</h2>
                <p class="h3 email"><a href="#">cleaners@pes.edu.com</a></p>
                <h3>Created by : Hussain & Sushma</h3>
              </div>
            </div>
          </div>
        
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>