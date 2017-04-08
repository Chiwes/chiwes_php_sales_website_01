<?php
	if(empty($_COOKIE["book_no_list"]))
	{
		echo "<script type='text/javascript'>";
		echo "alert('你尚未選購任何商品');";
		echo "history.back();";
		echo "</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h3>注意事項</h3>
<ol type="1">
<li>
	步驟一:請利用郵局劃撥單，填妥姓名、戶名、雜誌、起訖月份、電話，直接至郵局劃撥付款。帳號:12345678 戶名:孩呀幫孩呀
</li>
<li>
	步驟二:將此表單列印填妥資料完成後(請填妥撥款帳號或信用卡卡號並簽名)，拍照寄信至birdwei777@gmail.com。
</li>
<li>
	通知:您將於收到回信確認後的10天內收到產品，若沒有收到，請來電洽詢0973822830。
</li>
</ol>
<hr>
<table border="1" bgcolor="white" rules="cols" align="center" cellpadding="5">
<tr height="25">
	<td colspan="4">姓名:<u><?php echo $_COOKIE["name"]?>
		<?php for ($i=0;$i<=100-2*strlen($_COOKIE["name"]);$i++) echo "&nbsp;";?></u>
		</td>
		</tr>
		<tr height="25">
			<td colspan="4">電話:
			<u><?php for ($i = 0;$i <=100;$i++) echo "&nbsp;";?></u>
			</td>
			</tr>
		<tr height="25">
			<td colspan="4">地址:
			  <u><?php for ($i = 0;$i<=100;$i++)echo "&nbsp;";?></u>
			</td>
		<tr>
		<tr height="25">
			<td colspan="4">
			撥款帳號或信用卡卡號:<u><?php for ($i = 0;$i <= 89;$i++) echo "&nbsp;";?></u>
			</td>
		</tr>
		<tr height="25">
		<td colspan="4">
			有效日期:<u>西元<?php for($i=0;$i<=89;$i++) echo"&nbsp;";?></u>
		</td>
		</tr>
		<tr height="25">
			<td colspan ="4">
				簽名(與信用卡簽名相同) :<u><?php for ($i=0;$i<=66;$i++)echo"&nbsp;";?></u>
			</td>
		</tr>
		<tr height="25">
		<td colspan="4">
			支付總金額: <u><?php for($i = 0;$i<=89;$i++) echo "&nbsp;";?></u>
		</td>
		</tr>	
			<td colspan="4">
			開立發票:□二聯式&nbsp;&nbsp;&nbsp;&nbsp;□三聯式
			</td>
		</tr>
		<tr height="25" align="center" bgcolor=" #bfbfbf">
			<td>產品</td>
			<td>定價</td>
			<td>數量</td>
			<td>小計</td>
		</tr>
		<?php
			$book_name_array = explode(",",$_COOKIE["book_name_list"]);
			$price_array = explode(",",$_COOKIE["price_list"]);
			$quantity_array = explode(",", $_COOKIE["quantity_list"]);

			$total = 0;
			for($i=0;$i < count($book_name_array);$i++)
			{
				$sub_total = $price_array[$i] * $quantity_array[$i];

				$total += $sub_total;

				echo "<tr>";
				echo "<td align='center'>".$book_name_array[$i]."</td>";
				echo "<td align='center'>$".$price_array[$i]."</td>";
				echo "<td align='center'>".$quantity_array[$i]."</td>";
				echo "<td align='center'>$".$sub_total."</td>";
				echo "</tr>";
			}
			echo "<tr align='right' bgcolor=' #bfbfbf'>";
			echo "<td colspan='4'>總金額 =".$total."</td>";
			echo "</tr>";
		?>
		</table>					　			
</body>
</html>