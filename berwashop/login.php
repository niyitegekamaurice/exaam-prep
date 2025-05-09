<?php
include('connection.php');
session_start();
if(isset($_POST['save'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query=mysqli_query($conn,"select UserName,password from shopkeeper where UserName='$user' and password='$pass'");
	$fetch=mysqli_fetch_array($query);
	if(is_array($fetch)){
		echo"login successfully";
		$_session['username']=$fetch['UserName'];
		$_session['password']=$fetch['password'];
		header("location:index.php");
 		}
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
<form method="post">
	<style>
		form{
			background-color: aqua;
			border: 2px black solid;
			width: 300px;
			padding: 20px;
			border-radius: 20%;
		}
		legend{
			background-color: blue;

		}
	</style>
		<legend >login form</legend>
		<label for="username">USERNAME</label><br>
		<input type="text" name="username"id="username" placeholder="enter username"><br>
		<label for="username">USERNAME</label><br>
<input type="password" name="password" placeholder="enter password"><br>
<button type="submit" name="save">login</button>
<button><a href="sinup.php">SIGN UP</a></button>


</form>
</center>
</body>
</html>
