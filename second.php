
<?php

session_start();
echo "Hi   ".$_POST['uname']."<br>";
echo "You have successfully logged in !"."<br>";

?>

<html>

<a href ="logout.php"> Logout </a>

</html>
