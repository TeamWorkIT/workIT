<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("Location: index.php");
}
else{
	header("Location: webapps.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Applications|WorkIT</title>
<?php include 'inc/header.php'; ?>
</head>
<body>
<!--Main Navigation-->
<header>
<?php include'inc/webnav.php'; ?>        
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
<!--Main container-->
</main>
</body>
</html>
