<?php
	$dbh=mysql_connect ("localhost", "root", "CMPE281")
	or die ('I cannot connect to the database.');
	mysql_select_db ("marketplace");

	$query = "SELECT * FROM review WHERE ProductID =".$_POST["pid"];
	$result = mysql_query($query);
	$product_array = array();
	while ($row = mysql_fetch_array($result, MYSQL_NUM))
		$product_array[] = $row;
	
	var_dump($product_array);
?>