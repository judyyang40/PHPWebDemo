<?php 
	extract($_POST);
	$res = "none";
	//connect to database
	$dbh=mysql_connect ("localhost", "chuyuany_root", "888emreal")
	or die ('I cannot connect to the database.');
	mysql_select_db ("chuyuany_choco_db");

	if(isset($a) && $a == "create") {
		if(!$firstname || !$lastname || !$email || !$homeaddress || !$homephone || !$cellphone) {
			$res = "blank";
		}
		else {//insert into user table
			$query = "INSERT INTO choco_users (firstname, lastname , email, homeaddress, homephone, cellphone)
			VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$homeaddress."', '".$homephone."', '".$cellphone."')";
			mysql_query($query);
			$res = "created";
		}
	}
	elseif($a == "search") {
		$query = "SELECT * FROM choco_users WHERE ".$searchby." LIKE '%".$searchword."%'";
		$result = mysql_query($query);
		$html = '<table class="table">
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
			    <tbody>';
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			$html .= '<tr>';
			foreach($row as $v) {
				$html .= '<td>'.$v.'</td>';
			}
			$html .= '</tr>';
		}
		$html .= '</tbody></table>';
		echo $html;
		mysql_free_result($result);
		exit();
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
				<li><a href="login.php">Admin</a></li>
				<li><a href="#">User</a></li>
				<li><a href="allusers.php">All Users</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
	<div class="row user-row">
		<div class="col-md-3 left-col-margin">
			<h2>Create a User</h2>
			<form action="user.php" method="post">
				<?php 
					if($res == "blank") echo '<div id="blank">Please fill in all fields</div>';
					else if($res == "created") echo '<div id="created">User created successfully!</div>';
				?>
				<div class="form-group">
					<label for="firstname">First Name:</label>
					<input type="text" class="form-control" name="firstname">
				</div>
				<div class="form-group">
					<label for="lastname">Last Name:</label>
					<input type="text" class="form-control" name="lastname">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label for="homeaddress">Home Address:</label>
					<input type="text" class="form-control" name="homeaddress">
				</div>
				<div class="form-group">
					<label for="homephone">Home Phone:</label>
					<input type="text" class="form-control" name="homephone">
				</div>
				<div class="form-group">
					<label for="cellphone">Cell Phone:</label>
					<input type="text" class="form-control" name="cellphone">
				</div>
				<input type="hidden" name="a" value="create">
				<button type="submit" class="btn btn-default" name="enter">Enter</button>
			</form>
		</div>
		<div class="col-md-9 right-col-margin">
			<h2>Search for Users</h2>
			<div>Search by
				<select id="search-by" class="form-control">
					<option value="firstname">First Name</option>
					<option value="lastname">Last Name</option>
					<option value="email">Email</option>
					<option value="homeaddress">Home Address</option>
					<option value="homephone">Home Phone</option>
					<option value="cellphone">Cell Phone</option>
				</select>
				<input id="search-word" class="form-control" type="text">
				<button id="search" class="btn btn-default">Search!</button>
			</div>
			<div id="search-results">
			</div>
		</div>
	</div>
	</div>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		    $("#search").click(function(){
		        var searchword = $("#search-word").val();
		        var searchby = $("#search-by").val();
			    $.ajax({
					type:'post',
					url:'user.php',
					data:{"a": "search", "searchby": searchby,"searchword": searchword},
	                success:function(data){
	                	console.log(data);
	                	$("#search-results").html(data);
	                },
	                error: function(msg){
		                alert("Error: "+msg);
		            }
				});
		    });
		});
	</script>
</body>
</html>