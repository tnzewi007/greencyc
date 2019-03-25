<?php
session_start(); 
include "connect.php";
ob_start();

if(!isset($_SESSION['name'])){
	header("location:login.php");
}
$userid = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Welcome <?php echo $_SESSION['name']; ?></p>
</body>
</html>