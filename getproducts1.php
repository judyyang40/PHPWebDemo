<?php

	$con=mysqli_connect("localhost","chuyuany_root","888emreal","chuyuany_choco_db");
	// Check connection
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL: " . mysqli_connect_error();


	$sql="SELECT * FROM products_1";
	$result=mysqli_query($con,$sql);

	// Numeric array
	while( $row=mysqli_fetch_array($result,MYSQLI_NUM))
		$product_array[] = $row;

	var_dump($product_array);
?>