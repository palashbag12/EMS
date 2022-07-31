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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_REQUEST['cpf'];
$query = "DELETE FROM emp_tb WHERE cpf=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>
<?php
}
else
{
echo "Sorry! You are not authorized to perform this operation.Please Login first with proper Username & Password.\n ";
	$link = 'n_menu.php';
	echo "<a href='".$link."'>Back to Menu</a>";
	}