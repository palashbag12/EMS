
<!DOCTYPE html>
<html>
<body>

<?php
$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "emp_db";

$conn = new mysqli ($Servername, $Username, $Password, $dbname);

if ($conn->connect_error) {
	die ("Connection failed: ". $conn->connect_error);
	}
	
	$string = $_POST['dob'];
 $date = DateTime::createFromFormat("Y-m-d", $string);
 $day= $date->format("d");
 $dob=date_format($date,"Y-m-d");
 echo "Date of Birth =".$dob."<br>";

 
 
 
if($day==1)
{
$dor=date_add($date,date_interval_create_from_date_string("60 years"));
$dom=date_sub($dor,date_interval_create_from_date_string("1 month"));
$do= date_format($dom,"Y-m-t");
echo "Date of Retirement= ".$do."<br>";
}
else
{
$dor=date_add($date,date_interval_create_from_date_string("60 years"));
$do= date_format($dor,"Y-m-t");	
echo "Date of Retirement= ".$do."<br>";
}
$sql ="Insert into dor (dob, dor) values ('$dob','$do')"; 
if ($conn->query($sql) ===TRUE) {
	echo "<font size =10 color = red> New Record added successfully.<br>";
	}
	
else{
	echo "Error: ".$sql."<br>".$conn->error;
	}

$conn->close();	


?>

</body>
</html>