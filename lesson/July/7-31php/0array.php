<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 11:11:11
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-31 20:53:07
 */
//数组运算符 +
//使用 + 联合数组，如果两个数组键重复，+ 左边的优先，并不会被+右边的的覆盖
$a = ['a','b','c'];
$b = ['1','2','3'];

$c =$a + $b;

var_dump($c);//a b c
echo '<hr>';

$a = ['a','b',];
$b = [2 =>'c',3 =>'d'];
$c =$a +$b;
var_dump($c);//a b c d


//数组 ==
 $a = ['a','b'];
 // $b = ['0'=>'a','1'=>'b'];
 // $b = [false =>'a',true =>'b'];
 $b = ['b','a'];
 if ($a==$b) {
     echo'<br>数组相等';
 }

 //全等 ===
  $a = ['a','b'];
 // $b = ['0'=>'a','1'=>'b'];
 // $b = [false =>'a',true =>'b'];
 $b = ['1'=>'b','0'=>'a'];//不输出，位置不同

 if ($a === $b) {
     echo'<br>数组全等';
 }
