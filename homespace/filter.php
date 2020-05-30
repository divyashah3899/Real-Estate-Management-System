<?php
include_once("dbconfiguration.php");
include_once("post.php");
function getpro_mob()
{
	global $conn;
    
	$get_pro = "select * from post where category='mobiles'";
	$run = mysqli_query($conn,$get_pro);
	$sql = "SELECT user.phone, post.p_id FROM user INNER JOIN post ON user.uid = post.uid";
	$result = mysqli_query($conn,$sql);
	

	while ($row = mysqli_fetch_array($result)) {
	
		$pro_phone = $row['phone'];
    
    }


	while ($row = mysqli_fetch_array($run)) {
		
		$pro_id = $row['p_id'];
		$pro_title = $row['title'];
		$pro_description = $row['description'];
		$pro_price = $row['price'];
         $pro_date = $row['date'];
		$pro_category = $row['category'];
		$pro_image1 = $row['image1'];
        $pro_image2 = $row['image2'];
        $pro_image3 = $row['image3'];
        $pro_image4 = $row['image4'];
       echo"<ul class='list'>";
        echo"<a href='single.php?p_id=".$row['p_id']."''>";
									
		echo "<li>";
		echo "	<img src ='php/upload_images/$pro_image1'/>";
      echo"<section class='list-left'>";
        
			echo "<h5 class='title'>".$pro_title."</h5>";
            echo "<span class='adprice'>Rs.".$pro_price."</span>";
			echo "</section>";
         echo"<section class='list-right'>";
         echo "<span class='adprice'>DATE:</span>";
			echo "<h5 class='title'>".$pro_date."</h5>";
        echo "</section>";
         echo"<div class='clearfix'>";
        echo"</div>";
        echo"</li>";
          echo"</a>";
        echo"<div class='clearfix'>";
        echo"</div>";
        echo"</ul>"; 
	}
}

//computer filteration
function getpro_com()
{
	global $conn;
    
	$get_pro = "select * from post where category='computer'";
	$run = mysqli_query($conn,$get_pro);
	$sql = "SELECT user.phone, post.p_id FROM user INNER JOIN post ON user.uid = post.uid";
	$result = mysqli_query($conn,$sql);
	

	while ($row = mysqli_fetch_array($result)) {
	
		$pro_phone = $row['phone'];
    
    }


	while ($row = mysqli_fetch_array($run)) {
		
		$pro_id = $row['p_id'];
		$pro_title = $row['title'];
		$pro_description = $row['description'];
		$pro_price = $row['price'];
         $pro_date = $row['date'];
		$pro_category = $row['category'];
		$pro_image1 = $row['image1'];
        $pro_image2 = $row['image2'];
        $pro_image3 = $row['image3'];
        $pro_image4 = $row['image4'];
       echo"<ul class='list'>";
        echo"<a href='single.php?p_id=".$row['p_id']."''>";
									
		echo "<li>";
		echo "	<img src ='php/upload_images/$pro_image1'/>";
      echo"<section class='list-left'>";
        
			echo "<h5 class='title'>".$pro_title."</h5>";
            echo "<span class='adprice'>Rs.".$pro_price."</span>";
			echo "</section>";
        echo"<section class='list-right'>";
         echo "<span class='adprice'>DATE:</span>";
			echo "<h5 class='title'>".$pro_date."</h5>";
        echo "</section>";
         echo"<div class='clearfix'>";
        echo"</div>";
        echo"</li>";
          echo"</a>";
        echo"<div class='clearfix'>";
        echo"</div>";
        echo"</ul>"; 

	}
}

//camera filteration
function getpro_cam()
{
	global $conn;
    
	$get_pro = "select * from post where category='camera'";
	$run = mysqli_query($conn,$get_pro);
	$sql = "SELECT user.phone, post.p_id FROM user INNER JOIN post ON user.uid = post.uid";
	$result = mysqli_query($conn,$sql);
	

	while ($row = mysqli_fetch_array($result)) {
	
		$pro_phone = $row['phone'];
    
    }


	while ($row = mysqli_fetch_array($run)) {
		
		$pro_id = $row['p_id'];
		$pro_title = $row['title'];
		$pro_description = $row['description'];
		$pro_price = $row['price'];
         $pro_date = $row['date'];
		$pro_category = $row['category'];
		$pro_image1 = $row['image1'];
        $pro_image2 = $row['image2'];
        $pro_image3 = $row['image3'];
        $pro_image4 = $row['image4'];
       echo"<ul class='list'>";
        echo"<a href='single.php?p_id=".$row['p_id']."''>";
									
		echo "<li>";
		echo "	<img src ='php/upload_images/$pro_image1'/>";
      echo"<section class='list-left'>";
        
			echo "<h5 class='title'>".$pro_title."</h5>";
            echo "<span class='adprice'>Rs.".$pro_price."</span>";
			echo "</section>";
        echo"<section class='list-right'>";
         echo "<span class='adprice'>DATE:</span>";
			echo "<h5 class='title'>".$pro_date."</h5>";
        echo "</section>";
         echo"<div class='clearfix'>";
        echo"</div>";
        echo"</li>";
          echo"</a>";
        echo"<div class='clearfix'>";
        echo"</div>";
        echo"</ul>"; 

	}
}

function getpro_tablets()
{
	global $conn;
    
	$get_pro = "select * from post where category='tablets'";
	$run = mysqli_query($conn,$get_pro);
	$sql = "SELECT user.phone, post.p_id FROM user INNER JOIN post ON user.uid = post.uid";
	$result = mysqli_query($conn,$sql);
	

	while ($row = mysqli_fetch_array($result)) {
	
		$pro_phone = $row['phone'];
    
    }


	while ($row = mysqli_fetch_array($run)) {
		
		$pro_id = $row['p_id'];
		$pro_title = $row['title'];
		$pro_description = $row['description'];
		$pro_price = $row['price'];
         $pro_date = $row['date'];
		$pro_category = $row['category'];
		$pro_image1 = $row['image1'];
        $pro_image2 = $row['image2'];
        $pro_image3 = $row['image3'];
        $pro_image4 = $row['image4'];
       echo"<ul class='list'>";
        echo"<a href='single.php?p_id=".$row['p_id']."''>";
									
		echo "<li>";
		echo "	<img src ='php/upload_images/$pro_image1'/>";
      echo"<section class='list-left'>";
        
			echo "<h5 class='title'>".$pro_title."</h5>";
            echo "<span class='adprice'>Rs.".$pro_price."</span>";
			echo "</section>";
        echo"<section class='list-right'>";
         echo "<span class='adprice'>DATE:</span>";
			echo "<h5 class='title'>".$pro_date."</h5>";
        echo "</section>";
         echo"<div class='clearfix'>";
        echo"</div>";
        echo"</li>";
          echo"</a>";
        echo"<div class='clearfix'>";
        echo"</div>";
        echo"</ul>"; 

	}
}

function getpro_lap()
{
	global $conn;
    
	$get_pro = "select * from post where category='laptops'";
	$run = mysqli_query($conn,$get_pro);
	$sql = "SELECT user.phone, post.p_id FROM user INNER JOIN post ON user.uid = post.uid";
	$result = mysqli_query($conn,$sql);
	

	while ($row = mysqli_fetch_array($result)) {
	
		$pro_phone = $row['phone'];
    
    }


	while ($row = mysqli_fetch_array($run)) {
		
		$pro_id = $row['p_id'];
		$pro_title = $row['title'];
		$pro_description = $row['description'];
		$pro_price = $row['price'];
         $pro_date = $row['date'];
		$pro_category = $row['category'];
		$pro_image1 = $row['image1'];
        $pro_image2 = $row['image2'];
        $pro_image3 = $row['image3'];
        $pro_image4 = $row['image4'];
       echo"<ul class='list'>";
        echo"<a href='single.php?p_id=".$row['p_id']."''>";
									
		echo "<li>";
		echo "	<img src ='php/upload_images/$pro_image1'/>";
      echo"<section class='list-left'>";
        
			echo "<h5 class='title'>".$pro_title."</h5>";
            echo "<span class='adprice'>Rs.".$pro_price."</span>";
			echo "</section>";
        echo"<section class='list-right'>";
        echo "<span class='adprice'>DATE:</span>";
			echo "<h5 class='title'>".$pro_date."</h5>";
        echo "</section>";
         echo"<div class='clearfix'>";
        echo"</div>";
        echo"</li>";
          echo"</a>";
        echo"<div class='clearfix'>";
        echo"</div>";
        echo"</ul>"; 

	}
}
?>