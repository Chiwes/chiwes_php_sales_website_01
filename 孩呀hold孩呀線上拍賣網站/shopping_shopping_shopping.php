<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <style type="text/css">
        .bigdif{
            background-color:yellow;
        }
        .middiv{
            background-color:red;height:350px;width:850px;margin: 0 auto;
        }
        .leftdiv{
            background-color:#f2f2f2;height:350px;width:200px;float: left;text-align: center;
        }
        .middlediv{
            background-color:#f2f2f2;height:350px;width:450px;float: left;
        }
        .rightdiv{
            background-color:#f2f2f2;height:350px;width:200px;float: left;
        }
    </style>
	<title></title>
</head>
<body bgcolor="#ffcccc">

<?php
require_once("dbtools.inc.php");

			$link = create_connection();
			$sql = "SELECT * FROM product_list";
			$result = execute_sql($link,"store",$sql);

			$total_records = mysqli_num_rows($result);
	for($i=0;$i<$total_records;$i++)		
	{
        $row =mysqli_fetch_assoc($result);

    echo"<form method='post' action='shopping_car_add_to_car.php?book_no=".$row["book_no"]."&book_name=".urlencode($row["book_name"])." &price=".$row["price"]."'>"; 
	echo "<div class='bigdiv'>";
        echo "<div cols='300,300,300' class='middiv'>";
        		echo "<div name='left' class='leftdiv' ><br></br><img src='images/".$row["filename"]."' height='200px' width='150px'></div>";

        		echo "<div name='middle' class='middlediv'>";
        		echo "<h3>產品名稱</h3>";
        		echo "<h1>".$row['book_name']."</h1>";
        		echo "<h3>定價</h3>";
        		echo "<h1>".$row['price']."元</h1>";
        		echo "<h3 style='text-align:center'>概述</h3>";
				echo "<p style='text-align:center'>".$row['content']."</p>";
        		echo "</div>";

        		echo "<div name='right' class='rightdiv'>";
        		echo "<p>欲訂購數量:<input type='text' name='quantity' size='5' value='1'></p>";
        		echo "<p><input type='submit' value='放入購物車''></p>";
        		echo "</div>";          
        echo "</div>";  
    echo "</div>";
    echo "</form>";
    }
?>  
</body>
</html>  	