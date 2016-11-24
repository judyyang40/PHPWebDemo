<!DOCTYPE html>
<html>
<head>
	<title>Contacts | Ms. Brown's Chocolates</title>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: #f9cccc;">
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
				<li><a href="#">Contacts</a></li>
				<li><a href="login.php">Admin</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="allusers.php">All Users</a></li>
			</ul>
		</div>
	</nav>
	<div class="container" style="max-width: 900px;">
		<div class="contact-header">Contacts</div>
		<?php 
			$lines = file("contacts.txt");
			foreach($lines as $k => $v){
				if($k % 4 == 0)
					echo '<div class="contact-info"><h3>'.$v.'</h3>';
				elseif($k % 4 == 3)
					echo $v.'</div>';
				else
					echo $v.'<br>';
			}
		?>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>