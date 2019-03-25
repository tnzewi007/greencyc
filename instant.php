<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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
	$landmark = correct($_POST['landmark']);
	$city = correct($_POST['city']);
	$interest = correct($_POST['interest']);
	$collection = correct($_POST['collection']);
	$comment = correct($_POST['comment']);
	

if ($firstname != ""){
	if ($lastname != ""){
	//	if ($bizname != ""){
			if($email != ""){
				if (filter_var($email, FILTER_VALIDATE_EMAIL)){

					if($phone != ""){
						if(ctype_digit($phone)){

							if($city != ""){
								if($address != ""){
									if($landmark != ""){
									if($interest != ""){
										if($collection != ""){
											//if($comment != ""){
												
																$call = instant($firstname, $lastname, $email, $phone, $address, $landmark, $city, $interest, $collection, $comment);
															
											//}else echo ""
										}else echo "Collection required";
									}else echo "Interest required";
								}else echo "Specify the landmark";
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
<form method="post" target="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<input type="text" name="firstname" required placeholder="Firstname" class="form-control">
	<input type="text" name="lastname" required placeholder="Lastname" class="form-control">
	<input type="text" name="email"  required placeholder="Email" class="form-control">
	<input required type="tel" name="phonenumber" placeholder="Phone Number" class="form-control">
	<input type="text" name="address"  required placeholder="Address" class="form-control">
	<input type="text" name="landmark"  required placeholder="landmark" class="form-control">
	<input type="text" name="city"  required placeholder="City" class="form-control">
	<input type="text" name="interest"  required placeholder="Interest" class="form-control">
	<input type="text" name="collection"  required placeholder="Collection" class="form-control">
	<input type="text" name="comment"  required placeholder="comment" class="form-control">
	
	<input type="submit" name="submit" value="Pick Up" class="btn btn-default submit-btn">
</form>


</body>
</html>