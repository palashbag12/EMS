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
	
$sql ="Insert into emp_pp_tb (name, designation, cpf, place, from_date, date_to) 
values('$_REQUEST[name]','$_REQUEST[designation]','$_REQUEST[cpf]', '$_REQUEST[place]','$_REQUEST[from_date]','$_REQUEST[date_to]')";

$sql1=" UPDATE emp_tb
SET emp_tb.office_name = '$_REQUEST[place]', emp_tb.doj_oname = '$_REQUEST[from_date]'
WHERE emp_tb.cpf = '$_REQUEST[cpf]'";

if ($conn->query($sql) ===TRUE && $conn->query($sql1) ===TRUE) {
	echo "<font size =10 color = red> New Record added successfully.<br>";
	}
	
else{
	echo "Error: ".$sql."<br>".$conn->error;
	}

$conn->close();

?>

<html>
<a href ="view_pp.php">View</a>
<a href ="pp_entry.php">Add another Posting Profile</a>
<a href ="menu.php">Main Menu</a>
</html>