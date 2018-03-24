<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("Location: index.php");
}
else{
	header("Location: andriodapps.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AndriodApplications| WorkIT</title>
<?php include 'inc/header.php'; ?>
</head>
<body>
<!--Main Navigation-->
<header>
<?php include'inc/andriodnav.php'; ?>        
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
<!--Main container-->
</main>
</body>
</html>
