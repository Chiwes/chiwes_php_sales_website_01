<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title >孩呀訪客留言表</title>
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.author.value.length == 0)
          alert("作者欄位不可以空白哦！");
        else if (document.myForm.subject.value.length == 0)
          alert("主題欄位不可以空白哦！");
        else if (document.myForm.content.value.length == 0)
          alert("內容欄位不可以空白哦！");
        else
          myForm.submit();
      }
    </script>
  </head>
  <body bgcolor="#ffcccc">
    <h2 align="center" style="color:#ff1a8c;
              text-shadow:2px 2px 4px   #000000;">網站留言牆</h2>
    <p align="center">此留言牆開放您對此網站提出評價或意見</p>
    <?php
      require_once("dbtools.inc.php");
			
      
      $records_per_page = 5;

      
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;

      
      $link = create_connection();
			
      
      $sql = "SELECT * FROM message ORDER BY date DESC";	
      $result = execute_sql($link, "guestbook", $sql);

      
      $total_records = mysqli_num_rows($result);

    
      $total_pages = ceil($total_records / $records_per_page);

      
      $started_record = $records_per_page * ($page - 1);

      
      mysqli_data_seek($result, $started_record);

      
      $bg[0] = "#D9D9FF";
      $bg[1] = "#FFCAEE";
      $bg[2] = "#FFFFCC";
      $bg[3] = "#B9EEB9";
      $bg[4] = "#B9E9FF";

      echo "<table width='800' align='center' cellspacing='3'>";
      
      $j = 1;
      while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page)
      {
        echo "<tr bgcolor='" . $bg[$j - 1] . "'>";
        echo "<td width='120' align='center'>
              <img src='" . mt_rand(0, 9) . ".gif'></td>";
        echo "<td>作者：" . $row["author"] . "<br>";
        echo "主題：" . $row["subject"] . "<br>";
        echo "時間：" . $row["date"] . "<hr>";
        echo $row["content"] . "</td></tr>";
        $j++;
      }
      echo "</table>" ;

    
      echo "<p align='center'>";

      if ($page > 1)
        echo "<a href='store_message_from_customer.php?page=". ($page - 1) . "'>上一頁</a> ";

      for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='store_message_from_customer.php?page=$i'>$i</a> ";
      }

      if ($page < $total_pages)
        echo "<a href='store_message_from_customer.php?page=". ($page + 1) . "'>下一頁</a> ";
      echo "</p>";

      
      mysqli_free_result($result);
      mysqli_close($link);
    ?>
    <form name="myForm" method="post" action="store_message_post.php">
      <table border="0" width="800" align="center" cellspacing="0">
        <tr bgcolor="#0084CA" align="center">
          <td colspan="2">
            <font color="#FFFFFF">請在此輸入新的留言</font></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">作者</td>
          <td width="85%"><input name="author" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#84D7FF">
          <td width="15%">主題</td>
          <td width="85%"><input name="subject" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">內容</td>
          <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="張貼留言" onClick="check_data()">　
            <input type="reset" value="重新輸入">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>