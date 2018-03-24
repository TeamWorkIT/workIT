<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("Location: index.php");
}
else{
	header("Location: graphicsdesign.php");
}

?><!DOCTYPE html>
<html lang="en">
<head>
<title>Graphic Designs| GodzFingers MDB</title>
<?php include 'inc/header.php'; ?>
</head>
<body>
<!--Main Navigation-->
<header>
<?php include'inc/grapnav.php'; ?>        
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
<!--Main container-->
</main>
</body>
</html>
