<?php

$firstname = filter_input(INPUT_POST, 'firstname');

$lastname = filter_input(INPUT_POST,'lastname');

$age = filter_input(INPUT_POST, 'age');

$collegeidno = filter_input(INPUT_POST,'collegeidno');

$qualification = filter_input(INPUT_POST,'qualification');

$mobilenumber = filter_input(INPUT_POST,'mobilenumber');

$email = filter_input(INPUT_POST,'email');

$collegename = filter_input(INPUT_POST,'collegename');

$username = filter_input(INPUT_POST,'username');

$password = filter_input(INPUT_POST,'password');

	
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "skilldevelopment";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()) {

	die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
	
}
else{
	$sql = "INSERT INTO registration(firstname,lastname,age,collegeidno,qualification,mobilenumber,email,collegename,username,password) values ('$firstname','$lastname','$age','$collegeidno','$qualification','$mobilenumber','$email','$collegename','$username','$password')";

	if ($conn->query($sql)) {

		echo  "Registration is Successful" ;
		# code...
	}
	else
	{
		echo "error".$sql."<br>".$conn->error;
	}
	$conn->close();

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/Smart_City_Hackathon2018_April/CSS/click.css">
	<title>Document</title>
</head>
<body>	
	<center>
	<div class="click">
	<a href="http://localhost/Smart_City_Hackathon2018_April/HTML/home.html">
	<input type="button" name="button" value="Click to continue">
	</a>
	</div>
	</center>
</body>
</html>