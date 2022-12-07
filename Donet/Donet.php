<?php 
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "automotivedb";
	$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (!$con) {
	echo "Database is not Connected";
	}


	if (!empty($_POST)) {
	$Country = $_POST['Country'];
	$Cardtype = $_POST['Cardtype'];
	$CardNumber = $_POST['CardNumber'];
	$securitycode = $_POST['securitycode'];
	$MobileNumber = $_POST['MobileNumber'];
	$EmailAddress = $_POST['EmailAddress'];
	$insert = "INSERT INTO automotivetable02(Country,Card_Types,Card_Number,Security_Code,Mobile_Number,	Email_Address) VALUES('$Country','$Cardtype','$CardNumber','$securitycode','$MobileNumber','$EmailAddress')";
	if (mysqli_query($con,$insert)) {
				echo "Thank You For Donate";
			
			}	
	}


 ?>

<!DOCTYPE>
<html>
<head>
	<title>AUTOMOTIVE.π</title>
	<link rel="stylesheet" type="text/css" href="Donet.css">
</head>
<body>
	<!-- menu -->
	<header>
		<div class="menu_area">
			<div class="sub_menu">
				<ul>
					<li class="navbar">AUTOMOTIVE.π</li>
					<li><a href="http://localhost/web_des_php_final/ucweb/">Home</a></li>
					<li><a href="http://localhost/web_des_php_final/Donet/Donet.php">Donate</a></li>
					<li><a href="#">Engine <span><i class="fas fa-arrow-down"></i></span></a>
						<ul>
							<li><a href="http://localhost/web_des_php_final/v_engine/vEngine.php">V engine</a></li>
							<li><a href="http://localhost/web_des_php_final/Straight_engine/StraightEngine.php">Straight</a></li>
							<li><a href="http://localhost/web_des_php_final/Flat_Engine/FlatEngine.php">Flat engine</a></li>
							<li><a href="//localhost/web_des_php_final/Radial_engine/RadialEngine.php">Radial engine</a></li>
							<li><a href="http://localhost/web_des_php_final/U_engine/UEngine.php">U engine</a></li>
							<li><a href="http://localhost/web_des_php_final/H_engine/HEngine.php">H engine</a></li>
							<li><a href="http://localhost/web_des_php_final/W_engine/WEngine.php">W engine</a></li>
							<li><a href="http://localhost/web_des_php_final/X_engine/XEngine.php">X engine</a></li>
						</ul>
					</li>
					<li><a href="http://localhost/web_des_php_final/about/about.php">About</a></li>
					<li><a href="http://localhost/web_des_php_final/contart/contract.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- menu end -->

	<div class="cover01">
		<div class="form01a">
			<form action="" method="post">
				<table>
					<tr>

						<td><h3 class="Ch01">Checkout</h3></td>
					</tr>
					
					<tr>
						<td></td>
						<td>Country</td>
						<td>
							<select name="Country">
								<option value="Afghanistan north">Afghanistan north</option>
								<option  value="Bangladesh">Bangladesh</option>
								<option  value="Bhutan">Bhutan</option>
								<option  value="India">India</option>
								<option  value="Uzbekistan">Uzbekistan</option>
								<option  value="Vietnam">Vietnam</option>
								<option  value="Yemen">Yemen</option>
								<option  value="Sri Lanka">Sri Lanka</option>
								<option  value="Syria">Syria</option>
								<option  value="Thailand">Thailand</option>
								<option  value="Jordan">Jordan</option>
								<option  value="Japan">Japan</option>
								<option  value="Iraq">Iraq</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>Card Types</td>
						<td>
							<select name="Cardtype">
								<option  value="American Express">American Express</option>
								<option  value="Maestro">Maestro</option>
								<option  value="Martercard">Martercard</option>
								<option  value="Discover">Discover</option>
								<option value="Visa">Visa</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>Card Number</td>
						<td><input type="Number" name="CardNumber"></td>
					</tr>
					<tr>
						<td></td>
						<td>Security Code</td>
						<td><input type="Number" name="securitycode"></td>
					</tr>
					<tr>
						<td><h3 class="Ch01">Contact information</h3></td>
					</tr>
					<tr>
						<td></td>
						<td>Mobile Number</td>
						<td><input type="number" name="MobileNumber"></td>
					</tr>
					<tr>
						<td></td>
						<td>Email Address</td>
						<td><input type="email" name="EmailAddress"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Pay Now"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
		<div class="footer-part">
			<div class="copyright">
	          
	            <p>Copyright © Nov 2019  <a class="text-primary font-weight-bold" href="#" target="_blank">AUTOMOTIVE.π™</a> All rights reserved | Design & Developed  by <a class="text-danger font-weight-bold" href="#" target="_blank">UZZAL CHANDRA BOISSHA.</a></p>
	         
        	</div>
		</div>
</body>

</html>