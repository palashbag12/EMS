
<html>
<head>
<header>

</header>
</head>
<body bgcolor="C194EE">

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
if($_SESSION['uname']==true && ( $_SESSION['u_type']=="s_user" ||$_SESSION['u_type']=="n_user"))


{
?>
<center>
<table border ="10" cellpadding ="5" cellspacing ="5">

<form action="insert.php" method ="request">

<h4> ADD EMPLOYEE DETAILS</h4>

<tr> <td> NAME </td><td><abbr title ="Name"><input type ="text" name="name" placeholder ="Enter the name of the Employee" required</td></tr>
<tr> <td> DESIGNATION </td><td><abbr title ="Designation"><input type ="text" name="designation" placeholder ="Enter the designation" required</td></tr>

<tr> <td> CPF NO </td><td><abbr title ="CPF No."><input type ="text" name="cpf" placeholder ="Enter the CPF No. of the Employee" required</td></tr>

<tr> <td> GENDER </td><td><abbr title ="Gender">
<select name="gender">
<option name="gender" value ="Male">Male</option>
<option name="gender" value ="Female">Female</option>
<option name="gender" value ="Transgender">Transgender</option>
</select>
</td></tr>

<tr> <td> D.O.B </td><td><abbr title ="Date of Birth"><input type ="date" name="dob" placeholder ="Enter the DOB of the Employee" required</td></tr>
<tr> <td> DATE OF APPOINTMENT</td><td><abbr title ="Date of Appointment"><input type ="date" name="doa" placeholder ="Enter the Date of Appointment of the Employee" required</td></tr>
<tr> <td> DATE OF PROMOTION</td><td><abbr title ="Date of Promotion"><input type ="date" name="dop" placeholder ="Enter the Date of Promotion of the Employee" required</td></tr>

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

<tr> <td> PRESENT PLACE OF POSTING </td><td><abbr title ="Present Place of Posting"><input type ="text" name="office_name" placeholder ="Enter the office name of the Employee" required</td></tr>
<tr> <td> SINCE POSTED IN PRESENT OFFICE</td><td><abbr title ="Date from which posted in present office"><input type ="date" name="doj_oname" placeholder ="Enter the Date of Joining in Present Office of the Employee" required</td></tr>


<tr> <td> POSTING TYPE </td><td><abbr title ="Posting Type Allowance/NON-ALLOWANCE">
<select name="post_type">
<option name="post_type" value ="ALLOWANCE">ALLOWANCE</option>
<option name="post_type" value ="NON-ALLOWANCE">NON-ALLOWANCE</option>
</select>
</td></tr>

<tr> <td> SINCE POSTED IN ALLOWANCE/NON-ALLOWANCE AREA</td><td><abbr title ="Date from which posted in present area"><input type ="date" name="doj_postarea" placeholder ="Enter the Date of Joining in the area" required</td></tr>

<tr> <td> CASTE</td><td>UR<input type ="radio" name="caste" value="UR" checked="checked">
SC<input type ="radio" name="caste" value="SC" >
ST<input type ="radio" name="caste" value="ST" >
OBC<input type ="radio" name="caste" value="OBC" >
</td></tr>

<tr> <td> SUB-CASTE </td><td><abbr title ="Subcaste"><input type ="text" name="subcaste" placeholder ="Enter the subcaste of the Employee" required</td></tr>

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

<tr> <td> CURRENT REGION </td><td><abbr title ="CURRENT REGION"><input type ="text" name="c_region" placeholder ="Current Region of the Employee" required</td></tr>

<tr> <td> EDUCATIONAL QUALIFICATION </td><td><abbr title ="EDUCATIONAL QUALIFICATION"><input type ="text" name="edu_quali" placeholder ="Education Qualification of the Employee" required</td></tr>


<tr> <td> REMARKS </td><td><abbr title ="REMARKS"><input type ="text" name="remarks" placeholder ="Remarks"</td></tr>

<tr><td colspan ="2" align = "center"> <input type ="submit" name="submit" value="Submit"></td></tr>

</table>
</form>
</center>
<?php
?>

<?php
}
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login.php>Login</a>";
	
	
}
?>
</body>
</html>

