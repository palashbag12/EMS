

<?php

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "emp_inc";

$conn = new mysqli ($Servername, $Username, $Password, $dbname);

if ($conn->connect_error) {
	die ("Connection failed: ". $conn->connect_error);
	}
	
$x = $_POST['old_bp'];
$y = 10;
$inc = ($x*3)/100;


$z = fmod($inc,$y);
if ($z <1)
{
	$acc_inc = $inc-$z;
	$new_bp = $x + $acc_inc;
	
}
else 
{
	$acc_inc = $inc-$z+10;
	$new_bp = $x + $acc_inc;
	
}

$string = $_POST['dob'];
 $date = DateTime::createFromFormat("Y-m-d", $string);
 $dob=date_format($date,"Y-m-d");
 
$string1 = $_POST['dop'];
 $date1 = DateTime::createFromFormat("Y-m-d", $string1);
 
 $dop=date_format($date1,"Y-m-d");
	
$sql ="Insert into inc (name, cpf, dob, dop, p_post,old_bp,new_bp) 
values('$_REQUEST[name]','$_REQUEST[cpf]','$_REQUEST[dob]', '$_REQUEST[dop]','$_REQUEST[p_post]', '$_REQUEST[old_bp]', '$new_bp' )";
	
	


if ($dob != 0 && $dop != 0 && $conn->query($sql) ===TRUE ) {
	echo "<br>";
	echo "<font size =4 color = red> New Record added successfully.<br>";
	}
	
else{
	echo "Error: Insert date of birth and date of promotion ".$sql."<br>".$conn->error;
	}

$conn->close();

?>

<html>
<br>
<a href="inc_entry.php">"Back to Increment Entry Page"</a><br>
</html>