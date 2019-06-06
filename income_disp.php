<?php
include 'login_db.php';
//retrieve the info
$results = mysqli_query($conn, "SELECT * from income WHERE id = '1'");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			background-image: url("3d9.jpg");
		}
		table, th ,td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
			font-size: 30px;
		}
		table#t02 th {
			background-color: black;
			color:white;
			padding: 20px;
		}
		table#t02 tr {
			background-color: lightgray;
			color: black;
		}
	</style>
</head>
<body>
	<table id="t02" style="width: 80%; height: 300px; margin-left: 100px;" name="myform">
		<tr>
			<th colspan="3">Income statement for the month ended<input type="date" name="ddate"></th>
		</tr>
		<tr>
			<td colspan="3" style="color: red;">REVENUE</td>
		</tr>
		<tr>
			<td>progas Revenue</td>
			<td></td>
			<td><input type="text" name="rev"></td>
		</tr>
		<tr>
			<td colspan="3" style="color: red;">EXPENSE</td>
        </tr>
        <?php if ($row = mysqli_fetch_array($results)) ?> 
		<form name="myform" action="income.php">
		<tr>
			<td>Rent Expense</td>
			<td><input type="text" name="btn1"></td>
			<td></td>
		</tr>
		<tr>
			<td>Salaries Expense</td>
			<td><input type="text" name="btn2"></td>
			<td></td>
		</tr>
		<tr>
			<td>Supplies Used</td>
			<td><input type="text" name="btn3"></td>
			<td></td>
		</tr>
		<tr>
			<td>Utilities Expense</td>
			<td><input type="text" name="btn4"></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2"><form name="" target=""></form><input type="button" name="btn6" value="TOTAL EXPENSE" onclick="addnum(btn1.value,btn2.value,btn3.value,btn4.value)"></form></td>
			<td><input type="text" name="btn5"></td>
		</tr>
		<tr>
			<td colspan="2"><button type="button" onclick="document.getElementById('income').innerHTML = 5 + 6;">NET INCOME</button></td>
			<td id="income"><input type="" name=""></td>
		</tr>
	    </form>
    </table>
    <script type="text/javascript" id="total">
    	function addnum(n1,n2,n3,n4)
    	{
    		var no1=parseFloat(n1)
    		var no2=parseFloat(n2)
    		var no3=parseFloat(n3)
    		var no4=parseFloat(n4)
    		var no5=no1+no2+no3+no4
    		myform.bt5.value=no5
    	}
	</script>
</body>
</html>