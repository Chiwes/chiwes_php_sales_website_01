<?php
	require_once("dbtools.inc.php");

	$customer_name = $_POST["customer_name"];
	$product = $_POST["product"];
	$quantity = $_POST["quantity"];
	$price = $_POST["price"];
	$date = $_POST["date"];

	$link = create_connection();
	$sql = "UPDATE customer_order SET product='$product',quantity='$quantity',price='$price',date='$date' WHERE customer_name='$customer_name'";
	$result = execute_sql($link,"store",$sql);

	mysqli_close($link);
	header("location:forshop_admin_customerorder.php");
	exit();
?>