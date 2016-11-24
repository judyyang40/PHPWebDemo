<?php
	extract($_POST);
	if(!$username || !$password) {
		echo 'Blank';
	}
	else if($username == "admin" && $password == "admin") {
		header("Location: admin.html");
		die();
	}
	else {
		echo 'Wrong credentials';
	}
?>