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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$insert = "INSERT INTO automotivetable03(name,email) VALUES('$name','$email')";
	if (mysqli_query($con,$insert)) {
				echo "Welcome";
			
			}	
	}


 ?>

<!DOCTYPE>
<html>
<head>
	<title>AUTOMOTIVE.π</title>
	<link rel="stylesheet" type="text/css" href="contract.css">
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
	<div class="img1"><img src="icon03.svg" class="imgS">
		</div>
<div class="cover01">
	<div class="form01a">
		<form action="" method="post">
			<table>
				<tr>
					<td><h2 class="Ch01">Contact With Us</h2></td>
				</tr>
				<tr>
					
					<td></td>
					<td><input type="text" name="name" placeholder="Enter Your Name"></td>
				</tr>
				<tr>
					
					<td></td>
					<td><input type="text" name="email" placeholder="Enter Your Email"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="" value="Join With Us"></td>
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