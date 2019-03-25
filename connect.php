<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "greencyc";

$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
	echo "Unable to connect to server". die(myqsli_error());
}

?>