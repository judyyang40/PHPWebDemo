<?php 
	extract($_POST);
	$res = "nologin";
	if(isset($enter)) {
		if(!$username || !$password) {
			$res = "blank";
		}
		else {
			if(!($file = fopen("users.txt", "r"))) {
				echo '<div>Could not open User file for authentication!</div>';
				die();
			}
			$res = "wrong";
			while(!feof($file)) {
				$line = fgets($file, 255);
				$line = chop($line);
				$info = explode(" ", $line);
				if($info[0] == $username) {
					if($info[1] == $password) {
						header("Location: admin.php");
						die();
					}
					break;
				}
			}
		}
	}
?>
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
		<div class="col-md-4">
			<form action="login.php" method="post">
				<?php 
					if($res == "blank") echo '<div id="blank">Please fill in a username and password</div>';
					else if($res == "wrong") echo '<div id="wrong">Wrong username or password</div>';
				?>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" name="password">
				</div>
				<button type="submit" class="btn btn-default" name="enter">Enter</button>
			</form>
		</div>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>