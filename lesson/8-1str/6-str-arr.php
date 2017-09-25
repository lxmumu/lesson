<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 17:06:36
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-21 18:50:18
 */
//拆分和组合
// explode（爆炸）(separator(分隔), str);
$str ='a:b';
$arr =explode(":",$str);
var_dump($arr);//array(2) { [0]=> string(1) "a" [1]=> string(1) "b" }

//课下练习
//实现  模仿系统函数array（'a:b','0:a','1:c'）；


// implode(内爆炸)(glue(粘合), pieces（零件）);
$a = range('a','z');
$str = implode('-', $a);
echo '<br>'.$str;//a-b-c-d-e-f-g-h-i-j-k-l-m-n-o-p-q-r-s-t-u-v-w-x-y-zaa

//字符串转换成数组 str_split
$str = 'abcdefg';
echo $str{0};//a
echo $str[0];//a
    echo'<hr>';
 $strArr = str_split($str,2);// array(4) { [0]=> string(2) "ab" [1]=> string(2) "cd" [2]=> string(2) "ef" [3]=> string(1) "g" }
var_dump($strArr);

//反转
echo'<hr>';
$str = 'abcdefg';
$res = strrev($str);
echo'<br>'.$res;