<?php
	//list of my own users
	$dbh=mysql_connect ("localhost", "chuyuany_root", "888emreal")
	or die ('I cannot connect to the database.');
	mysql_select_db ("chuyuany_choco_db");
	$query = "SELECT * FROM choco_users";
	$result = mysql_query($query);
	$user_array = array();
	while ($row = mysql_fetch_array($result, MYSQL_NUM))
		$user_array[] = $row;

	//list of remote users
	$ch = curl_init("http://kitkavicky.com/getusers.php");
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	$user_array_1 = unserialize(base64_decode($result));
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
				<li><a href="login.php">Admin</a></li>
				<li><a href="user.php">User</a></li>
				<li><a href="#">All Users</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h1>Users From All Company Websites</h1>
		<table class="table user-table-all">
			<thead>
		    	<tr>
		    		<th>Firstname</th>
		    		<th>Lastname</th>
		    		<th>Email</th>
		    		<th>Home Address</th>
		    		<th>Home Phone</th>
		    		<th>Cell Phone</th>
		    	</tr>
		    </thead>
			<tbody>
				<?php
					foreach($user_array as $user) {
						echo '<tr>';
						foreach($user as $usercolumn) {
							echo '<td>'.$usercolumn.'</td>';
						}
						echo '</tr>';
					}
					foreach($user_array_1 as $user1) {
						echo '<tr>';
						foreach($user1 as $usercolumn1) {
							echo '<td>'.$usercolumn1.'</td>';
						}
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>