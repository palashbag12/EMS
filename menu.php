<?php
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
error_reporting(E_ALL & ~E_NOTICE);
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="skyblue"  size=" 100% 100%";>
<div align="right">


<?php
session_start();
if($_SESSION['uname']==true)

{
?>

<ul>
  <li><a href="menu.php">Home</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employee Details</a>
    <div class="dropdown-content">
      <a href="add.php">Add</a>
	  <a href="view.php">View</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employee Posting Profile</a>
    <div class="dropdown-content">
      <a href="pp_entry.php">Posting Profile Entry</a>	  
	  <a href="view_pp.php">View Posting Profile</a>
    </div>
    
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employee Promotion Details</a>
    <div class="dropdown-content">
      <a href="prom_entry.php">Add Promotion Details</a>
      
	  <a href="view_prom.php">View Promotion Details</a>
	  <a href="inc_entry.php">Promotion Pay Fixation</a>
	  <a href="view_increment.php">View Promotion Pay Fixation</a>
	  
    </div>
	
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Employee Service Review</a>
    <div class="dropdown-content">
      <a href="review_age_entry.php">50 Years of Age</a>
      
	  <a href="review_service_entry.php">30 Years of Service</a>
	  
    </div>
	
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
      <a href="search.php">Search by Name</a>
      <a href="search_2.php">Search by Category</a>
	  <a href="search_3.php">Search by Caste</a>
	  <a href="search_4.php">Search by CPF</a>
	  <a href="search_2.php">Search by DR/PR</a>
	  <a href="search_5.php">Search by Place of Posting</a>
	  <a href="search_6.php">Search by Allowance/Non-Allowance</a>
	  
    </div>
    
	
	
	<li><a href="logout.php">Logout</a></li>
	
</ul>



<?php
}
else
{
	echo "Sorry! Please Login first with proper Username & Password<a href=Login1.php>Login</a>";
	
	
}
?>


</body>
</html>
