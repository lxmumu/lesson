<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 14:41:48
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 20:08:39
 */
//参数
//
function showMsg($userMsg){
    echo '<br />用户输入'.$userMsg;
}

//丢失了一个内容
// Warning: Missing argument 1 for showMsg(), called in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-31php\1_method_arr.php on line 20 and defined in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-31php\1_method_arr.php on line 10
//没有定义参数，说明参数是必须的
// Notice: Undefined variable: userMsg in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-31php\1_method_arr.php on line 11
showMsg('a');

//如何划分，可选和必须
//1 参数是否有默认值
//2 如果参数有默认值那么这个参数就是可选参数
//3 如果参数没有默认值 这个参数就是必须参数
//
function showMsg_var($userMsg='hello'){
  echo '<br />用户输入'.$userMsg;
}
// showMsg_var();
showMsg_var('12345');
echo'<hr>';
// 练习：声明一个函数，计算两个数的绝对值，参数可选
function  arr($a='0',$b='0'){
if ($a>$b) {
   echo $a-$b;
}else{
    echo $b-$a;
}
}
arr(1, -8);

//声明一个函数，功能是动态的获得一个表格table  参数是rows cols 可选参数，表格的背景颜色
echo'<hr>';
function creattable( $rows,$cols,$color='cyan'){
    echo" <table border='1' rules='all' bgcolor=$color>";
for($i=0;$i<$rows;$i++){
    echo '<tr>';
    for($j= 0;$j<$cols; $j++){
        echo'<td>&nbsp</td>';
    }
}
echo '</tr>';
}
    echo '</table>';
creattable(2,5, 'pink');
?>

//
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
<table border="1" rules="all" backgroundcolor="$bgcolor">
   <?php
function table( $rows,$cols,$bgcolor='red'){
for($i=0;$i<$rows;$i++){
    echo '<tr >';
    for($j= 0;$j<$cols; $j++){
        echo'<td >xx</td>';
    }
}
echo '</tr>';
}
table(10,6,'red');

    ?>
    </table>
</body>
</html>