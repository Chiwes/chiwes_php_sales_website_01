<?php
	setcookie("name",$_POST["name"]);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>孩呀購物車</title>
</head>
<frameset rows="60, *" border="0">
	<frame name="top" noresize scrolling="no" src="shopping_car_show_link.php">
	<frame name="bottom" noresize src="shopping_shopping_shopping.php">
</frameset>
</html>