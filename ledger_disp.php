
<?php
include 'login_db.php';

//retrieve the info
$results = mysqli_query($conn, "SELECT * from ledgertrial WHERE id = '1'");


?>
<!DOCTYPE html >
<html>
		<head>
			<title>Chart of Account</title>
			<style>
				body {
				background-image: url("3d2.jpg");
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
					background-color: blue;
					color:white;
				}
				table#t02 tr {
					background-color: lightgray;
				}
				h2 {
					font-family: impact;
					font-size: 50px;
					text-align: center;
					color: red;
				}
				
			</style>
		</head>
		<body>
			<h2><b>Ledger</b></h2>
			<?php if ($row = mysqli_fetch_array($results)) { ?>
			<form action="ledger.php" method="post" style="margin-left: 100px;">
				DATE:
				<input type="date" name="date">

				<table id="t02" style="width: 80%; margin-left: 100px;">
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
					<td><input type="text" name="carrin"></td>
				</tr>
				<tr>
					<td>Opening Stock</td>
					<td><input type="text" name="openingstock"></td>
					<td>Carriage Outwards</td>
					<td><input type="text" name="carrin"></td>
				</tr>
				<tr>
					<td>Salaries</td>
					<td><input type="total" name="salaries"></td>
					<td>Plant & Machenery</td>
					<td><input type="total" name="plant"></td>
				</tr>
				<tr>
					<td>Returns Inward</td>
					<td><input type="total" name="rin"></td>
					<td>Investments</td>
					<td><input type="total" name="investment"></td>
				</tr>
				<tr>
					<td>Returns Outward</td>
					<td><form><input type="total" name="rout"></form></td>
					<td>Sales</td>
					<td><input type="total" name="sales"></td>
				</tr>
				<tr>
					<td>Purchases</td>
					<td><input type="total" name="purchase"></td>
					<td>Patents</td>
					<td><input type="total" name="patents"></td>
				</tr>
				<tr>
					<td>Sales Ledger Contral</td>
					<td><input type="total" name="salesledger"></td>
					<td>Funiture</td>
					<td><input type="total" name="furniture"></td>
				</tr>
				<tr>
					<td>Purchese Ledger Control</td>
					<td><input type="total" name="purchaseledger"></td>
					<td>Discounts Allowed</td>
					<td><input type="total" name="dicallo"></td>
				</tr>
				<tr>
					<td>Cash in Hand</td>
					<td><input type="total" name="cashin"></td>
					<td>Misc Receipts</td>
					<td><input type="total" name="total"></td>
				</tr>
				<tr>
					<td>Cash at Bank</td>
					<td><input type="total" name="total"></td>
					<td>Closing Stock</td>
					<td><input type="total" name="total"></td>
				</tr>
				<tr>
					<th colspan="4"><input type="submit" name='update' value="SUBMIT"></th>
				</tr>
			</table><br>
			</form>

			<?php } ?>
			
			
		</body>
</html>