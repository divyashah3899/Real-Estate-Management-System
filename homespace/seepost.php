
<?php 
	include 'dbconnection.php';
 	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Your Posts</title>
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
    <?php
    include 'header.php';
?>


<?php 
	$u_id=$_SESSION['user_id'];
 	$q="select * from properties where user_id='$u_id'";

 	$res= $con->query($q);
 	$count=mysqli_num_rows($res);
 	if($res->num_rows)
        {
      		echo "<table border='1'>";
      		echo "<tr>";
      		echo "<th>Image</th>";
      		echo "<th>User Type</th>";
      		echo "<th>Property Type</th>";
      		echo "<th>City</th>";
      		echo "<th>Price</th>";
      		echo "<th>For Details</th>";
      		echo "<th>To Delete</th>";
        	while($row = $res->fetch_assoc())
        	{
        		$img = $row["img1"];
        		echo "<table border='1'>";
        		echo "<tr>";
        		echo "<td><img src ='upload_images/$img' height='100px' width='100px'/></td>";
        		echo "<td>".$row["user_type"]."</td>" ;
        		echo "<td>".$row["property_type"]."</td>";
        		echo "<td>".$row["city"]."</td>";
        		echo "<td>".$row["price"]."</td>";
        		echo '<td><button><a href=property-details.php?pid='.$row["property_id"].'>See Details</a></button></td>';
        		echo '<td><button><a href=delete.php?pid='.$row["property_id"].'>Delete</a></button></td>';
        		echo "</tr>";

        		
        		//echo "<input type='submit' value='Details' name='Submit' onclick(Details='$row['property_id'])>";
        		// echo "<input type='submit' value='Details' name='Submit')>";

        	}
        	echo "</table>";
        	echo "You Have Posted ".$count." Request.";
        }
?>
<?php
    include 'footer.php';
?>

</body>
</html>