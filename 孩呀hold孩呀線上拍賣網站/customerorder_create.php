<?php
	require_once("dbtools.inc.php");

	$customer_name = $_POST["customer_name"];
	$product = $_POST["product"];
	$quantity = $_POST["quantity"];
	$price = $_POST["price"];
	$date = $_POST["date"];

	$link = create_connection();
	$sql = "INSERT INTO customer_order(customer_name,product,quantity,price,date)VALUES('$customer_name','$product','$quantity','$price','$date')";
	$result = execute_sql($link,"store",$sql);

	mysqli_close($link);
	header("location:forshop_admin_customerorder.php");
	exit();