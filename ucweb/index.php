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
	<link rel="stylesheet" type="text/css" href="main.css">
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

		<h1 class="pra1">Internal combustion engine :</h1>
		<div class="img1"><img src="img1.gif">
		</div>
		<div class="pra2">An internal combustion engine (ICE) is a heat engine where the combustion of a fuel occurs with an oxidizer (usually air) in a combustion chamber that is an integral part of the working fluid flow circuit. In an internal combustion engine, the expansion of the high-temperature and high-pressure gases produced by combustion applies direct force to some component of the engine. The force is applied typically to pistons, turbine blades, rotor or a nozzle. This force moves the component over a distance, transforming chemical energy into useful mechanical energy.
		</div>
	</div>
	<div class="cover01">

		<h1 class="pra1">Internal combustion engine are used :
</h1>
		<div class="img1"><img src="img2bc.jpg">
		</div>
		<div class="pra2">Internal combustion engines (ICE) are the most common form of heat engines, as they are used in vehicles, boats, ships, airplanes, and trains. They are named as such because the fuel is ignited in order to do work inside the engine. The same fuel and air mixture is then emitted as exhaust. This can be done using a piston (called a reciprocating engine), or with a turbine.
		</div>
	</div>
	<div class="cover03">

		<h1 class="pra1">classification of IC engines :</h1>
		<h2 class="pra3">Based on the fuel used :</h2>
		<h3 class="pra4">Diesel Engine (C.I. Engine) :</h3>

		<h5 class="arti01">The diesel engine (also known as a compression-ignition or CI engine), named after Rudolf Diesel, is an internal combustion engine in which ignition of the fuel is caused by the elevated temperature of the air in the cylinder due to the mechanical compression (adiabatic compression). This contrasts with spark-ignition engines such as a petrol engine (gasoline engine) or gas engine (using a gaseous fuel as opposed to petrol), which use a spark plug to ignite an air-fuel mixture.</h5>

		<h3 class="pra4">Gasoline Engine (S.I. Engine) :</h3>
		<h5 class="arti01">A spark-ignition engine (SI engine) is an internal combustion engine, generally a petrol engine, where the combustion process of the air-fuel mixture is ignited by a spark from a spark plug. This is in contrast to compression-ignition engines, typically diesel engines, where the heat generated from compression together with the injection of fuel is enough to initiate the combustion process, without needing any external spark. Spark-ignition engines are commonly referred to as "gasoline engines" in North America, and "petrol engines" in Britain and the rest of the world. However, these terms are not preferred, since spark-ignition engines can (and increasingly are) run on fuels other than petrol/gasoline, such as autogas (LPG), methanol, ethanol, bioethanol, compressed natural gas (CNG), hydrogen, and (in drag racing) nitromethane.</h5>
		<h2 class="pra3">Based on the position of cylinders :</h2>
		<h3 class="arti01">Piston engines are often categorised by their cylinder layout, valves and camshafts. Wankel engines are often categorised by the number of rotors present. Gas turbine engines are often categorised into turbojets, turbofans, turboprops and turboshafts.</h3 class="arti01">
		<h3 class="arti01">Internal combustion based on engine position, respectively,
		 V engine, Straight engine, Flat engine, Radial engine, U engine, H engine, 
		 W engine, X engine etc.<h3>
	
	</div>
		<div class="cover01">

		<h1 class="pra1">Diesel Engine (C.I. Engine) :</h1>
		<div class="sub-cover01">
			<div class="img3D"><img src="img3.gif" class="img3">
			</div>
		</div>
		<div class="pra2">The diesel engine (also known as a compression-ignition or CI engine), named after Rudolf Diesel, is an internal combustion engine in which ignition of the fuel is caused by the elevated temperature of the air in the cylinder due to the mechanical compression (adiabatic compression). This contrasts with spark-ignition engines such as a petrol engine (gasoline engine) or gas engine (using a gaseous fuel as opposed to petrol), which use a spark plug to ignite an air-fuel mixture.
		</div>
	</div>
	</div>
		<div class="cover01">

		<h1 class="pra1">Gasoline Engine (S.I. Engine) :</h1>
		<div class="sub-cover01">
			<div class="img3D"><img src="img4.gif" class="img3">
			</div>
		</div>
		<div class="pra2">A spark-ignition engine (SI engine) is an internal combustion engine, generally a petrol engine, where the combustion process of the air-fuel mixture is ignited by a spark from a spark plug. This is in contrast to compression-ignition engines, typically diesel engines, where the heat generated from compression together with the injection of fuel is enough to initiate the combustion process, without needing any external spark. Spark-ignition engines are commonly referred to as "gasoline engines" in North America, and "petrol engines" in Britain and the rest of the world. However, these terms are not preferred, since spark-ignition engines can (and increasingly are) run on fuels other than petrol/gasoline, such as autogas (LPG), methanol, ethanol, bioethanol, compressed natural gas (CNG), hydrogen, and (in drag racing) nitromethane.
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