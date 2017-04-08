<?php
	require_once("dbtools.inc.php");

	$book_no = $_POST["book_no"];
	$book_name = $_POST["book_name"];
	$price = $_POST["price"];

	$link = create_connection();
	$sql = "DELETE FROM product_list WHERE book_no='$book_no'AND book_name='$book_name'AND price='$price'";
	$result = execute_sql($link,"store",$sql);

	mysqli_close($link);
	header("location:forshop_admin_index.php");
	exit();
?>