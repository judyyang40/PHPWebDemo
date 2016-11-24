<!DOCTYPE html>
<html>
<head>
	<title>Ms. Brown's Chocolates</title>
	<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: #e6ffff;">
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
				<li><a href="#">Admin</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="allusers.php">All Users</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 user-table">
				<table class="table">
					<thead>
				    	<tr>
				    		<th>username</th>
				    		<th>Firstname</th>
				    		<th>Lastname</th>
				    		<th>Email</th>
				    	</tr>
				    </thead>
				    <tbody>
				    <?php 
				    	$lines = file("users.txt");
				    	foreach($lines as $v) {
				    		echo '<tr>';
				    		$userinfo = explode(" ", $v);
				    		echo '<td>'.$userinfo[0].'</td>';
				    		echo '<td>'.$userinfo[2].'</td>';
				    		echo '<td>'.$userinfo[3].'</td>';
				    		echo '<td>'.$userinfo[4].'</td></tr>';
				    	}
				    ?>
				    </tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>