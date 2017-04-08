<!DOCTYPE html>
<html>
<head>
	<title></title>
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

			$customer_name=$_POST["customer_name"];

			$link = create_connection();
			$sql = "SELECT * FROM customer_order WHERE customer_name='$customer_name'";
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
</table>
</body>
</html>