<?php 
	if(empty($_COOKIE['visited']))
		$visited = array();
	else {
		$visited = unserialize(base64_decode($_COOKIE['visited']));
		//delete previous record of same product
		foreach($visited as $k => $v) {
			if($v == "product5")
				unset($visited[$k]);
		}
	}
	$visited[] = "product5";
	setcookie('visited', base64_encode(serialize($visited)), time()+365*24*3600);
	
	$dbh=mysql_connect ("localhost", "chuyuany_root", "888emreal")
	or die ('I cannot connect to the database.');
	mysql_select_db ("chuyuany_choco_db");
	$query = "UPDATE choco_products SET visits = visits + 1 WHERE productid = 'product5'";
	mysql_query($query);
	mysql_query("UPDATE products_1 SET VisitedNum = VisitedNum + 1 WHERE ProductID = '105'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ms. Brown's Chocolates</title>
	<link href="../bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: #FFE1B1;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
		    	<a class="navbar-brand" href="#">Ms. Brown's</a>
		    </div>
			<ul class="nav navbar-nav">
				<li><a href="../index.php">Home</a></li>
				<li><a href="../about.php">About</a></li>
				<li><a href="../products.php">Products</a></li>
				<li><a href="../news.php">News</a></li>
				<li><a href="../contacts.php">Contacts</a></li>
				<li><a href="../login.php">Admin</a></li>
				<li><a href="../user.php">User</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="product-box">
			<div class="row">
				<h2>Brown Factory Chocolate Tubes</h2>
			</div>
			<div class="row">
				<img src="../img/product5.jpg">
			</div>
			<div class="row">
				A stick of Dark Chocolate 61% with a unique shape, slim and original, that introduces a new way to enjoy chocolate with finesse and elegance. Delicate sweet bitterness, strong and lingering on the palate.
			</div>
		</div>
	</div>
	<script src="../jquery-3.1.1.min.js"></script>
	<script src="../bootstrap.min.js"></script>
</body>
</html>