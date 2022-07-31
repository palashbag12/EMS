<?php session_start();?>
<?php
 if ($_SESSION['uname']==true && $_SESSION['u_type']=="s_user")
{
	include 's_menu.php';
}
else {
	include 'n_menu.php';
}
?>

<?php
if($_SESSION['uname']==true && ($_SESSION['u_type']=="s_user" ||$_SESSION['u_type']=="n_user") )
{

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

<center>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from emp_pp_tb";
$result = $conn->query($sql);
echo "EMPLOYEE POSTING PROFILE";
if ($result->num_rows > 0) 
 {
    echo "<table cellpadding=5 cellspacing=5><tr><th>ID</th><th>Name</th><th>Designation</th><th>CPF No.</th><th>Place of Posting</th><th>Date From</th><th>Date To</th>
	
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc())  
	{
		
		?>
<tr>
 <td align="center"><?php echo $row["id"]; ?></td>
 <td align="center"><?php echo $row["name"]; ?></td>
 <td align="center"><?php echo $row["designation"];?></td>
 <td align="center"><?php echo $row["cpf"];?></td>
 <td align="center"><?php echo $row["place"];?></td>
 <td align="center"><?php echo $row["from_date"]; ?></td>
 <td align="center"><?php echo $row["date_to"]; ?></td>
 
 </tr>
		
		
         <?php		
		     
    }
    echo "</table>";
 } else 
  {
	  	  
      echo "0 results";
  }

$conn->close();
?>

<?php
}


else {
	echo "Sorry! Please Login first with proper Username & Password<a href=Login.php>Login</a>";
}
?>




</center>
<body>
</html> 