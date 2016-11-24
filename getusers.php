<?php
	$dbh=mysql_connect ("localhost", "chuyuany_root", "888emreal")
	or die ('I cannot connect to the database.');
	mysql_select_db ("chuyuany_choco_db");

	$query = "SELECT * FROM choco_users";
	$result = mysql_query($query);
	$user_array = array();
	while ($row = mysql_fetch_array($result, MYSQL_NUM))
		$user_array[] = $row;

	echo base64_encode(serialize($user_array));
?>