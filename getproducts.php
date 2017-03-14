<?php
	$dbh=mysql_connect ("localhost", "chuyuany_root", "888emreal")
	or die ('I cannot connect to the database.');
	mysql_select_db ("chuyuany_choco_db");

	$query = "SELECT * FROM products_1";
	$result = mysql_query($query);
	$product_array = array();
	while ($row = mysql_fetch_array($result, MYSQL_NUM))
		$product_array[] = $row;

	echo base64_encode(serialize($product_array));
?>