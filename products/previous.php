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
	<div class="container product-box">
	<h2 class="previous-header">Previous Product Visits</h2>
	<?php
		if(empty($_COOKIE['visited']))
			echo 'You have no previous records of visiting any of our products.';
		else {
			$dbh=mysql_connect ("localhost", "chuyuany_root", "888emreal")
			or die ('I cannot connect to the database.');
			mysql_select_db ("chuyuany_choco_db");

			$visited = unserialize(base64_decode($_COOKIE['visited']));
			$len = sizeof($visited);
			$count = 0;
			$visited_reversed = array_reverse($visited);
			foreach($visited_reversed as $k => $v) {
				$query = "SELECT productname FROM choco_products WHERE productid = '".$v."'";
				$result = mysql_query($query);
				$row = mysql_fetch_array($result);
				echo '<div class="previous-products"><a href="'.$v.'.php">'.$row[0].'</a></div>';
				$count++;
				if($count >=5)
					break;
			}
		}
	?>
	</div>
	<script src="../jquery-3.1.1.min.js"></script>
	<script src="../bootstrap.min.js"></script>
</body>
</html>