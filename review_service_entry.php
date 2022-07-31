<?php session_start();

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
if($_SESSION['uname']==true && ($_SESSION['u_type']=="s_user" ||$_SESSION['u_type']=="n_user") )
{

?>
<html>
<body>

<center>
<table border ="10" cellpadding ="5" cellspacing ="5" >
<h3>REVIEW OF SERVICE: 30 YEARS OF SERVICE</h3>

<form action="review_service.php" method="post">
<tr> <td>Review Period : from <input type="date" name="dtf" > </td> <td>to</td> <td><input type="date" name="dtt" ></td>
<td><input type="submit" name="submit" value="Ok"></td> </tr>
</form>
</body>

<?php
}
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=login1.php>Login</a>";
	
	
}
?>
</html>
