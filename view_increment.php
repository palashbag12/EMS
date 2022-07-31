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
<h3> Employee Pay Fixation on Promotion <h3>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_inc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from inc";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
 {
    echo "<table cellpadding=5 cellspacing=5><tr><th>Name</th><th>CPF No.</th>
	<th>DOB</th><th>Promoted To</th><th>DOP</th><th>BP Prior Promotion</th>
	<th> BP after Promotion</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc())  
	{
		
		?>
<tr>
 <td align="center"><?php echo $row["name"]; ?></td>
 <td align="center"><?php echo $row["cpf"]; ?></td>
 <td align="center"><?php echo $row["dob"];?></td>
 <td align="center"><?php echo $row["p_post"];?></td>
 <td align="center"><?php echo $row["dop"];?></td>
 <td align="center"><?php echo $row["old_bp"]; ?></td>
 <td align="center"><?php echo $row["new_bp"]; ?></td>
 
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
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login.php>Login</a>";
	
	
}
?>


</body>
</html> 