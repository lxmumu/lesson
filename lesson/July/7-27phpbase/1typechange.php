<?php
/**
 * @Author: anchen
 * @Date:   2017-07-27 09:53:02
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-27 10:42:26
 */
//类型转换
$a = 0;
if ($a) {

}else{
    echo "自动转换成bool";
}
echo $a;

$a  = '';
if ($a) {

}else{
    echo "string -> bool";

}
echo $a;
$a = null;
if ($a) {

}else{
    echo "null -> bool";

}
echo $a;
$a = array();
if ($a) {

}else{
    echo "array  ->bool";
}
echo $a;


// 转换
$a = '2123abc';
echo "<hr>" ;
echo (boolean)$a;//只在这一行生效 1
// 函数强转
 echo  intval($a);//2123
var_dump($a);//string(7)


//永久转换
settype($a ,'integer');
var_dump($a);// int(2123)
echo gettype($a);// integer