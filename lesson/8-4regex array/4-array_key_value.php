<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 16:21:41
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-06 18:52:33
 */
//键 ，值，操作
//
$arr = range('a', 'z', 2);
// array_keys(arg) 取得数组的键名作为下标连续的索引数组返回
$keys = array_keys($arr);
var_dump($keys);
echo '<hr>';
// array_values(arg) 取得数组的键值作为下标连续的索引数组返回
var_dump(array_values($arr));
echo'<hr>';
// array_flip(arg) 交换数组的键名和键值
var_dump(array_flip($arr));
echo '<hr>';
// in_array(needle, haystack, strict) 检测数组中是否存在某个值
if (in_array('a', $arr)) {
   echo 'in';
}else{
    echo'no-in';
}
echo'<hr>';
// array_search(needle, haystack, strict)在数组中搜索给定的值，如果成功则返回相应的键名
var_dump(array_search('c', $arr));
echo '<hr>';
// array_key_exists(key, search) 检查给定的键名或索引是否存在于数组
var_dump(array_key_exists('12',$arr));
echo '<hr>';
// array_reverse(input, preserve_keys)数组倒置
var_dump(array_reverse($arr));
echo '<hr>';
// shuffle(&arg) 打乱数组元素
shuffle($arr);
var_dump($arr);
echo '<hr>';
// array_rand(arg, num_req) 随机取出数组键名
var_dump(array_rand($arr,2));
echo '<hr>';
// array_unique(arg) 移除数组中重复的值
var_dump(array_unique($arr));
echo '<hr>';
// array_sum(arg )统计数组中元素的总和
var_dump(array_sum(array_flip($arr))) ;
echo'<hr>';
// array_product(arg)计算数组中所有值的乘积
unset($arr[0]);
var_dump(array_product(array_flip($arr)));
echo '<hr>';
// array_count_values(arg) 统计数组中值出现的次数

echo "<hr>";
// extract(&arg, extract_type, prefix) 从数组中将变量导入到当前符号表
extract(array_flip($arr));
echo $a,$c,$e,$g,$i,$k,$m;
echo '<hr>';

$Arr = 'red';
$arrs =array('a' =>'green','Arr'=>'pink','b'=>'black');
extract($arrs,EXTR_OVERWRITE);
echo $a,$Arr,$b;
echo '<hr>';

extract($arrs,EXTR_SKIP);
echo $a,$Arr,$b;
echo '<hr>';
// array_pad(arg, pad_size, pad_value)用值将数组填补到指定长度
 $res=array_pad($arr, -20,'php');
 var_dump($res);
