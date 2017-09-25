<?php
/**
 * @Author: anchen
 * @Date:   2017-07-28 11:02:28
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-28 18:44:33
 */
//下标为自动填充的数字------》索引数组
$arr =array('a','b','c','d');
print_r($arr);

$a = 'a';
$b= 'b';
$c ='c';
$d ='d';
$arr = array($a,$b,$c,$d);
// var_dump($arr);
print_r($arr);


//自定义索引的关联数组
$arr = array('a' => 'a', 'b'=> 'b', 'c'=>'c', 'd' => 'd');
echo "<hr>";
print_r($arr);


echo "<hr>";
//通过索引，查找 修改
$arr =array('a','b','c','d');
$arr[3]= 'o';//通过索引赋值，新值会覆盖旧值
$d = $arr[3];
echo $d;

$arr = array('a' => 'a', 'b'=> 'b', 'c'=>'c', 'd' => 'd');
$arr['d'] = 'o';//通过索引赋值，新值会覆盖旧值
$d = $arr['d'];
echo $d;


//混合数组，一半索引数字，一半索引是字母
//数组的本质  key-value
$arr =array('a','b','c','d'=>'d', 'e'=>'e',false=> 'f');
echo "<hr>";
print_r($arr);

echo "<hr>";
//动态创建
//动态创建连续下标数组
$arr = [];
$arr[] = 'a';
$arr[] = 'b';
$arr[] = 'c';
$arr[] = 'd';

print_r($arr);
//手动指定索引
$arr[20] = 'f';
$arr[-10] = 'g';
$arr['aa'] = 'h';
print_r($arr);


echo "<hr>";
//动态创建一个关联数组
//动态创建一个混合数组
$arr =[];
$arr[] = 'q';
$arr[] = 'q';
$arr['name'] = 'q';
$arr['sex'] = 'q';
print_r($arr);

echo "<hr>";
