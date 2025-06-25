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
	$userId=$_POST["userId"];
	$username=$_POST["username"];
	$month=$_POST["month"];
	$day=$_POST["day"];
	$year=$_POST["year"];
	$birthday="$month-$day-$year";
	$gender=$_POST["gender"];
	$email=$_POST["email"];
	$newpassword=$_POST["newpassword"];
	
	
	$sql = "INSERT INTO tourist_signup(userId,username,birthday,gender,email,newpassword) VALUES ('$userId','$username','$birthday','$gender','$email','$newpassword')";

	if($conn->query($sql)===TRUE)
	{
		echo "signup successfully";
	}
	else
	{
		echo "Error in signup ";
	}
	$conn->close();


}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bhuwan Nepal Tourism</title>
	    <link rel="stylesheet" href="assets/css/signupstyle.css">

</head>
<body>

	<h1>Tourism Board Nepal</h1>

	<div id="hell">
		
	</div>
		<div id="hello">
	<form method="post">
		<input type="textbox" name="userId" placeholder="Enter userId"><br>
		<input type="textbox" name="username" placeholder="Enter username"><br>
		<select id="month" name="month">
			<option >Month</option>
			<option value="1">Baisakh</option>
			<option value="2">Jestha</option>
			<option value="3">Asar</option>
			<option value="4">Shrawn</option>
			<option value="5">Bhadra</option>
			<option value="6">Ashoj</option>
			<option value="7">Kartik</option>
			<option value="8">Mangsir</option>
			<option value="9">poush</option>
			<option value="10">magh</option>
			<option value="11">Falgun</option>
			<option value="12">Chaitra</option>
		</select>

		<select name="day">
			<?php
				for($day=1;$day<=31;$day++)
				{
					echo "<option value='$day'>$day</option>";
				}

			?>
		</select>
		<select name="year">
		  <option value="">Year</option>
		  <?php
		    for ($year =1900; $year <= 2081; $year++)
		     {
		        echo "<option value='$year'>$year</option>";
		    }
		  ?>
		</select>


		<br><label>gender</label>
		<input type="radio" name="gender" value="male">male
		<input type="radio" name="gender" value="female">female<br>
		<input type="email" name="email" placeholder="Enter Email"><br>
		<input type="password" name="newpassword" placeholder="Enter new password" ><br>
		<input type="submit" name="save" value="Signup"><br>
	</form>
</div>
</body>
</html>