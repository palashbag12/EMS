
<?php
session_start();
if($_SESSION['uname']==true && $_SESSION['u_type']=="s_user")

{
	
 include ('s_menu.php');?>
<html>
<head>
</head>
<body bgcolor="skyblue">
<center>
<table border ="10" cellpadding ="5" cellspacing ="5">

<form action="#" method ="post">


<h3> EMPLOYEE POSTING PROFILE ENTRY</h3>
<tr> <td> CPF NO. : </td><td><input  type="search" name="cpf"> </td>
<td><input  type="submit" name="submit" value="Search">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_POST['cpf'];
$query = "SELECT * from emp_tb where cpf='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);



?>
</form>
<form action="insert_pp.php" method="request">
<tr> <td> NAME </td><td><abbr title ="Name"><input type ="text" name="name" readonly value="<?php echo $row['name'];?>" /></td></tr>
<tr> <td> DESIGNATION </td><td><abbr title ="Designation"><input type ="text" readonly name="designation" value="<?php echo $row['designation'];?>" /> </td></tr>
<tr> <td> CPF NO </td><td><abbr title ="CPF No."><input type ="text" name="cpf" readonly value="<?php echo $row['cpf'];?>" /></td></tr>
<tr> <td> PRESENT PLACE OF POSTING </td><td><abbr title ="Present Place of Posting"><input type ="text" name="place" value="<?php echo $row['office_name'];?>" /></td></tr>
<tr> <td> POSTED FROM</td><td><abbr title ="Date from which posted in present office"><input type ="date" name="from_date"</td>
<tr> <td>TO</td><td> <input type ="date" name="date_to"</td>
<td><input type="submit" name="submit" value="Update" ></td></tr>


</form>
</table>
</center>
</body>

<?php
}

else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login.php>Login</a>";
}

