<?php
if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if ($user == 'admin' AND $pass == 'admin'){
		header("location: admin.php");
	}else{
		header("location: adminn.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div class="box">
			<h1> FORM LOGIN</h1>
			<form action="" method="POST">
				<p>Username</p>
					<input type="text" name="username" placeholder="Masukan Username">
				<p>Password</p>
					<input type="password" name="password" placeholder="Masukan Password">
					<input type="submit" name="login" value="LOGIN"></input> 
			</form>

		
	</body>
</head>
</html>