<!DOCTYPE html>
<html>
<head>
	<title>Ms. Brown's Chocolates</title>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: #FFE1B1;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
		    	<a class="navbar-brand" href="#">Ms. Brown's</a>
		    </div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contacts.php">Contacts</a></li>
				<li><a href="login.php">Admin</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="allusers.php">All Users</a></li>
			</ul>
		</div>
	</nav>
	<div class="container product-box">
		<h2 class="previous-header">Most Visited Products</h2>
		<?php
			$dbh=mysql_connect ("localhost", "chuyuany_root", "888emreal")
			or die ('I cannot connect to the database.');
			mysql_select_db ("chuyuany_choco_db");
			$query = "SELECT productid, productname FROM choco_products ORDER BY visits DESC LIMIT 0, 5";
			$result = mysql_query($query);
			error_log(mysql_error());
			while($row = mysql_fetch_array($result, MYSQL_NUM))
				echo '<div class="previous-products"><a href="'.$row[0].'.php">'.$row[1].'</a></div>';
		?>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>