<?php 
require_once('connect.php');

if (isset($_POST["signup"])) {
	
	$fullname = $_POST['FullName'];
	$email = $_POST['Email'];
	$category = $_POST['Category'];
	$pswrd = $_POST['Password'];

	$new_pass = crypt($pswrd,'test');


	$query = "INSERT INTO tblseller_service (FullName, Email, Category, Password) VALUES('$fullname', '$email', '$category', '$new_pass')";

	



	if(empty($_POST["FullName"]) && empty($_POST["Email"]) && empty($_POST["Categories"]) && empty($_POST["Password"])) {

	echo '<script>alert("All fields are required")</script>';}

	 else{
		$fullname = mysqli_real_escape_string($connect, $fullname);
		$email = mysqli_real_escape_string($connect, $email);
		$category = mysqli_real_escape_string($connect, $category);
		$pswrd = mysqli_real_escape_string($connect, $pswrd);
	     }
	     if (mysqli_query($connect, $query))
	     {
	     	echo "<script>alert('Registration Succesful') </script>";
	     }
}




?>

