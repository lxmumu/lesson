<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 15:18:54
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 15:30:33
 */
// preg_grep(regex, input, flags)
//匹配数组中的元素
//参数
//1，正则
//2，数组
//3，配置 如果设置PREG_GREP_INVERT,    返回正则匹配结果之外的元素

$a = ['a','b','c','1','2','3'];
//筛选数组中所有的数字
$res = preg_grep("#\d#", $a);
var_dump($res);//123

$a = ['a','b','c','1','2','3'];
//筛选数组中所有的数字
$res = preg_grep("#\d#", $a,PREG_GREP_INVERT);
var_dump($res);//a b c

//[a-zA-Z0-1]
$str = '中华人民共和国';
//匹配中文的编码范围
$regexChina ='#[\x80-\xff]{3}#';
$rs = preg_match_all($regexChina, $str, $data);
var_dump($data);