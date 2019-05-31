<?php
//Get values passe from form in login.php file
$username = $POST['username'];
$password = $POST['password'];

//to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the sever and select database
mysql_connect("localhost", "root","");
mysql_select_db("login");

//Query the database for user
$result = mysql_query("select *from user where username = '$username' and password = '$password'")
		or die("Fail to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
	echo "Login success!!! Welcome".$row['username'];
}
else {
	echo "Failed to Login!";
}
?>