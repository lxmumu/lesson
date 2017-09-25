<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 16:00:42
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 16:29:14
 */
//数组的创建
// range(low, high, step)//范围数组
// compact(var_names)//关联数组

//参数：
//1，开始位置2，填充数量3，填充内容
// array_fill(start_key, num, val);
$arr = array_fill(0, 4, 'php');
var_dump($arr);

echo '<hr>';
// array_fill_keys(keys, val)
//参数1，键值（数组）2，value
$keys = ['a','b','c','d'];
$arr = array_fill_keys($keys, 'php');
var_dump($arr);

echo '<hr>';
// array_combine(keys, values)
$keys = ['a','b','c','d'];
$values = ['red','blue','pink','green'];
$arr = array_combine($keys, $values);
var_dump($arr);


