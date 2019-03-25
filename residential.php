<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" target="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

<?php 
include ("connect.php");
function correct($a){
	$a = htmlspecialchars($a);
	$a = trim($a);
	$a = stripslashes($a);

	return($a); 
}
if (isset($_POST['submit'])){

	include("function.php");
	$firstname = correct($_POST['firstname']);
	$lastname = correct($_POST['lastname']);
	$email = correct($_POST['email']);
	$phone = correct($_POST['phonenumber']);
	$address = correct($_POST['address']);
	$junction = correct($_POST['junction']);
	$city = correct($_POST['city']);
	$interest = correct($_POST['interest']);
	$collection = correct($_POST['collection']);
	$comment = correct($_POST['comment']);
	$password = correct($_POST['password']);
	$hidden = md5($password);
	$confirmpassword = correct($_POST['confirmpassword']);


if ($firstname != ""){
	if ($lastname != ""){
	//	if ($bizname != ""){
			if($email != ""){
				if (filter_var($email, FILTER_VALIDATE_EMAIL)){

					if($phone != ""){
						if(ctype_digit($phone)){

							if($city != ""){
								if($address != ""){
									if($junction != ""){
									if($interest != ""){
										if($collection != ""){
											//if($comment != ""){
												if($password != ""){
													if($confirmpassword != ""){
														if($password <= 10){

															if ($password == $confirmpassword){

																$call = residential($firstname, $lastname, $email, $password, $phone, $address, $junction, $city, $interest, $collection, $comment);
															}else echo "Password does not match";
														}else echo "Password length should be less than 10";
													}else echo "Confirmpassword field should not be empty";
												}else echo "Required field password";
											//}else echo ""
										}else echo "Collection required";
									}else echo "Interest required";
								}else echo "Specify the nearest juction";
								}else echo "Address should be indicated";

							}else echo "City field required";
						}else echo " Correct Phone Number required";
					}else echo "Phone number should not be empty";

				}else echo "Email not correct";
			}else echo "Email should not be empty";
}else echo "Lastname required";
}else echo "Firstname required";
}
?>
	<input type="text" name="firstname" required placeholder="Firstname" class="form-control">
	<input type="text" name="lastname" required placeholder="Lastname" class="form-control">
	<input type="text" name="email"  required placeholder="Email" class="form-control">
	<input required type="tel" name="phonenumber" placeholder="Phone Number" class="form-control">
	<input type="text" name="address"  required placeholder="Address" class="form-control">
	<input type="text" name="junction"  required placeholder="junction" class="form-control">
	<input type="text" name="city"  required placeholder="City" class="form-control">
	<input type="text" name="interest"  required placeholder="Interest" class="form-control">
	<input type="text" name="collection"  required placeholder="Collection" class="form-control">
	<input type="text" name="comment"  required placeholder="comment" class="form-control">
	<input type="password" required name="password" placeholder="Password" class="form-control">
	
	<input type="password" required name="confirmpassword" placeholder="Confirm Password" class="form-control">
	
	<input type="submit" name="submit" value="register" class="btn btn-default submit-btn">
</form>


</body>
</html>