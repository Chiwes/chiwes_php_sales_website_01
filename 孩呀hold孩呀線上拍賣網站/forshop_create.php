<?php
	require_once("dbtools.inc.php");

	$book_no = $_POST["book_no"];
	$book_name = $_POST["book_name"];
	$price = $_POST["price"];

	$link = create_connection();
	$sql = "INSERT INTO product_list(book_no,book_name,price)VALUES('$book_no','$book_name','$price')";
	$result = execute_sql($link,"store",$sql);

	mysqli_close($link);
	header("location:forshop_admin_index.php");
	exit();
?>