<?php
/*
 * @Author: anchen
 * @Date:   2017-07-28 19:30:49
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-28 21:09:29
 */
$arr1 =array(1,'aaa','aa', '0','2017/7/28 12:25:56','::1','1','更新/删除');
$arr2 =array(2,'aaa','aa', '0','2017/7/28 15:26:41','::1','2','更新/删除');
$arr3 =array(3,'aaa','aa', '0','2017/7/28 18:41:23','::1','3','更新/删除');
$contant=[$arr1,$arr2,$arr3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <title>practice</title>
    <style>
    body{
        margin: 0;
    }
    table{
        width:900px;
        margin:0 auto;
        background-color: darkcyan;
    }
h1{
margin-left: 100px;
}
    </style>

</head>
<body>
<a id="page"></a>
<h1>留言列表页面</h1>
<table border="1"  rules="all">
<th>编号</th>
<th>标题</th>
<th>内容</th>
<th>留言者</th>
<th>发布时间</th>
<th>ip地址</th>
<th>心情</th>
<th>操作</th>

<?php

foreach ($contant as $key => $value) {
  echo '<tr>';
   foreach ($value as $ky => $v) {
      echo "<td>$v</td>";

   }
  echo '</tr>';
}






 ?>


</table>

</body>
</html>
