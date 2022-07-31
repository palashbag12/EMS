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
<form action="search_name.php" method="post">
<td>Search:By Name</td> <td> <input  type="text" name="name"> </td>
<td><input  type="submit" name="submit" value="Search"> </td>

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
