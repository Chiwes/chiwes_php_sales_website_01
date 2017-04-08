<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>孩呀產品管理</title>
</head>
<body style = " background-color:#cc9966">
<table border="1" align="center" width="800" cellspacing="2">
		<tr border="4" bgcolor="#BABA76" height="30" align="center">
		<td>產品號</td>
		<td>品名</td>
		<td>定價</td>
		</tr>
	<?php
			require_once("dbtools.inc.php");

			$link = create_connection();
			$sql = "SELECT * FROM product_list";
			$result = execute_sql($link,"store",$sql);

			$total_records = mysqli_num_rows($result);
			for($i=0;$i<$total_records;$i++)
			{
				$row =mysqli_fetch_assoc($result);

				echo"<form method='post' action='shopping_car_add_to_car.php?book_no=".$row["book_no"]." &book_name=".urlencode($row["book_name"])." &price=".$row["price"]."'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td>" .$row["book_no"]."</td>";
				echo "<td>" .$row["book_name"]."</td>";
				echo "<td>$".$row["price"]."</td>";
				echo "</tr>";
				echo "</form>";
			}
		?>			
	<table border="0" align="center" width="800" cellspacing="2">
		<tr bgcolor="#BABA76" height="30" align="center">
		<td>產品編號</td>
		<td>書名</td>
		<td>定價</td>
		<td></td>
		</tr>
		<?php
				echo"<form method='post' action='forshop_create.php'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td><input type='text' name='book_no' size='5' value=''></td>";
				echo "<td><input type='text' name='book_name' size='5' value=''></td>";
				echo "<td><input type='text' name='price' size='5' value=''></td>";
				echo"<td align='center'><input type='submit' value='新增'></td>";
				echo "</tr>";
				echo "</form>";
			
		?>	
	<table border="0" align="center" width="800" cellspacing="2">
		<tr bgcolor="#BABA76" height="30" align="center">
		<td>產品編號</td>
		<td>產品</td>
		<td>定價</td>
		<td></td>
		</tr>
		<?php
				echo"<form method='post' action='forshop_change.php'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td><input type='text' name='book_no' size='5' value=''></td>";
				echo "<td><input type='text' name='book_name' size='5' value=''></td>";
				echo "<td><input type='text' name='price' size='5' value=''></td>";
				echo"<td align='center'><input type='submit' value='修改'></td>";
				echo "</tr>";
				echo "</form>";
		
		?>
		<table border="0" align="center" width="800" cellspacing="2">
		<tr bgcolor="#BABA76" height="30" align="center">
		<td>產品編號</td>
		<td>產品</td>
		<td>定價</td>
		<td></td>
		</tr>
		<?php
				echo"<form method='post' action='forshop_delete.php'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td><input type='text' name='book_no' size='5' value=''></td>";
				echo "<td><input type='text' name='book_name' size='5' value=''></td>";
				echo "<td><input type='text' name='price' size='5' value=''></td>";
				echo"<td align='center'><input type='submit' value='刪除'></td>";
				echo "</tr>";
				echo "</form>";
		
		?>	
		
</body>
</html>