<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 17:23:20
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-02 22:25:26
 */
//特殊的
//反转
//打乱
//重复

//反转
$str = 'abcdefg';
$res = strrev($str);
echo'<br>'.$res;

echo '<hr>';
//打乱  shuffle-洗牌
$str = 'abcdefg';
$res = str_shuffle($str);
echo'<br>'.$res;

echo '<hr>';
//重复
$str = 'abcdefg';
$res = str_repeat($str,10);
echo'<br>'.$res;


//解析变量  parse_str
$url = "user=root&pwd=123456";
parse_str($url);
echo'<br>'.$user.$pwd;

echo'<hr>';
//数组
$url = 'category[]=a+b&type[]=php';
parse_str($url);
var_dump($category);
var_dump($type);