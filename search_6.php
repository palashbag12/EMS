<?php session_start();?>
<?php
if($_SESSION['uname']==true && $_SESSION['u_type']=="s_user")

{

 include 's_menu.php';
}
else 
{
	include 'n_menu.php';
}	
?>
<html>
<head>
<title></title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
if($_SESSION['uname']==true && ($_SESSION['u_type']=="s_user"||$_SESSION['u_type']=="n_user"))

{
?>
<center>
<table align="center"><tr>
<form action="search_post_type.php" method="post">

<th> Employee Posting Type:
<td><input type="checkbox" name="check_list[]" value="ALLOWANCE"><label>ALLOWANCE</label><br/>
<td><input type="checkbox" name="check_list[]" value="NON-ALLOWANCE"><label>NON-ALLOWANCE</label><br/>
</th>

<td><input  type="submit" name="submit" value="Search"></td> 
</tr></table>
</form>

</body>

<?php
}
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login.php>Login</a>";
	
	
}
?>

</html>


