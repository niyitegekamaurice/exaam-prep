<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<fieldset>
		<center>
		<legend> REGISTRATION FORM</legend>
		<label for="username">USERNAME</label><br>
		<input type="text" name="username" id="username" placeholder="enter username"><br>
<input type="password" name="password" placeholder="enter password"><br>
<button type="submit" name="save">insert</button>
</fieldset>
</center>
</form>
</body>
</html>
<?php 
include('connection.php');
if(isset($_POST['save'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($conn,"INSERT INTO shopkeeper(UserName,password) values('$username','$password')");
if($query==true){
echo"account created";
header("location:login.php"); 
}
else{
	echo"not created";
}
}
	?>