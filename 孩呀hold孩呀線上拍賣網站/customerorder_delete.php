<?php
	require_once("dbtools.inc.php");

	$customer_name = $_POST["customer_name"];
	$product = $_POST["product"];
	$quantity = $_POST["quantity"];
	$price = $_POST["price"];
	$date = $_POST["date"];


	$link = create_connection();
	$sql = "DELETE FROM customer_order WHERE customer_name='$customer_name'AND product='$product'AND quantity='$quantity' AND price='$price' AND date='$date'";
	$result = execute_sql($link,"store",$sql);

	mysqli_close($link);
	header("location:forshop_admin_customerorder.php");
	exit();
?>