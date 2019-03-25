<?php
include ("connect.php");
session_start();

function commercial($a, $a1, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k){
	include("connect.php");
	$a = mysqli_real_escape_string($conn, $a);
$a1 = mysqli_real_escape_string($conn, $a1);
	$b = mysqli_real_escape_string($conn, $b);
	$c = mysqli_real_escape_string($conn, $c);
	$d = mysqli_real_escape_string($conn, $d);
	$e = mysqli_real_escape_string($conn, $e);
	$f = mysqli_real_escape_string($conn, $f);
	$g = mysqli_real_escape_string($conn, $g);
	$h = mysqli_real_escape_string($conn, $h);
	$i = mysqli_real_escape_string($conn, $i);
	$j = mysqli_real_escape_string($conn, $j);
	$k = mysqli_real_escape_string($conn, $k);


$sql = mysqli_query($conn, "INSERT into commercial(firstname, lastname, bizname, biztype, email, password, phone, address, city, interest, collection, comment) values ('$a', '$a1', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k')") or die(mysqli_error($conn));
	if ($sql == true){

		echo "Successfull Registration";
	}

	else{
		echo "Unsuccesfull Registration";
	}

}

function residential($a, $a1, $b, $c, $d, $e, $f, $g, $h, $i, $j){
	include("connect.php");
	$a = mysqli_real_escape_string($conn, $a);
	$a1 = mysqli_real_escape_string($conn, $a1);
	$b = mysqli_real_escape_string($conn, $b);
	$c = mysqli_real_escape_string($conn, $c);
	$d = mysqli_real_escape_string($conn, $d);
	$e = mysqli_real_escape_string($conn, $e);
	$f = mysqli_real_escape_string($conn, $f);
	$g = mysqli_real_escape_string($conn, $g);
	$h = mysqli_real_escape_string($conn, $h);
	$i = mysqli_real_escape_string($conn, $i);
	$j = mysqli_real_escape_string($conn, $j);
	


$sql = mysqli_query($conn, "INSERT into residential(firstname, lastname, email, password, phone, address, junction, city, interest, collection, comment) values ('$a', '$a1', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')") or die(mysqli_error($conn));
	if ($sql == true){

		echo "Successfull Registration";
	}

	else{
		echo "Unsuccesfull Registration";
	}

}


function instant($a, $a1, $b, $c, $d, $e, $f, $g, $h, $i, $j){
	include("connect.php");
	$a = mysqli_real_escape_string($conn, $a);
	$a1 = mysqli_real_escape_string($conn, $a1);
	$b = mysqli_real_escape_string($conn, $b);
	
	$d = mysqli_real_escape_string($conn, $d);
	$e = mysqli_real_escape_string($conn, $e);
	$f = mysqli_real_escape_string($conn, $f);
	$g = mysqli_real_escape_string($conn, $g);
	$h = mysqli_real_escape_string($conn, $h);
	$i = mysqli_real_escape_string($conn, $i);
	$j = mysqli_real_escape_string($conn, $j);
	


$sql = mysqli_query($conn, "INSERT into instant(firstname, lastname, email, phone, address, landmark, city, interest, collection, comment) values ('$a', '$a1', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')") or die(mysqli_error($conn));
	if ($sql == true){

		echo "Successfull Registration";
	}

	else{
		echo "Unsuccesfull Registration";
	}

}

function commerciallogin($a, $b){
	include("connect.php");
	$a = mysqli_real_escape_string($conn, $a);
	$b = mysqli_real_escape_string($conn, $b);

	$sql = mysqli_query($conn, "SELECT * from commercial where email = '$a' and password = '$b'");
	if(!$sql){
   	die("Could not reach server".$conn->error);
   }else{
   	   if($sql->num_rows == 1){
   	   	$_SESSION['name'] = $a;
        echo "<script>window.location.href='dashboard.php'</script>";
        //header("Location:dashboard.php");
   	   }else{
       echo "Invalid Email or Password";
   	   }

}
}

function residentiallogin($a, $b){
	include("connect.php");
	$a = mysqli_real_escape_string($conn, $a);
	$b = mysqli_real_escape_string($conn, $b);

	$sql = mysqli_query($conn, "SELECT * from residential where email = '$a' and password = '$b'");
	if(!$sql){
   	die("Could not reach server".$conn->error);
   }else{
   	   if($sql->num_rows == 1){
   	   	$_SESSION['name'] = $a;
        echo "<script>window.location.href='dashboard.php'</script>";
        //header("Location:dashboard.php");
   	   }else{
       echo "Invalid Email or Password";
   	   }

}
}

?>