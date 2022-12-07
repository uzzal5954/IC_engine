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
	$comment = $_POST['comment'];
	$email = $_POST['email'];
	$insert = "INSERT INTO automotivetable01(comment,email) VALUES('$comment','$email')";
	if (mysqli_query($con,$insert)) {
				echo "Thank You For Your Comments";
			
			}	
	}


 ?>

<!DOCTYPE>
<html>
<head>
	<title>AUTOMOTIVE.π</title>
	<link rel="stylesheet" type="text/css" href="UEngine.css">
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
							<li><a href="http://localhost/web_des_php_final/Radial_engine/RadialEngine.php">Radial engine</a></li>
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

		<h1 class="pra1">U engine :</h1>
		<div class="pra2">A U engine is a piston engine made up of two separate straight engines (complete with separate crankshafts) are placed side-by-side and coupled to a shared output shaft. When viewed from the front, the engine block resembles the letter "U".
		Although much less common than the similar V engine design, several U engines were produced 		from 1915-1987 for use in airplanes, racing cars, locomotives and tanks.he main benefit of a U engine layout is the ability to share common parts with straight engine upon which is it based. Additionally, if the two crankshafts rotate in opposite directions, the gyroscopic effect of the rotating components in each cylinder bank cancel each other out.

		However, a V engine is typically more compact and lighter than a U engine
 		(in part due to the lack of a second crankshaft), therefore V engines are 
 		far more common than U engines.

		The H engine layout uses a similar concept to U engines, whereby two flat 
		engines are stacked vertically.

		</div>
		<div class="sub-cover">
			<div class="img3D">
				<img src="img3.gif" class="img3">
			</div>
		</div>
		
	</div>

	
		<div class="cover02">
			<div class="foot">
				<h3>LEAVE US A COMMENT</h3>

					<div class="form01">
						<form action="" method="post">
							<table>
								<tr>
									<td>
										Comment:
									</td>
									<td>
										<textarea name="comment" id="" cols="100" rows="10" name="comment"></textarea>
									</td>
								</tr>
								<tr>
									<td>
										Email:
									</td>
									<td>
										<input type="text" name="email" size="80">
									</td>
								</tr>

							</table>
							<div class="submit">
                                        
                                    <input type="submit" value="SUBMIT">
                                    
                                </div>
						</form>
					</div>
			</div>
		</div>
		<div class="footer-part">
			<div class="copyright">
	          
	            <p>Copyright © Nov 2019  <a class="text-primary font-weight-bold" href="#" target="_blank">AUTOMOTIVE.π™</a> All rights reserved | Design & Developed  by <a class="text-danger font-weight-bold" href="#" target="_blank">UZZAL CHANDRA BOISSHA.</a></p>
	         
        	</div>
		</div>
</body>

</html>