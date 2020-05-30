<?php
include_once("dbconfiguration.php");
function get_cat_by_opt()
{
	global $conn;
	$qry = "select * from categories";
	$result = mysqli_query($conn, $qry);
	$recoedExists = mysqli_num_rows($result);
	if($recoedExists != 0)
	{
		echo "1";
			echo "<li>ALL CATEGORIES</li>";
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			
		$cid = $row['cid'];
		$c_title = $row['c_title'];

		echo "<option><a href='#'>$c_title</a></option>";
	}
	}
	else
	{
		echo "0";
	}

	
}
function get_cat_by_icon()
{
	global $conn;
	$qry = "select * from categories";
	$result = mysqli_query($conn, $qry);
	$recoedExists = mysqli_num_rows($result);
	if($recoedExists != 0)
	{
		echo "1";
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			
		$cid = $row['cid'];
		$c_title = $row['c_title'];

		//echo "<option><a href='#'>$c_title</a></option>";
		echo "<a href='".$row['c_title'].".php'><i class='fa fa-fw ".$row['icon']."'></i><span>".$c_title."</span></a>";

	}
	}
	else
	{
		echo "0";
	}

	
}


?>