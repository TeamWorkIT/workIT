<?php
session_start();
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WordPress Apps| WorkIT</title>
<?php include 'inc/header.php'; ?>
</head>
<body>
<!--Main Navigation-->
<header>
<?php include'inc/wpnav.php'; ?>        
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
<!--Main container-->
</main>
</body>
</html>
