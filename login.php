<!DOCTYPE html>
<html>
<head>
	<?php
	include 'login_db.php';

	if (isset($_POST['submit'])) {
		$name = $_POST['user'];
		$pwd = $_POST['pass'];
		$sql = ("SELECT * FROM login WHERE name='$name' AND pwd='$pwd' ");
		$results = $conn->query($sql);
		
	if (!$row = $results->fetch_assoc()){
		echo "you are not logged in";
	}
	else {
		//$_SESSION['name'] = $row['name'];
		header("Location: hr.htm");
	}	
	}

	?>
	<title>LogIn</title>
	<style type="text/css">
		body {
			background:#eee;
		}
		#frm{
			border: solid gray 1px;
			width: 20%;
			border-radius: 5px;
			margin:100px auto;
			background: white;
			padding: 50px;
		}
		#btn{
			color: #fff;
			background: #337ab7;
			padding: 5px;
			margin-left: 69%;
		}
	</style>
</head>
<body>
	<div id="frm">
		<form action="login.php" method="POST">
			<p>
				<label>Username :</label>
				<input type="text" id="user" name="user">
			</p>
			<p>
				<label>Password :</label>
				<input type="password" id="pass" name="pass">
			</p>
			<p>
				<input type="submit" id="btn" name="submit" value="Login">
			</p>
		</form>
	</div>
</body>
</html>