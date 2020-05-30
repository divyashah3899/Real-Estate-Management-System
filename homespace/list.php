<?php
	include 'dbconnection.php';
	?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
<?php include 'header.php'; ?>
<?php
		
     if(isset($_POST['property_type']) && isset($_POST['property_for']) && isset($_POST['furnishing']) && isset($_POST['city']) && isset($_POST['bedrooms']) && isset($_POST['bathrooms']) && isset($_POST['parking'])) 
      {
        $p_type=$_POST['property_type'];
        $p_for=$_POST['property_for'];
        $furnishing=$_POST['furnishing'];
        $city=$_POST['city'];
        $bedrooms=$_POST['bedrooms'];
        $bathrooms=$_POST['bathrooms'];
        $parking=$_POST['parking'];
        

        
        $q="select * from properties where property_type='$p_type' and property_for='$p_for' and furnishing='$furnishing' and city='$city' and bedrooms='$bedrooms' and bathrooms='$bathrooms' and parking='$parking' ";
        
        $res= $con->query($q);
        // echo ''.mysqli_num_rows($res);
        if($res->num_rows)
        {
            echo "<table border='0'>";
            echo "<tr>";
            echo "<th>Image</th>";
            echo "<th>User Type</th>";
            echo "<th>Property Type</th>";
            echo "<th>City</th>";
            echo "<th>Price</th>";
            echo "<th>For Details</th>";
            echo '</tr>';
      
        	while($row = $res->fetch_assoc())
        	{
                $img = $row["img1"];
               echo "<tr>";
                echo "<td><img src ='upload_images/$img' height='100px' width='100px'/></td>";
                echo "<td>".$row["user_type"]."</td>" ;
                echo "<td>".$row["property_type"]."</td>";
                echo "<td>".$row["city"]."</td>";
                echo "<td>".$row["price"]."</td>";
                echo '<td><button><a href=property-details.php?pid='.$row["property_id"].'>See Details</a></button></td>';
                echo '</tr>';
        		// $img = $row["img1"];
        		// echo "<img src ='upload_images/$img'/>";
        		// echo $row["user_type"] ;
        		// echo $row["property_type"];
        		// echo  $row["city"];
        		// echo $row["price"];
        		// echo '<button><a href=property-details.php?pid='.$row["property_id"].'>See Details</a></button>';
        		// //echo "<input type='submit' value='Details' name='Submit' onclick(Details='$row['property_id'])>";
        		// echo "<input type='submit' value='Details' name='Submit')>";

        	}
                echo '</table>';
        }
     }	
?>





<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main1.js"></script>
    </form>
    <?php
     include 'footer.php';
?>

</body>
</html>