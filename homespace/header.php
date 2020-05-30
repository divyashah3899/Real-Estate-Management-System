<!DOCTYPE html>
<html lang="en">
  
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
   <style type="text/css">
     .dropbtn1 {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown1 {
  position: relative;
  display: inline-block;
  z-index: 1;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 30;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

}

.dropdown-content1 a:hover {background-color: #ddd;}

.dropdown1:hover .dropdown-content1 {display: block;}

.dropdown1:hover .dropbtn1 {background-color: #3e8e41;}

   </style>
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+91 738 336 7447</span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">homespace.project@gmail.com</span></a>
            </p>  
          </div>

          <div class="col-6 col-md-6 text-right">
            <?php  
            session_start();
            if(isset($_SESSION['name'])){
          echo
              "<div class='dropdown1'>".$_SESSION['name'].               
                 "&nbsp &nbsp <a href='seepost.php'>SEE POST</a>  
                <a href='changepass.php'>Change Password</a>
              <a href='logout.php'>Logout</a>
            </div>
          </div>";
            }
            else{
              echo'
            <a href="login.php" class="mr-3"><span class="d-none d-md-inline-block ml-2">Login</span></a>
            <a href="signup.php" class="mr-3"><span class="d-none d-md-inline-block ml-2">Signup</span></a>';
            }
      ?>
          </div>
      </div>
      
          
        </div>
    </div>
    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class=""><a href="index.php" class="h5 text-uppercase text-black"><strong>HomeSpace<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.php">Home</a>
                  </li>
                  <li>
                    <a href="properties-submit.php">Properties</a>
                    <!--<ul class="dropdown">
                      <li><a href="#">Buy</a></li>
                      <li><a href="#">Rent</a></li>
                      <li><a href="#">Lease</a></li>
                      <li class="has-children">
                        <a href="#">Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>-->
                  </li>
                  <li><a href="blog.php">Blog</a></li>
                 
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
