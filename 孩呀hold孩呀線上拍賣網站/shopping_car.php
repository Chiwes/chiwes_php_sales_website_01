<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body bgcolor="#ffcccc">
<table border="0" align="center" width="800">
	<tr bgcolor="#ffffcc" height="30" align="centrer">
	<td>書號</td>
	<td>書名</td>
	<td>定價</td>
	<td>數量</td>
	<td>小計</td>
	<td>總金額</td>
	</tr>
	<?php
		if(empty($_COOKIE["book_no_list"]))
		{
			echo "<tr align='center'>";
			echo "<td colspan='6'>目前購物車內沒有任何商品及數量!</td>";
			echo "</tr>";
		}
		else
		{
			$book_no_array = explode(",",$_COOKIE["book_no_list"]);
			$book_name_array=explode(",",$_COOKIE["book_name_list"]);
			$price_array = explode(",",$_COOKIE["price_list"]);
			$quantity_array=explode(",",$_COOKIE["quantity_list"]);

			$total = 0;
			for($i=0;$i<count($book_no_array);$i++)
			{
				$sub_total = $price_array[$i] * $quantity_array[$i];

				$total += $sub_total;

				echo "<form method='post' action='shopping_car_change.php?book_no=".$book_no_array[$i]."'>";
				echo "<tr bgcolor='#f2f2f2'>";
				echo "<td align='center'>".$book_no_array[$i]."</td>";
				echo "<td align='center'>".$book_name_array[$i]."</td>";
				echo "<td align='center'>".$price_array[$i]."</td>";
				echo "<td align='center'><input type='text' name='quantity' value='".$quantity_array[$i]."'size='5'></td>";
				echo"<td align='center'><input type='submit' value='修改'></td>";
				echo "<td></td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "<tr align='right' bgcolor='#f2f2f2'>";
			echo "<td colspan='6'>總金額 = ".$total."</td>";
			echo "</form>";
			echo "<tr align='center'>";
		echo "<td colspan='6'>"."<br><input type='button' value='退回所有商品' onClick=\"javascript:window.open('shopping_car_delete_order.php','_self')\">";
		echo "</td>";
		echo "</tr>";
		}	
	?>
</table>
</body>
</html>