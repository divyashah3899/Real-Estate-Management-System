<?php
  include 'dbconnection.php';
include 'startUpAction.php';

  $pid = $_GET['pid'];

  $q = "select * from properties where property_id='$pid'";
  $res= $con->query($q);
  if($res->num_rows)
  {
    while($row = $res->fetch_assoc())
    {
            // $img = $row["img1"];
            // echo "<img src ='upload_images/$img'/>";
            // echo $row["user_type"] ;
            // echo $row["property_type"];
            // echo  $row["city"];
            // echo $row["price"];
            // echo '<button><a href=property-details.php?pid='.$row["property_id"].'>See Details</a></button>';
            // //echo "<input type='submit' value='Details' name='Submit' onclick(Details='$row['property_id'])>";
            // // echo "<input type='submit' value='Details' name='Submit')>";
            $user_id = $row['user_id'];
            echo $user_id;
            $user_type = $row["user_type"];
            $property_for = $row["property_for"];
            $property_type = $row["property_type"];
            $address = $row["address"];
            $landmark = $row["landmark"];
            $pincode = $row["pincode"];
            $city = $row["city"];
            $state = $row["state"];
            $area = $row["area"];
            $bedrooms = $row["bedrooms"];
            $bathrooms = $row["bathrooms"];
            $balconies = $row["balconies"];
            $poojaroom = $row["poojaroom"];
            $studyroom = $row["studyroom"];
            $serventroom = $row["serventroom"];
            $storeroom = $row["storeroom"];
            $furnishing = $row["furnishing"];
            $parking = $row["parking"];
            $availability = $row["availability"];
            $age = $row["property_age"];
            $price = $row["price"];
            $img1 = $row["img1"];
            $img2 = $row["img2"];
            $img3 = $row["img3"];
            $img4 = $row["img4"];
            $img5 = $row["img5"];
            $img6 = $row["img6"];
            $img7 = $row["img7"];
          


          }
          $nq="select * from user where user_id='$user_id'";
  $nres= $con->query($nq);
  if($nres->num_rows)
  {
    while($nrow = $nres->fetch_assoc())
    {
      $no=$nrow['mobile'];
      $email=$nrow['email'];
    }
  }
    }
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HomeSpace</title>
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
    
  </head>
  <body>
  
  <?php include 'header.php'; ?>

<?php
    echo "<div class='site-blocks-cover overlay' style='background-image: url(upload_images/$img1');' data-aos='fade' data-stellar-background-ratio='0.5'>";
?>
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
            <h1 class="mb-2"><?php echo $address; ?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?php echo '₹'.$price; ?></strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="upload_images/<?php echo $img2; ?>" alt="Image" class="img-fluid"></div>
                <div><img src="upload_images/<?php echo $img3; ?>" alt="Image" class="img-fluid"></div>
                <div><img src="upload_images/<?php echo $img4; ?>" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?php echo '₹'.$price; ?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number"><?php echo $bedrooms; ?> <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number"><?php echo $bathrooms; ?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number"><?php echo $area; ?></span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                  <strong class="d-block"><?php echo $property_type; ?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                  <strong class="d-block"><?php echo $age; ?></strong>
                </div>
              </div>
              <h2 class="h4 text-black">More Info</h2>
              <p>Balconies:<?php echo $balconies; ?></p>
              <p>Furnishing:<?php echo $furnishing; ?>
              <p>Additional Rooms:<?php echo "<br>".$poojaroom."<br>".$serventroom."<br>".$storeroom."<br>".$studyroom."<br>"; ?></p>
              <p>Reserved Parking:<?php echo $parking; ?></p>
              <p>Availability:<?php echo $availability; ?></p>
              <h2 class="h4 text-black">Address</h2>
              <p><?php echo $address.",".$landmark.",".$city."-".$pincode ; ?></p>
              <h2 class="h4 text-black">Contact:</h2>
              <p>Mobile No. :<?php echo $no; ?></p>
              <p>Email:<?php echo $email; ?></p> 


              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Property Gallery</h2>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="upload_images/<?php echo $img1; ?>" class="image-popup gal-item"><img src="upload_images/<?php echo $img1; ?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="upload_images/<?php echo $img2; ?>" class="image-popup gal-item"><img src="upload_images/<?php echo $img2; ?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="upload_images/<?php echo $img3; ?>" class="image-popup gal-item"><img src="upload_images/<?php echo $img3; ?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="upload_images/<?php echo $img4; ?>" class="image-popup gal-item"><img src="upload_images/<?php echo $img4; ?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="upload_images/<?php echo $img5; ?>" class="image-popup gal-item"><img src="upload_images/<?php echo $img5; ?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="upload_images/<?php echo $img6; ?>" class="image-popup gal-item"><img src="upload_images/<?php echo $img6; ?>" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="upload_images/<?php echo $img7; ?>" class="image-popup gal-item"><img src="upload_images/<?php echo $img7; ?>" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

          </div>
          
        </div>
      </div>
    </div>

    
     <?php
    include 'footer.php';
?>

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