<!DOCTYPE html>
<html lang="en">
	<?php include("config.php");?>

<head>
	<title>Rumah Donasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" media="screen" href="./css/main.css">
<!--===============================================================================================-->

</head>
<body>
	<nav>
		<ul>
			<li><a href="input.php">Input</a></li>
			<li><a href="view.php">View</a></li>
			<li><a href="pedit.php">Edit</a></li>
			<li><a href="pdelete.php">Delete</a></li>
			<a href="index.php"><img src="images/icons/favicon.ico"></a>
		</ul>	
	</nav>

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" act method="POST">
				<span class="contact100-form-title">
					Donasi
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nama</span>
					<input class="input100" type="text" name="name" placeholder="Nama">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Telepon</span>
					<input class="input100" type="text" name="phone" placeholder="Telepon">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Alamat</span>
					<input class="input100" type="text" name="alamat" placeholder="Alamat">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Donasi</span>
					<input class="input100" type="text" name="donasi" placeholder="Rp">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn">
						</div>
						<input class="contact100-form-btn" type="submit" name="submit" value="Submit"></input>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>

	</form>
</html>

<?php

if(isset($_POST['submit'])){
$insertOneResult = $collection->insertOne([
    'nama' => $_POST['name'],
    'email' => $_POST['email'],
    'telepon' => $_POST['phone'],
    'alamat' => $_POST['alamat'],
    'donasi' => $_POST['donasi'],
]);}

?>
</html>
