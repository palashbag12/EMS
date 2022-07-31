<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$uname = $_POST["uname"];
$pass = $_POST["pass"];
$pass = md5($pass);
$sql = "SELECT username, password,u_type FROM login_tb WHERE username = '$uname' and password ='$pass'";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
if($result == false) {
  echo '<a href="login1.php">Error: cannot execute query</a>';
  exit;
}

$num_rows = $result->num_rows;
if($num_rows == 1) {
  $_SESSION["login"] = "OK";
  $_SESSION["uname"] = $uname;
  $_SESSION["u_type"]= $row['u_type'];

 echo "<div align=right>Welcome ".$_SESSION['uname']."</div>"; 
 echo "<div align=right>User Type ".$_SESSION['u_type']."</div>"; 
 if ($_SESSION["u_type"]== "s_user")
 {
 include("s_menu.php");
 }
 else 
 {
	 include("n_menu.php");
 }
?>
 <?php
}

else
{
 	
echo '<script>alert("WRONG USERNAME AND/OR PASSWORD")</script>';

echo "<a href=login1.php>Try to Login again.</a>";
}

?>
<html>
<head>
<title></title>
</head>

<body bgcolor="#C194EE">
<center>

</body>
</html>
