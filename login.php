<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include("connect.php");
$commercial = "commercial";
$residential = 'residential';


function correct($a){
	$a = htmlspecialchars($a);
	$a = trim($a);
	$a = stripslashes($a);

	return($a); 
}


if (isset($_POST['submit'])){
	include "function.php";
	$email = correct($_POST['email']);
	$password = correct($_POST['password']);
	$service = $_POST['service'];


	if ($service == $commercial){

	if ($email != ""){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			if ($password != ""){
				
					$call = commerciallogin($email, $password);

				
			}else echo "Password required";

		}else echo "Email is not correct";
}else echo "Email is empty";
}
elseif($service == $residential){
	if ($email != ""){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			if ($password != ""){
				

					$call = residentiallogin($email, $password);

							}else echo "Password required";

		}else echo "Email is not correct";
}else echo "Email is empty";
}


else {
	Echo "Select any of the three service";
}
}




?>
<form method="post" target="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		
	<input type="text" name="email"  required placeholder="Email" class="form-control">
	<input type="password" name="password" required placeholder="Password" class="form-control">

	Residential<input type="radio" name="service" value="residential">Commercial<input type="radio" name="service" value="commercial">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>