<?php
	require_once("dbtools.inc.php");

	$book_no = $_POST["book_no"];
	$book_name = $_POST["book_name"];
	$price = $_POST["price"];

	$link = create_connection();
	$sql = "UPDATE product_list SET book_name='$book_name', price='$price' WHERE book_no='$book_no'";
	$result = execute_sql($link,"store",$sql);

	mysqli_close($link);
	header("location:forshop_admin_index.php");
	exit();
?>