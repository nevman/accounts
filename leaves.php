<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			background-color: lightgray;
		}
		#section {
			border: 2px solid black;
			height: 900px;
		}
		#table1 {
			border: 2px solid white;
			height: 350px;
			width: 90%;
			margin-top: 10px;
			margin-left: 60px;
		}
		#table2 {
			border: 2px solid white;
			height: 100px;
			width: 40%;
			margin-left: 350px;
			margin-bottom: 20px;
		}
		#table3 {
			border: 2px solid white;
			height: 300px;
			width: 90%;
			margin-left: 60px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div id="section">
		<div>
			<table id="table1">
				<tr>
					<td>Employees code</td>
					<td><input type="text" name=""></td>
					<td></td>
					<td>Employees Name*</td>
					<td></td>
					<td><input type="text" name=""></td>
			 	</tr>
			 	<tr>
			 		<td>Department</td>
					<td><input type="text" name=""></td>
					<td></td>
					<td>Designation</td>
					<td></td>
					<td><input type="text" name=""></td>
			 	</tr>
			 	<tr>
			 		<td>Email</td>
					<td><input type="email" name=""></td>
					<td></td>
					<td>Leave type</td>
					<td></td>
					<td><input type="" name=""></td>
			 	</tr>
			 	<tr>
			 		<td>Month</td>
					<td><input type="month" name=""></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
			 	</tr><tr>
			 		<td>From Date</td>
					<td><input type="date" name=""></td>
					<td>No. of Days</td>
					<td><input type="number" name=""></td>
					<td>End Date</td>
					<td><input type="date" name=""></td>
			 	</tr>
			</table>
		</div>
		<h2><center>Leave period</center></h2>
		<div>
			<table id="table2">
				<tr>
					<td>
						<form action="">
							<input type="checkbox" name="fullday" value="fday" style="margin-left: 50px; margin-bottom: 20px;" checked> Full Day
							<input type="checkbox" name="halfday" value="hday" style="margin-left: 250px; margin-bottom: 20px;"> Half Day<br>
							<input type="checkbox" name="1sthalf" value="1sthalf" style="margin-left: 50px;"> 1st half
							<input type="checkbox" name="2ndhalf" value="2ndhalf" style="margin-left: 258px;"> 2nd half
						</form>
					</td>
				</tr>
			</table>
		</div>
		<div>
			<table id="table3">
				<tr>
					<td>Phone number(1)</td>
					<td><input type="number" name=""></td>
				</tr>
				<tr>
					<td>Phone number(2)</td>
					<td><input type="number" name=""></td>
				</tr>
				<tr>
					<td>Reason:</td>
					<td><!--<input type="" name="" width="100" style="width: 300px; height: 100px;">--><textarea rows="7" style="width: 500px;"></textarea></td>
				</tr>
			</table>
		</div>
		<center>
			<form>
				<input type="submit" name="apply" value="Apply">
				<input type="reset">
			</form>
		</center>
	</div>
</body>
</html>