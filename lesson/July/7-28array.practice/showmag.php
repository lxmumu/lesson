<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 09:11:27
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-01 09:15:59
 */
//展示消息  首页
//从文件读取数据 1 有数据，2 没数据
// $fileName = 'mag.txt';
// @$fileContent = file_get_contents($fileName);
// if ($fileContent) {
//     //有数据
//     $magList = unserialize($fileContent);
// }else{
//     // 没数据
// $magList = array();
// }
include_once 'function.php';
$magList=show();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>留言展示</title>
</head>
<body>
<a href="addmag.php">添加</a>
    <table border="1" rules="all">
        <!-- 用户名 信息 -->
<tr>
    <td>用户名</td>
    <td>留言</td>
    <td>操作</td>
</tr>
<?php

// 遍历数组
foreach ($magList as $mage) {
    list($user,$mag) = $mage;
    echo '<tr>';
    echo"<td>$user</td>";
    echo "<td>$mag</td>";
    echo "<td><a href = '#'>编辑</a>-<a href = '#'>删除</a></td> ";
    echo '</tr>';
}




 ?>


    </table>
</body>
</html>