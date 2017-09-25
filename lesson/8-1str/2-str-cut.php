<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 14:20:17
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-21 18:50:20
 */
//字符截取
$str = 'abcdef';
$subStr = substr($str, 0,1);
echo '<br>'.$subStr;//a


//
$str = 'abcdef';
$subStr = substr($str, 4);
echo '<br>'.$subStr;//ef

$str = 'abcdef';
$subStr = substr($str, -2);
echo '<br>'.$subStr;//ef

//替换
$str = 'abcdef';
$subStr = substr_replace($str, '1', -2,1);
echo '<br>'.$subStr;//abcde1

$files = ['a.txt','b.png','c.jpeg'];
//把数组中后缀全部替换成.php
function  changeFiles($fileName,$ex='php'){
    $ex = '.'.$ex;
    if (strlen(stristr($fileName,'.'))>0) {
        $pos = stripos($fileName,'.');
        return substr_replace($fileName,$ex,$pos);
    }else{
        return$fileName.$ex;
    }
}
foreach ($files as $value) {
 echo'<br>'.changeFiles($value,'css');
}

