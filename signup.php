<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | WorkIT SoftWare Company Limited</title>
    <?php include'inc/header.php'; ?>
    </head>
<body style="background-image: url(img/backg.jpg);background-size: cover;">
<!--Main Navigation-->
<header>
<?php include'inc/nav.php'; 

?>        
</header>
<!--Main Navigation-->
<!--Main layout-->

<main style="margin-top: 100px;text-align: center;width: 360px;margin-left: 500px;opacity: 0.8">
	
	<div class="form form-control" >
<h2 class="animated fadeIn infinite">Signup</h2>
	<form method="POST" action="inc/signup.inc.php" class="animated tada">
		<input type="text"  name="first" class="input form-control"  placeholder="First Name">
		<br>

		<input type="text"  name="last" class="input form-control"  placeholder="Last Name">
		<br>

		<input type="text"  name="username" class="input form-control"  placeholder="Choose a Username">
		<br>

		<input type="text"  name="email" class="input form-control"  placeholder="Email">
		<br>

		<input type="text" name="pwd" class="form-control"  placeholder="Password">
		<input type="file" name="imgupload" class="btn btn-default" value="" placeholder="Upload a Photo">
		<button name="submit" type="submit" class="btn btn-success">Sign Up</button>
		Already a user? <a href="Login.php">Login</a>
	</form>
</div>
</main>

</body>
</html>