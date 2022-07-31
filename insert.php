
<?php
session_start();
if($_SESSION['uname']==true && $_SESSION['u_type']=="s_user")
{

 include 's_menu.php';
}
else 
{
	include 'n_menu.php';
}
?>
<?php

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "emp_db";

$conn = new mysqli ($Servername, $Username, $Password, $dbname);

if ($conn->connect_error) {
	die ("Connection failed: ". $conn->connect_error);
	}
	$string = $_REQUEST['dob'];
 $date = DateTime::createFromFormat("Y-m-d", $string);
 $day= $date->format("d");
 $dob=date_format($date,"Y-m-d");
 

 
 
 
if($day==1)
{
$dor=date_add($date,date_interval_create_from_date_string("60 years"));
$dom=date_sub($dor,date_interval_create_from_date_string("1 month"));
$do= date_format($dom,"Y-m-t");

}
else
{
$dor=date_add($date,date_interval_create_from_date_string("60 years"));
$do= date_format($dor,"Y-m-t");	

}
$sql1 ="Insert into dor (dob, dor) values ('$dob','$do')"; 
$sql2 ="Insert into emp_tb (name, designation, cpf, gender, dob, doa, dop, category, employee_type, office_name, doj_oname, post_type, doj_postarea, 
caste, subcaste, ph_status, exsm_status, religion, p_zone, c_zone, c_region, edu_quali, dor, remarks) 
values('$_REQUEST[name]','$_REQUEST[designation]','$_REQUEST[cpf]', '$_REQUEST[gender]','$_REQUEST[dob]','$_REQUEST[doa]','$_REQUEST[dop]',
'$_REQUEST[category]','$_REQUEST[employee_type]','$_REQUEST[office_name]','$_REQUEST[doj_oname]','$_REQUEST[post_type]','$_REQUEST[doj_postarea]',
'$_REQUEST[caste]','$_REQUEST[subcaste]','$_REQUEST[ph_status]','$_REQUEST[exsm_status]','$_REQUEST[religion]','$_REQUEST[p_zone]','$_REQUEST[c_zone]',
'$_REQUEST[c_region]','$_REQUEST[edu_quali]','$do','$_REQUEST[remarks]' )";

if ($conn->query($sql1) ===TRUE && $conn->query($sql2) ===TRUE) {
	echo "<font size =4 color = red> New Record added successfully.<br>";
	}
	
else{
	echo "Error: ".$sql."<br>".$conn->error;
	}

$conn->close();	





?>

<html>
<body>
<center>
<table border ="10" cellpadding ="5" cellspacing ="5">
<tr>
<td> <?php echo "Employee Name:" .$_REQUEST['name'];?></td>
<td><?php echo "Date of Birth =".$dob."<br>";?> </td>
<td><?php echo "Date of Retirement =".$do."<br>";?> </td>
<td>Date Format[YYYY-MM-DD] </td>
</tr>

</body>

</html>
