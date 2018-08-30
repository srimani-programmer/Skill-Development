<?php
session_start();
$db = mysqli_connect('localhost','root','','skilldevelopment');
    $username = test_input($_POST["username"]);
    if (preg_match("/^[_a-zA-Z0-9]+$/", $username)){
    	$password=test_input($_POST["password"]);
    	if (preg_match("/^[_0-9]+$/", $password)){
			$query="select * from registration where password=".$password;
			$result=mysqli_query($db,$query)
				or die("try again");
			$row=mysqli_fetch_array($result);
			if($row['username']==$username){
				$_SESSION['login_user'] = $username;
				header("Location:home.php");exit;
			}else{
				echo "username or password is incorrect*";
			}
		}else{
				echo "Please write proper password";
		}

	}else{
    	echo "Please write proper username";
	}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>