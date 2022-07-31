<?php
session_start();
if($_SESSION['uname']==true)
{
?>


<html>
<head>
<title></title>

<header>

</header>
</head>
<body bgcolor="#C194EE">
<center>

<table border="10" cellpadding="5" cellspacing="5">
<form action="register_user.php" method="request">

<h3>User Registration</h3>

<tr><td>Username</td><td><input type="text" name="uname" placeholder="Enter your name" required></td></tr>
<tr><td>Password</td><td><input type="password" name="pass"  placeholder="Enter password"required></td></tr>
<tr><td>Email Id</td><td><input type="text" name="email"  placeholder="Enter email id"required></td></tr>
<tr><td>User Type</td>
<td>
<select name="u_type">
<option name="u_type" value ="s_user">Super User</option>
<option name="u_type" value ="n_user">Normal User</option>

</select>
</td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Save"></td></tr>
<tr><td colspan="2" align="center"><a href="s_menu.php">Back to Main Menu Page</a></td></tr>
</table>
</form>
</center>

<?php 
}
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login1.php>Login</a>";
	
	
}
?>

</body>
<footer>

</footer>
</html>






