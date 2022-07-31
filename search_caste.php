<?php
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
error_reporting(E_ALL & ~E_NOTICE);

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


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_db";



if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list']) && !empty($_POST['s']))
{
	echo "Employee Category:" .$_POST['s']."</br>";
// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check_list'] as $selected)
	{
		$value [] = $selected;
	}
	$v1 = $value[0];
	$v2 = $value[1];
	echo "Employee Type:" .$v1. "</br>" .$v2."</br>";
	
	foreach($_POST['check_list1'] as $selected)
	{
		$value1 [] = $selected;
	}
	$v_caste1 = $value1[0];
	$v_caste2 = $value1[1];
	$v_caste3 = $value1[2];
	$v_caste4 = $value1[3];
	echo "Employee Caste:" .$v_caste1. "</br>" .$v_caste2."</br>".$v_caste3."</br>".$v_caste4."</br>";
	
	
}


}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from emp_tb 
WHERE emp_tb.category = '$_POST[s]' and  (emp_tb.employee_type ='$v1' or emp_tb.employee_type ='$v2')
and (emp_tb.caste ='$v_caste1' or emp_tb.caste ='$v_caste2'or emp_tb.caste ='$v_caste3'or emp_tb.caste ='$v_caste4' )";
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


</body>
</html>






