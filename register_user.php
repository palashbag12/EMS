<?php
session_start();
?>

<?php
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

$uname = $_REQUEST["uname"];
$email =$_REQUEST["email"];



$u_type =$_REQUEST["u_type"];
$pass = $_REQUEST["pass"];
$pass = md5($pass);

$sql = "SELECT username  FROM login_tb WHERE username = '$uname' ";

$result = $conn->query($sql);
$num_rows = $result->num_rows;
if($num_rows == 1)
{
	echo '<script>alert("Username alredy taken")</script>';
	echo "<font size=10> Username alredy taken, please try another one.";
	
}
else
{

$sql = "INSERT INTO login_tb 
VALUES ('','$uname', '$pass','$email','$u_type')";

if ($conn->query($sql) === TRUE) {
	
	echo '<script>alert("Registration Done")</script>';
    echo "<font size=10 color=red>Thank you for registration</font><br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<html>
<head>
<title></title>
</head>

<body bgcolor="#C194EE">
<center>
<table border ="10" cellpadding ="5" cellspacing ="5">

<tr><td><a href="s_menu.php">Back to Main Menu Page</a></td></tr>
<tr><td><a href="registration.php">Try to Register again </a></td></tr>
</body>
</html>
