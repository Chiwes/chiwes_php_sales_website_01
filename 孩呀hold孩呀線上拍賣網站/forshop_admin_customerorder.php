<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>孩呀訂單管理</title>
</head>
<body style = " background-color:#cc9966">
	<table border="1" align="center" width="800" cellspacing="2">
		<tr border="4" bgcolor="#BABA76" height="30" align="center">
		<td>顧客姓名</td>
		<td>產品名稱</td>
		<td>購買數量</td>
		<td>小計</td>
		<td>購買日期</td>
		</tr>
<?php
			require_once("dbtools.inc.php");

			$link = create_connection();
			$sql = "SELECT * FROM customer_order";
			$result = execute_sql($link,"store",$sql);

			$total_records = mysqli_num_rows($result);
			for($i=0;$i<$total_records;$i++)
			{
				$row =mysqli_fetch_assoc($result);

				echo"<form method='post'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td>" .$row["customer_name"]."</td>";
				echo "<td>" .$row["product"]."</td>";
				echo "<td>" .$row["quantity"]."</td>";
				echo "<td>$".$row["price"]."</td>";
				echo "<td>".$row["date"]."</td>";
				echo "</tr>";
				echo "</form>";
			}
		?>	
<table border="0" align="center" width="800" cellspacing="2">
		<tr bgcolor="#BABA76" height="30" align="center">
		<td>顧客姓名</td>
		<td>產品名稱</td>
		<td>購買數量</td>
		<td>小計</td>
		<td>購買日期</td>
		<td></td>
		</tr>
		<?php
				echo"<form method='post' action='customerorder_create.php'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td><input type='text' name='customer_name' size='5' value=''></td>";
				echo "<td><input type='text' name='product' size='5' value=''></td>";
				echo "<td><input type='text' name='quantity' size='5' value=''></td>";
				echo "<td><input type='text' name='price' size='5' value=''></td>";
				echo "<td><input type='text' name='date' size='5' value=''></td>";
				echo"<td align='center'><input type='submit' value='新增'></td>";
				echo "</tr>";
				echo "</form>";
		
		?>
<table border="0" align="center" width="800" cellspacing="2">
		<tr bgcolor="#BABA76" height="30" align="center">
		<td>顧客姓名</td>
		<td>產品名稱</td>
		<td>購買數量</td>
		<td>小計</td>
		<td>購買日期</td>
		<td></td>
		</tr>
		<?php
				echo"<form method='post' action='customerorder_change.php'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td><input type='text' name='customer_name' size='5' value=''></td>";
				echo "<td><input type='text' name='product' size='5' value=''></td>";
				echo "<td><input type='text' name='quantity' size='5' value=''></td>";
				echo "<td><input type='text' name='price' size='5' value=''></td>";
				echo "<td><input type='text' name='date' size='5' value=''></td>";
				echo"<td align='center'><input type='submit' value='修改'></td>";
				echo "</tr>";
				echo "</form>";
		
		?>
		</table>
		<table border="0" align="center" width="800" cellspacing="2">
		<tr bgcolor="#BABA76" height="30" align="center">
		<td>顧客姓名</td>
		<td>產品名稱</td>
		<td>購買數量</td>
		<td>小計</td>
		<td>購買日期</td>
		<td></td>
		</tr>
		<?php
				echo"<form method='post' action='customerorder_delete.php'>";
				echo "<tr align='center' bgcolor='#EDEAB1'>";
				echo "<td><input type='text' name='customer_name' size='5' value=''></td>";
				echo "<td><input type='text' name='product' size='5' value=''></td>";
				echo "<td><input type='text' name='quantity' size='5' value=''></td>";
				echo "<td><input type='text' name='price' size='5' value=''></td>";
				echo "<td><input type='text' name='date' size='5' value=''></td>";
				echo"<td align='center'><input type='submit' value='刪除'></td>";
				echo "</tr>";
				echo "</form>";
		
		?>	
		</table>												
</body>
</html>