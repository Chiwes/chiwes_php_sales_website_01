<?php
$book_no = $_GET["book_no"];
$book_name = $_GET["book_name"];
$price = $_GET["price"];
$quantity = $_POST["quantity"];
if(empty($quantity))$quantity = 1;

if(empty($_COOKIE["book_no_list"]))
{
	setcookie("book_no_list",$book_no);
	setcookie("book_name_list",$book_name);
	setcookie("price_list",$price);
	setcookie("quantity_list",$quantity);
}
else
{
	$book_no_array = explode(",",$_COOKIE["book_no_list"]);
	$book_name_array = explode(",",$_COOKIE["book_name_list"]);
	$price_array = explode(",",$_COOKIE["price_list"]);
	$quantity_array = explode(",",$_COOKIE["quantity_list"]);

	if(in_array($book_no,$book_no_array))
	{
		$key=array_search($book_no,$book_no_array);
		$quantity_array[$key]+=$quantity;
	}
	else
	{
		$book_no_array[]=$book_no;
		$book_name_array[]=$book_name;
		$price_array[]=$price;
		$quantity_array[]=$quantity;
	}

	setcookie("book_no_list",implode(",",$book_no_array));
	setcookie("book_name_list",implode(",",$book_name_array));
	setcookie("price_list",implode(",", $price_array));
	setcookie("quantity_list",implode(",",$quantity_array));
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<p align="center">你所選取的商品及數量已加入購物車!</p>
	<p align="center"><a href="shopping_shopping_shopping.php">繼續購物</a></p>
</body>
</html>