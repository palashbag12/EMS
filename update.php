<?php
session_start();
if($_SESSION['uname']==true && $_SESSION['u_type']=="s_user")

{

?>

<?php include 's_menu.php';?>
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
$query = "SELECT * from emp_tb where cpf ='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);




$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$designation=$_REQUEST['designation'];
$cpf=$_REQUEST['cpf'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$doa=$_REQUEST['doa'];
$dop=$_REQUEST['dop'];
$category=$_REQUEST['category'];
$employee_type=$_REQUEST['employee_type'];
$office_name=$_REQUEST['office_name'];
$doj_oname=$_REQUEST['doj_oname'];
$post_type=$_REQUEST['post_type'];
$doj_postarea=$_REQUEST['doj_postarea'];
$caste=$_REQUEST['caste'];
$subcaste=$_REQUEST['subcaste'];
$ph_status=$_REQUEST['ph_status'];
$exsm_status=$_REQUEST['exsm_status'];
$religion=$_REQUEST['religion'];
$p_zone=$_REQUEST['p_zone'];
$c_zone=$_REQUEST['c_zone'];
$c_region=$_REQUEST['c_region'];
$edu_quali=$_REQUEST['edu_quali'];
$dor=$_REQUEST['dor'];
$remarks=$_REQUEST['remarks'];





$update="update emp_tb set id='".$id."',name='".$name."', designation='".$designation."',cpf='".$cpf."',gender='".$gender."', 
dob='".$dob."', dop='".$dop."',category='".$category."',employee_type='".$employee_type."', office_name='".$office_name."', 
doj_oname='".$doj_oname."',post_type='".$post_type."',doj_postarea='".$doj_postarea."',  caste='".$caste."', subcaste='".$subcaste."',
ph_status='".$ph_status."',exsm_status='".$exsm_status."',religion='".$religion."',p_zone='".$p_zone."',c_zone='".$c_zone."',
c_region='".$c_region."',edu_quali='".$edu_quali."',dor='".$dor."', remarks='".$remarks."' where id='".$id."'";





 mysqli_query($conn, $update) or die(mysqli_error()) ;
 
	
$status = "Record Updated Successfully. </br></br>

<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';

 }
 else
 {
	 
?>











<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<center>
<align center>


<div>

<table border ="10" cellpadding ="5" cellspacing ="5">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<tr> <td> NAME </td><td><abbr title ="Name"><input type ="text" name="name" value="<?php echo $row['name'];?>" /></td></tr>
<tr> <td> DESIGNATION </td><td><abbr title ="Designation"><input type ="text" name="designation" value="<?php echo $row['designation'];?>" /> </td></tr>

<tr> <td> CPF NO </td><td><abbr title ="CPF No."><input type ="text" name="cpf" value="<?php echo $row['cpf'];?>" /></td></tr>

<tr> <td> GENDER </td><td><abbr title ="Gender">
<select name="gender">
<option name="gender" value ="Male">Male</option>
<option name="gender" value ="Female">Female</option>
<option name="gender" value ="Transgender">Transgender</option>
</select>
</td></tr>

<tr> <td> D.O.B </td><td><abbr title ="Date of Birth"><input type ="date" name="dob" value="<?php echo $row['dob'];?>" /></td></tr>
<tr> <td> DATE OF APPOINTMENT</td><td><abbr title ="Date of Appointment"><input type ="date" name="doa" value="<?php echo $row['doa'];?>" /></td></tr>
<tr> <td> DATE OF PROMOTION</td><td><abbr title ="Date of Promotion"><input type ="date" name="dop" value="<?php echo $row['dop'];?>" /> </td></tr>

<tr> <td> EMPLOYEE CATEGORY </td><td><abbr title ="Category">
<select name="category">
<option name="category" value ="I">I</option>
<option name="category" value ="II">II</option>
<option name="category" value ="III">III</option>
<option name="category" value ="IV">IV</option>
</select>
</td></tr>

<tr> <td> EMPLOYEE TYPE </td><td><abbr title ="Employee Type Direct/Promotion">
<select name="employee_type">
<option name="employee_type" value ="DR">DR (DIRECT)</option>
<option name="employee_type" value ="PR">PR (PROMOTON)</option>
</select>
</td></tr>

<tr> <td> PRESENT PLACE OF POSTING </td><td><abbr title ="Present Place of Posting"><input type ="text" name="office_name" value="<?php echo $row['office_name'];?>" /></td></tr>
<tr> <td> SINCE POSTED IN PRESENT OFFICE</td><td><abbr title ="Date from which posted in present office"><input type ="date" name="doj_oname" value="<?php echo $row['doj_oname'];?>" /></td></tr>


<tr> <td> POSTING TYPE </td><td><abbr title ="Posting Type Allowance/NON-ALLOWANCE">
<select name="post_type">
<option name="post_type" value ="ALLOWANCE">ALLOWANCE</option>
<option name="post_type" value ="NON-ALLOWANCE">NON-ALLOWANCE</option>
</select>
</td></tr>

<tr> <td> SINCE POSTED IN ALLOWANCE/NON-ALLOWANCE AREA</td><td><abbr title ="Date from which posted in present area"><input type ="date" name="doj_postarea" value="<?php echo $row['doj_postarea'];?>" /></td></tr>

<tr> <td> CASTE</td><td>UR<input type ="radio" name="caste" value="UR" checked="checked">
SC<input type ="radio" name="caste" value="SC" >
ST<input type ="radio" name="caste" value="ST" >
OBC<input type ="radio" name="caste" value="OBC" >
</td></tr>

<tr> <td> SUB-CASTE </td><td><abbr title ="Subcaste"><input type ="text" name="subcaste" value="<?php echo $row['subcaste'];?>" /></td></tr>

<tr> <td> PH STATUS</td><td>NIL<input type ="radio" name="ph_status" value="NIL" checked="checked">
HH<input type ="radio" name="ph_status" value="HH" >
OH<input type ="radio" name="ph_status" value="OH" >
VH<input type ="radio" name="ph_status" value="VH" >
</td></tr>

<tr> <td> EX-SERVICEMAN STATUS</td><td>NIL<input type ="radio" name="exsm_status" value="NIL" checked="checked">
EX-SERVICEMAN<input type ="radio" name="exsm_status" value="Ex-Serviceman" >
</td></tr>

<tr> <td> RELIGION </td><td><abbr title ="RELIGION OF EMPLOYEE">
<select name="religion">
<option name="religion" value ="HINDU">HINDU</option>
<option name="religion" value ="MUSLIM">MUSLIM</option>
<option name="religion" value ="CHRISTIAN">CHRISTIAN</option>
<option name="religion" value ="BUDDHIST">BUDDHIST</option>
<option name="religion" value ="JAIN">JAIN</option>
<option name="religion" value ="OTHER">OTHER</option>

</select>
</td></tr>


<tr> <td> PARENT ZONE </td><td><abbr title ="PARENT ZONE OF EMPLOYEE">
<select name="p_zone">
<option name="p_zone" value ="EAST">EAST</option>
<option name="p_zone" value ="WEST">WEST</option>
<option name="p_zone" value ="NORTH">NORTH</option>
<option name="p_zone" value ="SOUTH">SOUTH</option>
<option name="p_zone" value ="NORTH-EAST">EAST</option>
</select>
</td></tr>

<tr> <td> CURRENT ZONE </td><td><abbr title ="CURRENT ZONE OF EMPLOYEE">
<select name="c_zone">
<option name="c_zone" value ="EAST">EAST</option>
<option name="c_zone" value ="WEST">WEST</option>
<option name="c_zone" value ="NORTH">NORTH</option>
<option name="c_zone" value ="SOUTH">SOUTH</option>
<option name="C_zone" value ="NORTH-EAST">EAST</option>
</select>
</td></tr>

<tr> <td> CURRENT REGION </td><td><abbr title ="CURRENT REGION"><input type ="text" name="c_region" value="<?php echo $row['c_region'];?>" /></td></tr>

<tr> <td> EDUCATIONAL QUALIFICATION </td><td><abbr title ="EDUCATIONAL QUALIFICATION"><input type ="text" name="edu_quali" value="<?php echo $row['edu_quali'];?>" /></td></tr>

<tr> <td> DATE OF RETIREMENT</td><td><abbr title ="Date of Retirement"><input type ="date" name="dor" value="<?php echo $row['dor'];?>" /></td></tr>

<tr> <td> REMARKS </td><td><abbr title ="REMARKS"><input type ="text" name="remarks" value="<?php echo $row['remarks'];?>" /></td></tr>

<tr><td colspan ="2" align "center"> <input type ="submit" name="submit" value="Submit"></td></tr>
</table>
 <?php }?>
</form>

</div>
</div>
<?php
}
else
{
	echo "Sorry! You are not authorized to perform this operation.Please Login first with proper Username & Password.\n ";
	$link = 'n_menu.php';
	echo "<a href='".$link."'>Back to Menu</a>";
	
	
}
?>
</center>

</body>
</html>