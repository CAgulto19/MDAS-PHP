<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<title>MDAS Calculator</title>

<body>

<br><br><br><br><br><br><br>
	<h1>MDAS Calculator</h1>
<br>

<form action = "" method = "GET">
Input number 1: <input type = "text" name = "txtinput1" required><br>
Input number 2: <input type = "text" name = "txtinput2" required><br>
<br>

<input type = "submit" name = "btnadd" value = "Add">
<input type = "submit" name = "btnsub" value = "Subtract">
<input type = "submit" name = "btnmul" value = "Multiply">
<input type = "submit" name = "btndiv" value = "Divide">
</form>
</body>
</head>

</html>

<?php
if(isset($_GET['btnadd'])){

	$num1 = $_GET['txtinput1'];
	$num2 = $_GET['txtinput2'];

	$sum = $num1 + $num2;

	echo "<br>First Number: " . $num1;
	echo "<br>Second Number: " . $num2;
	echo "<br>Sum: " . $sum;
}
if(isset($_GET['btnsub'])){
	$num1 = $_GET['txtinput1'];
	$num2 = $_GET['txtinput2'];

	$sum = $num1 - $num2;

	echo "First Number: " . $num1;
	echo "<br>Second Number: " . $num2;
	echo "<br>Sum: " . $sum;
}
if(isset($_GET['btnmul'])){
	$num1 = $_GET['txtinput1'];
	$num2 = $_GET['txtinput2'];

	$sum = $num1 * $num2;

	echo "First Number: " . $num1;
	echo "<br>Second Number: " . $num2;
	echo "<br>Sum: " . $sum;
}
if(isset($_GET['btndiv'])){
	$num1 = $_GET['txtinput1'];
	$num2 = $_GET['txtinput2'];

	$sum = $num1 / $num2;

	echo "First Number: " . $num1;
	echo "<br>Second Number: " . $num2;
	echo "<br>Sum: " . $sum;
}
?>