<?php 
	include 'dbconnection.php';
 
?>
<html>
<head>
	<title>Post Property</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<?php include 'header.php'; ?>
	
	<?php if(!isset($_SESSION['user_id']))
		{
			echo "<script>alert('Not Loggedin');window.location.href='login.php';</script>";
		}
		?>
	<form method="post" enctype="multipart/form-data">
		<div class="table1">
			<table>
				<tr>
					<td colspan="2" class="text1">Post Property  </td>
				</tr>
				<tr>
					<td>You Are : </td>
					<td><input type="radio" name="Owner" value="Owner" > Owner &nbsp
						<input type="radio" name="Owner" value="Dealer"> Dealer
					</td>
				</tr>
				<tr>
					<td>List Property For : </td>
					<td><div class="select1">
						<select name="property" required>
								<option value="">Select</option>
								<option value="Sale">Sale</option>
								<option value="Rent">Rent</option>
						</select></div>
					</td>	
				</tr>
				<tr>
					<td>Property Type : </td>
					<td><div class="select1">
						<select name="type" required>
							<option value="">Select</option>
							<option value="Apartment">Apartment</option>
							<option value="House">House</option>
							<option value="Villa">Villa</option>
							<option value="Residental Land">Land</option>
						</select></div>	
					</td>
				</tr>
				<tr>
					<td>Address : </td>
					<td>
						<div class="form1"><input type="text" name="address" required></div>
					</td>
				</tr>
				<tr>
					<td>Landmark : </td>
					<td>
						<div class="form1"><input type="text" name="Landmark" required></div>
					</td>				
				</tr>
				<tr>
					<td>Pincode : </td>
					<td>
						<div class="form1"><input type="text" name="Pincode" maxlength="6" required></div>
					</td>
				</tr>
				<tr>
					<td>City : </td>
					<td>
						<div class="form1"><input type="text" name="City" required></div>
					</td>
				</tr>
				<tr>
					<td>State : </td>
					<td>
						<div class="form1"><input type="text" name="State" required></div>
					</td>
				</tr>
				<tr>
					<td>Built Up Area : </td>
					<td>
						<div class="form1"><input type="text" name="Area" required>m<sup>2</sup></div>
					</td>
				</tr>
				<tr>
					<td>Bedrooms : </td>
					<td><div class="select1">
						<select name="bedrooms" required>
							<option value="">Select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="5+">5+</option>
						</select></div>
					</td>
				</tr>
				<tr>
					<td>Bathrooms : </td>
					<td><div class="select1">
						<select name="bathrooms" required>
							<option value="">Select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="5+">5+</option>
						</select></div>
					</td>
				</tr>
				<tr>
					<td>Balconies : </td>
					<td><div class="select1">
						<select name="balconies" required>
							<option value="">Select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="5+">5+</option>
						</select></div>
					</td>
				</tr>
				<tr>
					<td>Additional Rooms : </td>
					<td>
						<input type="checkbox" name="poojaroom" value="poojaroom"> &nbsp Pooja Room &nbsp &nbsp
						<input type="checkbox" name="studyroom" value="studyroom">&nbsp Study Room<br>
						<input type="checkbox" name="serventroom" value="serventroom">&nbsp Servent Room &nbsp
						<input type="checkbox" name="storeroom" value="storeroom">&nbsp Store Room
					</td>
				</tr>
				<tr>
					<td>Furnishing : </td>
					<td><div class="select1">
						<select name="Furnishing" required>
							<option value="">Select</option>
							<option value="furnished">Furnished</option>
							<option value="semifurnished">Semifurnished</option>
							<option value="unfurnished">Unfurnished</option>
						</select></div>
					</td>
				</tr>
				<tr>
					<td>Do You Have Reserved Parkings : </td>
					<td>
						<input type="radio" name="Parking" value="Yes">Yes
						<input type="radio" name="Parking" value="No">No
					</td>
				</tr>
				<tr>
					<td>Availability : </td>
					<td><div class="select1" >
						<select name="Availability" required>
							<option value="">Select</option>
							<option value="Ready To Move">Ready To Move</option>
							<option value="Under Construction">Under Construction</option>
						</select></div>
					</td>
				</tr>
				<tr>
					<td>Age Of Property : </td>
					<td><div class="select1">
						<select name="AgeHouse" required>
							<option value="">Select</option>
							<option value="0-1">0-1 Years Old Property</option>
							<option value="1-5">1-5 Years Old Property</option>
							<option value="5-10">5-10 Years Old Property</option>
							<option value="10+">10+ Years Old Property</option>
						</select></div>
					</td>
				</tr>
				<tr>
					<td>Expected Price : </td>
					<td>
						<div class="form1"><input type="text" name="Price" required>₹</div>
					</td>
				</tr>
				<tr>
					<td>Image : </td>
					<td>
						<input type="file" name="image1" accept="image/*" required="" />
					</td>
				</tr>
				<tr>
					<td>Image : </td>
					<td>
						<input type="file" name="image2" accept="image/*" required="" />
					</td>
				</tr>
				<tr>
					<td>Image : </td>
					<td>
						<input type="file" name="image3" accept="image/*" required="" />
					</td>
				</tr>
				<tr>
					<td>Image : </td>
					<td>
						<input type="file" name="image4" accept="image/*" required="" />
					</td>
				</tr>
				<tr>
					<td>Image : </td>
					<td>
						<input type="file" name="image5" accept="image/*" required="" />
					</td>
				</tr>
				<tr>
					<td>Image : </td>
					<td>
						<input type="file" name="image6" accept="image/*" required="" />
					</td>
				</tr>
				<tr>
					<td>Image : </td>
					<td>
						<input type="file" name="image7" accept="image/*" required="" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<br><center><input type="submit" name="upload" value="POST"></center><br><br><br>
					</td>
				</tr>
			</table>
		</div>	
	</form>
	<?php include 'footer.php';?>
</body>
</html>

<?php
				
						error_reporting(1);
				if(isset($_POST['upload']))
				{
					$user_id = $_SESSION["user_id"];
       				$str="select * from user where user_id ='$user_id'";
        			$res=mysqli_query($con,$str);

					$user_type = $_POST["Owner"];
					$property_for = $_POST["property"];
					$property_type = $_POST["type"];
					$address = $_POST["address"];
					$landmark = $_POST["Landmark"];
					$pincode = $_POST["Pincode"];
					$city = $_POST["City"];
					$state = $_POST["State"];
					$area = $_POST["Area"];
					$bedrooms = $_POST["bedrooms"];
					$bathrooms = $_POST["bathrooms"];
					$balconies = $_POST["balconies"];
					$poojaroom = $_POST["poojaroom"];
					$studyroom = $_POST["studyroom"];
					$serventroom = $_POST["serventroom"];
					$storeroom = $_POST["storeroom"];
					$furnishing = $_POST["furnishing"];
					$parking = $_POST["Parking"];
					$availability = $_POST["Availability"];
					$age = $_POST["AgeHouse"];
					$price = $_POST["Price"];
					
					$img1 = $_FILES['image1']['name'];
            		$img_tmp1 = $_FILES['image1']['tmp_name'];
                 	move_uploaded_file($img_tmp1,"upload_images/$img1");
        
       				$img2 = $_FILES['image2']['name'];
             		$img_tmp2 = $_FILES['image2']['tmp_name'];
                   	move_uploaded_file($img_tmp2,"upload_images/$img2");
        
         			$img3 = $_FILES['image3']['name'];
             		$img_tmp3 = $_FILES['image3']['tmp_name'];
                   	move_uploaded_file($img_tmp3,"upload_images/$img3");
        
         			$img4 = $_FILES['image4']['name'];
             		$img_tmp4 = $_FILES['image4']['tmp_name'];
                    move_uploaded_file($img_tmp4,"upload_images/$img4");

                    $img5 = $_FILES['image5']['name'];
             		$img_tmp5 = $_FILES['image5']['tmp_name'];
                    move_uploaded_file($img_tmp5,"upload_images/$img5");

                    $img6 = $_FILES['image6']['name'];
             		$img_tmp6 = $_FILES['image6']['tmp_name'];
                    move_uploaded_file($img_tmp6,"upload_images/$img6");

                    $img7 = $_FILES['image7']['name'];
             		$img_tmp7 = $_FILES['image7']['tmp_name'];
                    move_uploaded_file($img_tmp7,"upload_images/$img7");						
					
					echo $user_id;
					$query = "insert into properties (user_id,user_type,property_for,property_type,address,landmark,pincode,city,state,area,bedrooms,bathrooms,balconies,poojaroom,studyroom,serventroom,storeroom,furnishing,parking,avaibility,property_age,price,img1,img2,img3,img4,img5,img6,img7) values ('$user_id','$user_type','$property_for','$property_type','$address','$landmark',
					'$pincode','$city','$state','$area','$bedrooms','$bathrooms','$balconies','$poojaroom','$studyroom','$serventroom','$storeroom','$furnishing','$parking','$availability','$age','$price','$img1','$img2','$img3','$img4','$img5','$img6','$img7')";
				
					$insert_query = mysqli_query($con,$query);

					
					echo $insert_query;
				

					 						include('PHPMailer/PHPMailerAutoload.php');
					 						$mail = new PHPMailer(true);	
					 						try {
										    //Server settings
					 						    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
					 						    $mail->isSMTP();                                            // Set mailer to use SMTP
					 						    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
											    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
					 						    $mail->Username   = 'homespace.project@gmail.com';                     // SMTP username
											    $mail->Password   = 'homespace123';                               // SMTP password
											    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
											    $mail->Port       = '465';                                    // TCP port to connect to

					 						  $mail->setFrom('homespace.project@gmail.com', 'Admin');
					 						    $mail->addAddress($_SESSION['email']);     // Add a recipient
											     
					 						    // Content
					 						    $mail->isHTML(true);                                  // Set email format to HTML
					 						    $mail->Subject = 'Your Property is Added Successfully';
					 						    $mail->Body    = 
					 						    '<table><caption>Property Details</caption>
					 						    <tr><td colspan="2">'.$address.'</td></tr>
					 						    <tr><td colspan="2">'.$landmark.'</td></tr>
					 						    <tr><td colspan="2">'.$city.'</td></tr>
					 						    <tr><td colspan="2">'.$state.'</td></tr>
					 						    <tr><td colspan="2">'.$pincode.'</td></tr>
											    
					 						    <tr><td>Type</td><td>'.$property_type.'</td></tr>
					 						    <tr><td>Bedrooms</td><td>'.$bedrooms.'</td></tr>
											    <tr><td>Bathrooms</td><td>'.$bathrooms.'</td></tr>
											    <tr><td>Balconies</td><td>'.$balconies.'</td></tr>
											    <tr><td>Parking</td><td>'.$parking.'</td></tr>
											    <tr><td>storeroom</td><td>'.$storeroom.'</td></tr>
					 						    <tr><td>studyroom</td><td>'.$studyroom.'</td></tr>
					 						    <tr><td>poojaroom</td><td>'.$poojaroom.'</td></tr>
											    <tr><td>serventroom</td><td>'.$serventroom.'</td></tr>
					 						    </table>';
											    
					 						    $mail->AltBody = 'Homespace';
					 						    $mail->send();
											    
					 						//    echo 'Message has been sent';
					 						   // header('Location: property-submit.php');
					 						} catch (Exception $e) {
					 						
											}


					}				
					else{
						echo fail;
					}
				
	
?>