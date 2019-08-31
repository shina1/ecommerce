<?php 
require_once('connect.php');

if (isset($_POST["signup"])) {
	
	$fullname = $_POST['Fullname'];
	$email = $_POST['email'];
	$category = $_POST['cat'];
	$pswrd = $_POST['password'];

	$strgpwsrd = crypt($pswrd, 'test');



	

	$query = "INSERT INTO `tblservice` (FullName, Email, Category, Password) VALUES ('$fullname', '$email', '$category', '$strgpwsrd')";


     // form validation....
	if(empty($_POST["Fullname"]) && empty($_POST["email"]) && empty($_POST["cat"]) && empty($_POST["password"])) {

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

