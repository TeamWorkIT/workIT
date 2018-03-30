<!DOCTYPE html>
<html lang="en">
<head>    
    <title>WorkIT SoftWare Company Limited</title>
    <?php include'inc/header.php'; ?>
    </head>
<body>
<!--Main Navigation-->
<header>
<?php include'inc/nav.php'; ?>        
</header>
<!--Main Navigation-->
<!--Main layout-->
<main>
<!--Main container-->
<div class="container-fluid" style="margin-top:30px;">
<div class="row">
<div class="col-md-3">
	<form style="background-color:#E8E8E8 ;border-radius: 9px;border-left: 4px solid #00CCFF"><br><i class="fa fa-bell " style="color:lightgreen;font-size: 30px;"></i>
		Hello,<?php echo $_SESSION['username']; ?>
		Take a Look at Best Sellers on workIT and see if you could find more to work with.
		<br>
		<br>
		<button  class="btn btn-default">Top Workers<i class="fas fa-user"></i></button>
	<br>
	<br>
	</form>
	<br>
	<section style="background-color: #e8e8e8;border-radius: 9px;border-left: 4px solid #00ccff">
		<b>Top searched Categories</b>
	</section>
	<section>
		<i class="fa fa-money"></i>Start Selling
	</section>
</div>
<div class="col-md-9">
	
</div>
</div>
</div>

</main>
</body>
</html>
