<?php include 's_menu.php';?>

<?php

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "emp_db";

$conn = new mysqli ($Servername, $Username, $Password, $dbname);

if ($conn->connect_error) {
	die ("Connection failed: ". $conn->connect_error);
	}
	
$sql ="Insert into emp_prom_tb (name, designation, cpf, prom_post, from_date) 
values('$_REQUEST[name]','$_REQUEST[designation]','$_REQUEST[cpf]', '$_REQUEST[prom_post]','$_REQUEST[from_date]')";

$sql1=" UPDATE emp_tb
SET emp_tb.designation = '$_REQUEST[prom_post]', emp_tb.dop ='$_REQUEST[from_date]',
emp_tb.employee_type='PR', emp_tb.category ='$_REQUEST[category]'
WHERE emp_tb.cpf = '$_REQUEST[cpf]'";

if ($conn->query($sql) ===TRUE && $conn->query($sql1) ===TRUE) {
	echo "<font size =5 color = red> New Record added successfully.<br>";
	}
	
else{
	echo "Error: ".$sql."<br>".$conn->error;
	}

$conn->close();

?>

<html>

</html>