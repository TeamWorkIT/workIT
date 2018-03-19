<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login |WorkIT SoftWare Company Limited</title>
    <?php include'inc/header.php'; ?>
    </head>
<body style="background-image: url(img/backg.jpg);background-size: cover;">
<!--Main Navigation-->
<header>
<?php include'inc/nav.php'; ?>        
</header>
<!--Main Navigation-->
<!--Main layout-->
<main style="margin-top: 100px;text-align: center;width: 360px;margin-left: 500px;opacity: 0.8">
	
	<div class="form form-control" >
<h2>Login</h2>
	<form method="POST" action="inc/login.inc.php">
		<input type="text" required="" name="email" class="input form-control"  placeholder="Email">
		<br>
		<input type="text" name="pwd" class="form-control" required="" placeholder="Password">
		<button name="submit" type="submit" class="btn btn-success">Log In</button>
		Not a user? <a href="signup.php">SignUp</a>
	</form>
</div>
</main>

</body>
</html>