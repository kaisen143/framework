<?php


$servername="localhost";
$username="root";
$password="";
$dbname="bhuwan_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["save"]))
{
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$message=$_POST["message"];

	$sql = "INSERT INTO contact(name,email,message)VALUES('$name','$email','$message')";

	if($conn->query($sql)===TRUE)
	{
		echo "send successfully ";
	}
	else
	{
		echo "Error in message";
	}
	$conn->close();
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="wrapper">
		<header>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="javascript:void(0)">Nepal Tourism</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="mynavbar">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="industries.php">Our Industries</a></li>
									<li><a class="dropdown-item" href="services.php">Services</a></li>
									<li><a class="dropdown-item" href="info.php">Info</a></li>
								</ul>
							</li>
						</ul>
						<form class="d-flex">
							<input class="form-control me-2" type="text" placeholder="Search">
							<button class="btn btn-primary" type="button">Search</button>
						</form>
					</div>
				</div>
			</nav>
		</header>
		
		<footer class="hello">
			<h1 class="text-center mt-5 mb-5">Contact</h1>
			<div  class="container-fluid">
				<div class="container">
					<div class="row gap-3 " >

						<div class="col k mt-5 p-3 bg-dark  text-center">
							<form method="post">
							<h1 style="color: white; margin-top: 10px; margin-bottom: 10px ;">Contact For Any Queries</h1>
							<input type="textbox" name="name" placeholder="Full Name"><br>
							<input type="textbox" name="email" placeholder="Email Address">
							<br>
							<textarea rows="4" cols="40" name="message" placeholder="Message"></textarea><br>
							<input type="submit"  class="ren2" name="save" value="Send"><br>
						</form>
						</div>

						<div class="col  mt-5 p-3  text-center bg-light">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.540598745585!2d85.32773519999999!3d27.7314672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191780acf2a5%3A0xbba21002062d13d9!2sLe%20Sherpa%20Restaurant!5e0!3m2!1sen!2snp!4v1750743975054!5m2!1sen!2snp" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>




					</div>

				</div>

			</div>
		</footer>

		<footer class ="demo">
			<h5 class="text-center mt-5 mb-5 ">INFO</h5>
			<div  class="container-fluid">
				<div class="container">
					<div class="row gap-3 bg-dark hell" >
						<div class="col  mt-5 p-3   text-center" >
							<h1> Bhuwan Nepal Tourism</h1><br>
							<h2> Contact</h2><br>
							<p>nepaltourism.com.np<br>
								01-4528604
							</p><br>
							<h2> Opening hour</h2><br>
							<p>
								Opening Hours: 24hours a day

								(Monday to Friday)
							</p>
							<a href="login.php"><i class="fa-brands fa-facebook " ></i></a>
							<a href="https://x.com/?lang=en"><i class="fa-brands fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
						</div>
						<div class="col  mt-5 p-3   text-center">
							<h3> For Reservation</h3><br>
							<p>
								Call us at: +977-9801159480,
								01-4528604
							</p>
							<h4> location</h4><br>
							<p>
								Maharajgunj, Butwal, Nepal
								Opposite of President House
							</p>
						</div>
						<div class="col  pt-5  ">
							<h3> Quick links</h3><br>
							<ul class="mt-1 pt-5">
								<li class="mb-2">
									<a href="">Home</a>
								</li>
								<li class="mb-2">
									<a href="#">About Us</a>
								</li>
								<li class="mb-2">
									<a href="#">tourism aport</a>
								</li>
								<li class="mb-2">
									<a href="#">Career</a>
								</li>
								<li class="mb-2">
									<a href="#">Events</a>
								</li>
								<li class="mb-2">
									<a href="#">Contacts</a>
								</li>
								<li class="mb-2">
									<a href="#">Reviews</a>
								</li>
							</ul>
						</div>



					</div>

				</div>

			</div>
		</footer>




	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body