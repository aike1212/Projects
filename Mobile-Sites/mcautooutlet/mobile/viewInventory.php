<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>MC Auto Outlet | Home</title>
		<meta http-equiv="Cache-Control" content="max-age=200" />
		<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<script type="text/javascript" src="gen_validatorv31.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>

			<!-- Content -->
			<div id="content">
				<?php include('topContent.php'); ?>
				
				<?php if($_GET['item'] == 'pontiac') { ?>
					<h2><span>2006 PONTIAC GTO</span></h2>
					
					<img src="assets/gallery/img_pontiac-tm.jpg" alt="2006 Pontiac GTO" class="model" />
					
					<ul class="model-stats">
						<li><strong>Make:</strong> PONTIAC</li>
						<li><strong>Model:</strong> GTO </li>
						<li><strong>Year:</strong> 2006</li>
						<li><strong>Stock:</strong> 1160A</li>
						<li><strong>Vin:</strong> 6G2VX12U66L549451</li>
						<li><strong>Mileage:</strong> 43,000</li>
						<li><strong>Transmission:</strong> AUTO</li>
						<li><strong>Engine:</strong> 6.0 V-8</li>
						<li><strong>Drivetrain:</strong> RWD</li>
						<li><strong>Body Style:</strong> COUPE</li>
						<li><strong>Color:</strong> RED</li>
						<li><strong>Interior Color:</strong></li>
						<li><strong>Price:</strong> $18,500</li>
					</ul>
					
					<p class="center">
						<a href="assets/gallery/pontiac/1.jpg"><img src="assets/gallery/pontiac/tm/1.jpg" alt="2006 Pontiac GTO Image 1" class="model" /></a>
						<a href="assets/gallery/pontiac/2.jpg"><img src="assets/gallery/pontiac/tm/2.jpg" alt="2006 Pontiac GTO Image 2" class="model" /></a>
						<a href="assets/gallery/pontiac/3.jpg"><img src="assets/gallery/pontiac/tm/3.jpg" alt="2006 Pontiac GTO Image 3" class="model" /></a>
						<a href="assets/gallery/pontiac/4.jpg"><img src="assets/gallery/pontiac/tm/4.jpg" alt="2006 Pontiac GTO Image 4" class="model" /></a>
						<a href="assets/gallery/pontiac/5.jpg"><img src="assets/gallery/pontiac/tm/5.jpg" alt="2006 Pontiac GTO Image 5" class="model" /></a>
					</p>
					
					<p>VERY NICE LOCAL TRADE..  THIS CAR HAS A 6.0 V-8 MOTOR AND IT IS FAST!!</p>
				<?php } else if($_GET['item'] == 'buick') { ?>			
					<h2><span>BUICK LACROSSE</span></h2>
					
					<img src="assets/gallery/img_buick-tm.jpg" alt="BUICK LACROSSE" class="model" />
					
					<ul class="model-stats">
						<li><strong>Make:</strong> BUICK</li>
						<li><strong>Model:</strong> LACROSSE CXS </li>
						<li><strong>Year:</strong> 2007</li>
						<li><strong>Stock:</strong> 1144A</li>
						<li><strong>Vin:</strong> 2G4WE587971115801</li>
						<li><strong>Mileage:</strong> 69,512</li>
						<li><strong>Transmission:</strong> AUTO</li>
						<li><strong>Engine:</strong> 3.6 V-6</li>
						<li><strong>Drivetrain:</strong> FWD</li>
						<li><strong>Body Style:</strong> SEDAN</li>
						<li><strong>Color:</strong> WHITE</li>
						<li><strong>Interior Color:</strong></li>
						<li><strong>Price:</strong> $13,700</li>
					</ul>
					
					<p class="center">
						<a href="assets/gallery/buick/1.jpg"><img src="assets/gallery/buick/tm/1.jpg" alt="BUICK LACROSSE Image 1" class="model" /></a>
						<a href="assets/gallery/buick/2.jpg"><img src="assets/gallery/buick/tm/2.jpg" alt="BUICK LACROSSE Image 2" class="model" /></a>
						<a href="assets/gallery/buick/3.jpg"><img src="assets/gallery/buick/tm/3.jpg" alt="BUICK LACROSSE Image 3" class="model" /></a>
						<a href="assets/gallery/buick/4.jpg"><img src="assets/gallery/buick/tm/4.jpg" alt="BUICK LACROSSE Image 4" class="model" /></a>
					</p>
					
					<p>NICE LOCAL TRADE!</p>
				<?php } else if($_GET['item'] == 'dodge') { ?>
					<h2><span>Dodge Caliber SXT</span></h2>
					
					<img src="assets/gallery/img_dodge-tm.jpg" alt="BUICK LACROSSE" class="model" />
					
					<ul class="model-stats">
						<li><strong>Make:</strong> Dodge</li>
						<li><strong>Model:</strong> Caliber SXT</li>
						<li><strong>Year:</strong> 2007</li>
						<li><strong>Stock:</strong> 1092B</li>
						<li><strong>Vin:</strong> 1B3HB48B07D160023</li>
						<li><strong>Mileage:</strong> 39,000</li>
						<li><strong>Transmission:</strong> AUTO</li>
						<li><strong>Engine:</strong> 2.0 I-4</li>
						<li><strong>Drivetrain:</strong> FWD</li>
						<li><strong>Body Style:</strong> SEDAN</li>
						<li><strong>Color:</strong> WHITE</li>
						<li><strong>Interior Color:</strong></li>
						<li><strong>Price:</strong> $11,900</li>
					</ul>
					
					<p class="center">
						<a href="assets/gallery/dodge/1.jpg"><img src="assets/gallery/dodge/tm/1.jpg" alt="BUICK LACROSSE Image 1" class="model" /></a>
						<a href="assets/gallery/dodge/2.jpg"><img src="assets/gallery/dodge/tm/2.jpg" alt="BUICK LACROSSE Image 2" class="model" /></a>
						<a href="assets/gallery/dodge/3.jpg"><img src="assets/gallery/dodge/tm/3.jpg" alt="BUICK LACROSSE Image 3" class="model" /></a>
						<a href="assets/gallery/dodge/4.jpg"><img src="assets/gallery/dodge/tm/4.jpg" alt="BUICK LACROSSE Image 4" class="model" /></a>
					</p>
					
					<p>NICE LOCAL TRADE!</p>
				<?php } else if($_GET['item'] == 'saturn') { ?>
					<h2><span>2008 SATURN AURA XE</span></h2>
					
					<img src="assets/gallery/img_saturn-tm.jpg" alt="SATURN AURA XE" class="model" />
					
					<ul class="model-stats">
						<li><strong>Make:</strong> SATURN</li>
						<li><strong>Model:</strong> AURA XE</li>
						<li><strong>Year:</strong> 2008</li>
						<li><strong>Stock:</strong> 1209</li>
						<li><strong>Vin:</strong> 1G8ZS57N68F119478</li>
						<li><strong>Mileage:</strong> 52,000</li>
						<li><strong>Transmission:</strong> AUTO</li>
						<li><strong>Engine:</strong> 3.5 V-6</li>
						<li><strong>Drivetrain:</strong> FWD</li>
						<li><strong>Body Style:</strong> SEDAN</li>
						<li><strong>Color:</strong> LIGHT BLUE</li>
						<li><strong>Interior Color:</strong></li>
						<li><strong>Price:</strong> $12,900</li>
					</ul>
					
					<p class="center">
						<a href="assets/gallery/saturn/1.jpg"><img src="assets/gallery/saturn/tm/1.jpg" alt="SATURN AURA XE Image 1" class="model" /></a>
						<a href="assets/gallery/saturn/2.jpg"><img src="assets/gallery/saturn/tm/2.jpg" alt="SATURN AURA XE Image 2" class="model" /></a>
						<a href="assets/gallery/saturn/3.jpg"><img src="assets/gallery/saturn/tm/3.jpg" alt="SATURN AURA XE Image 3" class="model" /></a>
						<a href="assets/gallery/saturn/4.jpg"><img src="assets/gallery/saturn/tm/4.jpg" alt="SATURN AURA XE Image 4" class="model" /></a>
					</p>	
				<?php } else if($_GET['item'] == 'chevy') { ?>
					<h2><span>CHEVY HHR</span></h2>
					
					<img src="assets/gallery/img_chevy-tm.jpg" alt="CHEVY HHR" class="model" />
					
					<ul class="model-stats">
						<li><strong>Make:</strong> CHEVY</li>
						<li><strong>Model:</strong> HHR LS</li>
						<li><strong>Year:</strong> 2008</li>
						<li><strong>Stock:</strong> 1156A</li>
						<li><strong>Vin:</strong> 3GNDA13DX8S627397</li>
						<li><strong>Mileage:</strong> 59,000</li>
						<li><strong>Transmission:</strong> AUTO</li>
						<li><strong>Engine:</strong> 2.2 4CYL</li>
						<li><strong>Drivetrain:</strong> FWD</li>
						<li><strong>Body Style:</strong> SEDAN</li>
						<li><strong>Color:</strong> RED</li>
						<li><strong>Interior Color:</strong></li>
						<li><strong>Price:</strong> $11,900</li>
					</ul>
					
					<p class="center">
						<a href="assets/gallery/chevy/1.jpg"><img src="assets/gallery/chevy/tm/1.jpg" alt="CHEVY HHR Image 1" class="model" /></a>
						<a href="assets/gallery/chevy/2.jpg"><img src="assets/gallery/chevy/tm/2.jpg" alt="CHEVY HHR Image 2" class="model" /></a>
						<a href="assets/gallery/chevy/3.jpg"><img src="assets/gallery/chevy/tm/3.jpg" alt="CHEVY HHR Image 3" class="model" /></a>
						<a href="assets/gallery/chevy/4.jpg"><img src="assets/gallery/chevy/tm/4.jpg" alt="CHEVY HHR Image 4" class="model" /></a>
					</p>
				<?php } else if($_GET['item'] == 'cobalt') { ?>
					<h2><span>Chevrolet COBALT LT 2009</span></h2>
					
					<img src="assets/gallery/img_cobalt-tm.jpg" alt="Chevrolet COBALT LT 2009" class="model" />
					
					<ul class="model-stats">
						<li><strong>Make:</strong> Chevrolet</li>
						<li><strong>Model:</strong> COBALT LT</li>
						<li><strong>Year:</strong> 2009</li>
						<li><strong>Stock:</strong> 1038</li>
						<li><strong>Vin:</strong> 1G1AT58H197296114</li>
						<li><strong>Mileage:</strong> 34,179</li>
						<li><strong>Transmission:</strong> AUTO</li>
						<li><strong>Engine:</strong> 2.2L I-4</li>
						<li><strong>Drivetrain:</strong></li>
						<li><strong>Body Style:</strong>4-door</li>
						<li><strong>Color:</strong> RED</li>
						<li><strong>Interior Color:</strong> LT GRAY CLOTH</li>
						<li><strong>Price:</strong> $13,500</li>
					</ul>
					
					<p>    
						Cloth Seats
						&bull; 	5 Passenger
						&bull; 	Aluminum Wheels
						&bull; 	AM/FM Radio
						&bull; 	Compact Disc Player (CD)
						&bull; 	Power Steering
						&bull; 	Power Brakes
						&bull; 	Power Windows
						&bull; 	Power Door Locks
						&bull; 	Power Mirrors
						&bull; 	Air Conditioning
						&bull; 	Cruise Control
						&bull; 	Driver Air Bag
						&bull; 	Security System
						&bull; 	Rear Defrost
						&bull; 	Tilt Steering
						&bull; 	Tinted Windows
						&bull; 	Tachometer
						&bull; 	Keyless Entry
						&bull; 	Digital Clock
						&bull; 	Cup Holder
					</p>
					
					<p class="center">
						<a href="assets/gallery/cobalt/1.jpg"><img src="assets/gallery/cobalt/tm/1.jpg" alt="Chevrolet COBALT LT Image 1" class="model" /></a>
						<a href="assets/gallery/cobalt/2.jpg"><img src="assets/gallery/cobalt/tm/2.jpg" alt="Chevrolet COBALT LT Image 2" class="model" /></a>
						<a href="assets/gallery/cobalt/3.jpg"><img src="assets/gallery/cobalt/tm/3.jpg" alt="Chevrolet COBALT LT Image 3" class="model" /></a>
						<a href="assets/gallery/cobalt/4.jpg"><img src="assets/gallery/cobalt/tm/4.jpg" alt="Chevrolet COBALT LT Image 4" class="model" /></a>
						<a href="assets/gallery/cobalt/5.jpg"><img src="assets/gallery/cobalt/tm/4.jpg" alt="Chevrolet COBALT LT Image 5" class="model" /></a>
					</p>
				<?php } else { ?>
					<h2><span>CHYRLSER SEBRING LIMITED</span></h2>
					
					<img src="assets/gallery/img_sebring-tm.jpg" alt="CHYRLSER SEBRING LIMITED" class="model" />
					
					<ul class="model-stats">
						<li><strong>Make:</strong> CHRYSLER</li>
						<li><strong>Model:</strong> SEBRING LIMITED</li>
						<li><strong>Year:</strong> 2010</li>
						<li><strong>Stock:</strong> 1168</li>
						<li><strong>Vin:</strong> 1C3CC5FB2AN141087</li>
						<li><strong>Mileage:</strong> 42,200</li>
						<li><strong>Transmission:</strong> AUTO</li>
						<li><strong>Engine:</strong> 4 CYL</li>
						<li><strong>Drivetrain:</strong> FWD</li>
						<li><strong>Body Style:</strong> SEDAN</li>
						<li><strong>Color:</strong> WHITE</li>
						<li><strong>Interior Color:</strong></li>
						<li><strong>Price:</strong> $16,750</li>
					</ul>
					
					<p class="center">
						<a href="assets/gallery/sebring/1.jpg"><img src="assets/gallery/sebring/tm/1.jpg" alt="CHYRLSER SEBRING LIMITED Image 1" class="model" /></a>
						<a href="assets/gallery/sebring/2.jpg"><img src="assets/gallery/sebring/tm/2.jpg" alt="CHYRLSER SEBRING LIMITED Image 2" class="model" /></a>
						<a href="assets/gallery/sebring/3.jpg"><img src="assets/gallery/sebring/tm/3.jpg" alt="CHYRLSER SEBRING LIMITED Image 3" class="model" /></a>
						<a href="assets/gallery/sebring/4.jpg"><img src="assets/gallery/sebring/tm/4.jpg" alt="CHYRLSER SEBRING LIMITED Image 4" class="model" /></a>
					</p>
				<?php } ?>
				
				<p class="center"><strong><a href="inventory.php#content" id="back">&laquo; Go Back to Inventory</a></strong></p>
				
				<p>
					The price of this vehicle as equipped does not include changes such as: License, Title, Registration Fees, 
					State or Local Taxes, Finance Charges, Credit Investigation, Optional Credit Insurance, Physical Damage or 
					Liability Insurance , or Deliver Fees. MC Auto Outlet make no representations, express or implied, to any 
					actual or prospective buyer or owner of this vehicle as to the existence, ownership, accuracy, description
					or condition of this vehicle? listed equipment, accessories, price or warranties. Any and all differences 
					must be addressed prior to the sale of this vehicle. NOTICE: Although we attempt to keep inventories current,
					we cannot guarantee that located vehicles will still be available for sale. To be sure, CONTACT MC Auto 
					Outlet FIRST.
				</p>
				
				<?php include('bottomContent.php'); ?>
			</div>
			
			<?php include('footer.php'); ?>
		</div>	
	</body>
</html>