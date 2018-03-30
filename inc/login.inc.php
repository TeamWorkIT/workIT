<?php
$email ='';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email = $_POST['email'];

 	include 'dbh.inc.php';
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	
	$password = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//Error Handlers
	//check if inputs are empty
	
	if (empty($email) || empty($password)) {

		$ErrEmpty = 'Fields Are Empty';
		header("Location: ../login.php");
	}
	else{
		//sql query 
		$sql = "SELECT * FROM users WHERE email = '$email' OR username = '$email' ";
	$result = mysqli_query($conn, $sql);
	$reslutCheck = mysqli_num_rows($result);
	if ($reslutCheck < 1) {
		header("Location: ../login.php?login=no_user");
	exit();
	}
	else
		{
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hasing the password
				$hashedPwdCheck = password_verify($password, $row['password']);
				if ($hashedPwdCheck == false) {
					$Errmsg = 'Incorrect Password,Try Again';
	header("Location: ../login.php?login=IncorrectPassword");
	exit();		
		}
		elseif ($hashedPwdCheck == true) {
			//login thr user here
			$Errmsg = 0;
			$_SESSION['username'] = $row['username'];
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['uid'] = $row['id'];
            $uid = $row['id'];
            $email = $row['email'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $username = $row['username'];
            $logintime = $row['TIME'];
			header("Location: ../home.php?email=$email&uid=$uid&registratiodate=$logintime");
			exit();
		}
			}
		}
	}
}else
{
	header('location: ../index.php?Login=ERROR');
	exit();
}

?>