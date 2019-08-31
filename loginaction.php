<?php
require_once('connect.php');



 $email = $_POST['email'];
 $password = $_POST['password'];
 $new_pass = crypt($password,'test');


$fetch = "SELECT * FROM tblseller_service WHERE Email = '$email' AND Password ='$new_pass' ";

$result = mysqli_query ($connect, $fetch);

$row = mysqli_fetch_array($result);


if ($result) {
	
	   $mail = $row['Email'];
	   $cart = $row['Category'];
	  

	  switch ($cart) {
	  	case 'seller':
	  		header("location: seller.php");
	  		break;
	  	case 'service':
	  		header("location: land.php");
	  		break;
	  	case 'errand':
	  		header("location: shop.html");
	  		break;

	  	
	  	default:
	  		echo "try again";
	  		break;
	  }



	  

	 
  }

	

 ?>