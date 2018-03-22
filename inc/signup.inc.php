<?php
if (isset($_POST['submit'])) {
	
include_once'dbh.inc.php';

$first = mysqli_real_escape_string($conn,  $_POST['first']);
$last = mysqli_real_escape_string($conn,  $_POST['last']);
$email = mysqli_real_escape_string($conn,  $_POST['email']);
$username = mysqli_real_escape_string($conn,  $_POST['username']);
$password = mysqli_real_escape_string($conn,  $_POST['pwd']);

//Error Handlers
//Chec for empty fields

if (empty($first) || empty($last) || empty($email) || empty($username) || empty($password)) {
	$ErrEmpty = 'Empty Fields';
	print $ErrEmpty;
	header("Location: ../signup.php?EmptyFields");
	exit();
}
else{
	//check if input charactrs are valid
	 if (!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last) ){

header("Location: ../signup.php?signup=invalidCharactersInFields");
	exit();
	 	
	 }
	 else{
	 	//check if email id valid
	 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 		header('Location: ../signup.php?signup=Email');
	exit();
	 	}
	 	else
	 		{
	 			$sql = "SELECT * FROM users WHERE username = '$username'";
	 			$result = mysqli_query($conn , $sql);
	 			$resultCheck = mysqli_num_rows($result);

	 			if ($resultCheck > 0) {
	 				header("Location: ../signup.php?Existing User");
	 				exit();
	 			}
	 			else{
//hashing the password
	 				$hashedPwd = password_hash($password , PASSWORD_DEFAULT);
	 				//Insert the user into the database

$sql = "INSERT INTO users (Firstname, lastname, email, username, password) VALUES('$first', '$last','$email', '$username','$hashedPwd');";

mysqli_query($conn , $sql);
header("Location: ../signup.php?success");


	 			}
	 		}
	 }

}
}
else{
	header('Location: ../signup.php');
	exit();
}

?>