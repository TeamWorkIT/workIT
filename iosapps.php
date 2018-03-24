<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("Location: index.php");
}
else{
	header("Location: iosapps.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ios Applications| WorkIT</title>
<?php include 'inc/header.php'; ?>
</head>
<body>
<!--Main Navigation-->
<header>
<?php include'inc/iosnav.php'; ?>        
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
<!--Main container-->
</main>
</body>
</html>
