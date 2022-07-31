<?php
session_start();
if($_SESSION['uname']==true && $_SESSION['u_type']=="s_user")

{
?>
<html>
<head>
</head>
<body bgcolor="#C194EE">
<?php include 's_menu.php';?>
<center>



<h3> EMPLOYEE PROMOTIONAL PAY FIXATION</h3>
<table border ="5" cellpadding ="5" cellspacing ="5">
<form action="insert_inc.php" method="post">

<tr> <td> NAME </td><td><abbr title ="Name"><input type ="text" name="name" required /> </td></tr>

<tr> <td> CPF NO </td><td><abbr title ="CPF No."><input type ="text" name="cpf" required /></td></tr>
<tr> <td> DATE OF BIRTH</td><td><abbr title ="Date of Birth"><input type ="date" name="dob" required</td>
<tr> <td> DATE OF PROMOTION</td><td><abbr title ="Date of Promotion"><input type ="date" name="dop" required</td>
<tr> <td> PROMOTIONAL POST </td><td><abbr title ="Promotional Post"><input type ="text" name="p_post" required /></td></tr>

<tr> <td> OLD BASIC </td><td><abbr title ="Old Basic"><input type ="text" name="old_bp" required/></td></tr>




<td colspan ="2" align = "center"><input type="submit" name="submit" value="Submit" ></td></tr>


</form>
</table>
</center>
<?php
}
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login1.php>Login</a>";
}
?>
</body>
</html>





