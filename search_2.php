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
?>

<html>
<head>
<title></title>
</head>
<body>
<table align="center"><tr>
<form action="search_cat.php" method="post">
<td>Search:By Category</td>
<td><select name="s">
<option name="search_cate" value="I">I</option>
	
<option name="search_cate" value="II">II</option>
	

<option name="search_cate" value="III">III</option>
	

<option name="search_cate" value="IV">IV</option>
</select>
</td>
<th> Employee Type
<td><input type="checkbox" name="check_list[]" value="DR"><label>DR</label><br/>
<td><input type="checkbox" name="check_list[]" value="PR"><label>PR</label><br/>
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


