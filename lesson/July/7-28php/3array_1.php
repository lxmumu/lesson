<?php
/**
 * @Author: anchen
 * @Date:   2017-07-28 14:14:29
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 19:12:28
 */

echo '<pre>';
//快速创建索引数组  range(范围)
//参数：1 开始 2结束 3步长
$arr = range(5,10);
print_r($arr);
$arr = range(1.1,6.6);
print_r($arr);

//字母
$arr = range( 'a','z' );
print_r($arr);

//步长
$arr =range( 0, 100,10);
print_r($arr);

//快速创建关联数组  compact:紧凑的 合约
$user = 'xiaoming';
$pwd = '123456';
$tel = '123456789';
// $arr =array( $user,$tel,$pwd);
$arr =compact( 'user','pwd','tel');
print_r($arr);

    echo '</pre>';


