
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


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_db";


$search=$_POST['cpf'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from emp_tb WHERE emp_tb.cpf like '$search'";
$result = $conn->query($sql);


if ($result->num_rows > 0) 
 {
    echo "<table cellpadding=5 cellspacing=5><tr><th>ID</th><th>Name</th><th>Designation</th><th>CPF No.</th><th>Gender</th><th>D.O.B</th><th>DOA</th><th>DOP</th>
	<th>Category</th><th>Employee Type</th><th>Present Place of Posting</th><th>DOJ in Present Place</th><th>Place of Posting Type</th>
	<th>Since Posted in Allowance/Non Allowance Area</th><th>Caste</th><th>Sub-Caste</th><th>PH Status</th><th>Ex-SM Status</th><th>Religion</th>
	<th>Parent Zone</th><th>Current Zone</th><th>Current Region</th><th>Educational Qualification</th><th>Date of Retirement</th><th>Remarks</th><th colspan=2>Action</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())  
	{
		
		?>
 <td align="center"><?php echo $row["id"]; ?></td>
 <td align="center"><?php echo $row["name"]; ?></td>
 <td align="center"><?php echo $row["designation"];?></td>
 <td align="center"><?php echo $row["cpf"];?></td>
 <td align="center"><?php echo $row["gender"];?></td>
 <td align="center"><?php echo $row["dob"]; ?></td>
 <td align="center"><?php echo $row["doa"]; ?></td>
 <td align="center"><?php echo $row["dop"];?></td>
 <td align="center"><?php echo $row["category"];?></td>
 <td align="center"><?php echo $row["employee_type"];?></td>
 <td align="center"><?php echo $row["office_name"]; ?></td>
 <td align="center"><?php echo $row["doj_oname"]; ?></td>
 <td align="center"><?php echo $row["post_type"];?></td>
 <td align="center"><?php echo $row["doj_postarea"];?></td>
 <td align="center"><?php echo $row["caste"];?></td>
 <td align="center"><?php echo $row["subcaste"]; ?></td>
 <td align="center"><?php echo $row["ph_status"]; ?></td>
 <td align="center"><?php echo $row["exsm_status"];?></td>
 <td align="center"><?php echo $row["religion"];?></td>
 <td align="center"><?php echo $row["p_zone"];?></td>
 <td align="center"><?php echo $row["c_zone"];?></td>
 <td align="center"><?php echo $row["c_region"];?></td>
 <td align="center"><?php echo $row["edu_quali"];?></td>
 <td align="center"><?php echo $row["dor"];?></td>
 <td align="center"><?php echo $row["remarks"];?></td>
 
 <td align="center">
 <a href="update.php?id=<?php echo $row["id"]; ?>">Update</a>
 </td>
 <td align="center">
 <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
 </td></tr>
		
		
         <?php		
		     
    }
    echo "</table>";
 } else 
  {
	  	  
      echo "0 results";
  }

$conn->close();
?>


</head>
</html>



