<?php session_start();

if($_SESSION['uname']==true)

{
	?>

<html>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>

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
<?php
$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "emp_db";

$conn = new mysqli ($Servername, $Username, $Password, $dbname);

if ($conn->connect_error) {
	die ("Connection failed: ". $conn->connect_error);
	}
	
	$string1 = $_POST['dtf'];
 $date1 = DateTime::createFromFormat("Y-m-d", $string1);
 $rdomf=date_add($date1,date_interval_create_from_date_string("6 month"));
 
 $string2 = $_POST['dtt'];
 $date2 = DateTime::createFromFormat("Y-m-d", $string2);
 $rdomt=date_add($date2,date_interval_create_from_date_string("6 month"));
 
 $r1=date_format($date1,"Y-m-d");
 $r2=date_format($date2,"Y-m-t");
 echo "<center>";
 echo "Employees attaining 50 years of age within:";
 echo $r1."<br>";
 echo "to ".$r2."<br>"; 
 
$sql1 = "select * from emp_tb";
$result = $conn->query($sql1);

echo "<table cellpadding=5 cellspacing=5><tr><th>Name</th><th>Designation</th><th>CPF No.</th><th>Gender</th><th>D.O.B</th><th>DOA</th></tr>";
while($row = $result->fetch_assoc())  
	{
			
		$s1=$row["dob"];
		$dob = DateTime::createFromFormat("Y-m-d", $s1);
		
	
		$dof=date_add($dob,date_interval_create_from_date_string("50 years"));
		$dof=date_format($dof,"Y-m-d");
		
	
		if ($dof >=$r1 && $dof <= $r2)
		{	
			?>
			
			
			 <td align="center"><?php echo $row["name"]; ?></td> 
			<td align="center"><?php echo $row["designation"];?></td>
			<td align="center"><?php echo $row["cpf"];?></td>
			<td align="center"><?php echo $row["gender"];?></td>
			<td align="center"><?php echo $row["dob"]; ?></td>
			<td align="center"><?php echo $row["doa"]; ?></td></tr>
			
			
			<?php
		}
		
	}
	
			
$conn->close();	

}
?>

</body>
</table>
</html>