<!DOCTYPE html>
<html>
<head>
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
		<form action="process.php" method="POST">
			<p>
				<label>Username :</label>
				<input type="text" id="user" name="user">
			</p>
			<p>
				<label>Password :</label>
				<input type="password" id="pass" name="pass">
			</p>
			<p>
				<input type="submit" id="btn" value="Login">
			</p>
		</form>
	</div>
</body>
</html>