
<?php
include 'login_db.php';

//retrieve the info
$results = mysqli_query($conn, "SELECT * from ledgertrial WHERE id = '1'");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
		/*background-image: url("3d9.jpg");*/
		background-color: lightgrey;
		border-image-repeat: none;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	    position: relative;
		height: 700px;
		font-family: impact; 
		}
		table, th ,td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding:10px;
		}
		table#t02 th {
			background-color: navy;
			color:white;
		}
		table#t02 tr {
			background-color: lightgray;
		}
		table {
			margin-left: 100px;
			width: 80%;
		}
		
	</style>
</head>
<body>
		<h2 style="text-align: center; font-size: 50px; color: red;"><b>Ledger</b></h2>
		<?php if ($row = mysqli_fetch_array($results)) ?>
	<form action="ledger.php" method="post" style="margin-left: 100px;">
		DATE:
		<input type="date" name="date">
	</form>
	<table id="t02">
		<tr>
			<th>Account</th>
			<th>Balance</th>
			<th>Account</th>
			<th>Balance</th>
		</tr>
		<tr>
			<td>Capital</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
			<td>Carriage Inwards</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Opening Stock</td>
			<td><input type="text" name="openingstock" value = "<?php echo '$row[openingstock]'; ?>"></td>
			<td>Carriage Outwards</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Salaries</td>
			<td><input type="text" name="salaries" value = "<?php echo '$row[salaries]'; ?>"></td>
			<td>Plant & Machenery</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Returns Inward</td>
			<td><input type="text" name="rin" value = "<?php echo '$row[rin]'; ?>"></td>
			<td>Investments</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Returns Outward</td>
			<td><input type="text" name="rout" value = "<?php echo '$row[rout]'; ?>"></td>
			<td>Sales</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Purchases</td>
			<td><input type="text" name="purchase" value = "<?php echo '$row[purchase]'; ?>"></td>
			<td>Patents</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Sales Ledger Contral</td>
			<td><input type="text" name="salesledger" value = "<?php echo '$row[salesledger]'; ?>"></td>
			<td>Funiture</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Purchese Ledger Control</td>
			<td><input type="text" name="cashbank" value = "<?php echo '$row[cashbank]'; ?>"></td>
			<td>Discounts Allowed</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Cash in Hand</td>
			<td><input type="text" name="casin" value = "<?php echo '$row[casin]'; ?>"></td>
			<td>Misc Receipts</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<td>Cash at Bank</td>
			<td><input type="text" name="cashbank" value = "<?php echo '$row[cashbank]'; ?>"></td>
			<td>Closing Stock</td>
			<td><input type="text" name="capital" value = "<?php echo '$row[capital]'; ?>"></td>
		</tr>
		<tr>
			<th colspan="4"><a href="ledger.php" style="text-decoration: none; color: white;">EDIT</a></th>
		</tr>
	</table><br>
	
</body>
</html>