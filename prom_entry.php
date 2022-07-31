<?php
session_start();
if($_SESSION['uname']==true && $_SESSION['u_type']=="s_user")

{

include 's_menu.php';?>
<html>
<head>

</head>
<body bgcolor="skyblue">
<center>
<table border ="10" cellpadding ="5" cellspacing ="5">

<form action="#" method ="request">

<h3> EMPLOYEE PROMOTION PROFILE</h3>
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

$id=$_REQUEST['cpf'];
$query = "SELECT * from emp_tb where cpf='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);


?>
</form>

<form action="insert_prom.php" method="request">
<tr> <td> NAME </td><td><abbr title ="Name"><input type ="text" name="name" readonly value="<?php echo $row['name'];?>" /></td></tr>
<tr> <td> DESIGNATION </td><td><abbr title ="Designation"><input type ="text" readonly name="designation" value="<?php echo $row['designation'];?>" /> </td></tr>
<tr> <td> CPF NO </td><td><abbr title ="CPF No."><input type ="text" name="cpf" readonly value="<?php echo $row['cpf'];?>" /></td></tr>

<tr> <td>  PROMOTED TO THE POST </td><td><abbr title =" Promotion"><input type ="text" name="prom_post" placeholder ="Enter Promotional Post of the Employee" required</td></tr>
<tr> <td>  PROMOTED POST BELONGS TO </td><td><abbr title =" Promotion Category">
<select name="category">
<option name="category" value ="I">I</option>
<option name="category" value ="II">II</option>
<option name="category" value ="III">III</option>
<option name="category" value ="IV">IV</option>
</select>
</td></tr>
<tr> <td> ON </td><td><abbr title ="Date from which promoted"><input type ="date" name="from_date"</td> 

<tr><td colspan ="2" align "center"> <input type ="submit" name="submit" value="Submit"></td></tr>

</table>
</form>
</center>
<?php
}
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login.php>Login</a>";
}
?>
</body>
</html>
