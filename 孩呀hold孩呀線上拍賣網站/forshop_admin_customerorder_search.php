<?php
<?php
	require_once("dbtools.inc.php");

	$name = $_POST["name"];

	$link = create_connection();
	$sql = "SELECT name FROM customer_order WHERE name='$book_no'";
	$result = execute_sql($link,"store",$sql);

	mysqli_close($link);
	header("location:forshop_admin_index.php");
	exit();
?>
?>