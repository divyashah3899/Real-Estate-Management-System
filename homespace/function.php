<?php
include_once("dbconfiguration.php");
include_once("post.php");
function getpro()
{
	global $conn;
    
	$get_pro = "select * from post";
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
        $pro_date = $row['date'];
		$pro_price = $row['price'];
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





function gethelp(){


	global $conn;

	$des = $_GET['description'];

	$sql = "INSERT INTO `helpl` (messg) VALUES ('$des')";
	
	$result = mysqli_query($conn,$sql);
	echo "$sql";
	if($result)
	{
		//header('Location: ../index.php');
		
		//echo"<script>alert('Your Query is being sent!')</script>";
	    
	    echo "<script>alert('Your Query is being sent!');
		window.location.href='../index.php';
		</script>";
	}
	else
	{
		echo "not";

	}
	

}
// help

if(isset($_GET['helpsubmit']))
{
	gethelp();
}

function cart()
{
	global $conn;

	$sql = "SELECT user.uid, post.p_id FROM user INNER JOIN post ON user.uid = post.uid";


}

?>
