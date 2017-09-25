<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 14:13:02
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-07 08:47:15
 */

// preg_split(pattern,subject,limit ,flags);
// 使用正则 分隔字符串
// 参数
// 1，正则
// 2，匹配目标
// 3，次数 默认-1（不限次数）
// 配置
//
//
// 使用空格分隔
$str = "hello  php is hypertext language,programing";
$regex  = '#[\s,]+#';//分隔符
$rs =preg_split($regex,$str);
var_dump($rs);

//配置
echo '<hr>';
//PREG_SPLIT_NO_EMPTY  返回非空结果
$str = 'programing';
$regex = '##';
$res = preg_split($regex, $str, -1, PREG_SPLIT_NO_EMPTY);
var_dump($res);

echo '<hr>';
// PREG_SPLIT_OFFSET_CAPTURE 偏移量
$str = "hello  php is hypertext language,programing";
$regex  = '#[\s,]+#';//分隔符
$rs =preg_split($regex,$str,-1,PREG_SPLIT_OFFSET_CAPTURE);
var_dump($rs);

echo "<hr>";
// PREG_SPLIT_DELIM_CAPTURE 模式（）中的结果返回
$str = "hello1235php5698is88hypertext99language4programing";
$regex  = '#(\d+)+#';//分隔符
$rs =preg_split($regex,$str,-1,PREG_SPLIT_DELIM_CAPTURE);
var_dump($rs);

// 练习
// <td colspan="2" rowspan="2" bgcolor="red">
// 获得属性和属性的值，并存储在一个数组里，属性key，值为value
echo '<hr>';

$str ='<td colspan="2" rowspan="2" bgcolor="red">';
$str = trim($str,'<td>');
$regex='#\s#';
$rs=preg_split($regex, $str,-1,PREG_SPLIT_NO_EMPTY);
// var_dump($rs);
foreach ($rs as  $value) {
    // $arr = explode('=', $value);
   $arr = preg_split('#=#',$value);
  list($key,$value) = $arr;
var_dump($arr);

  $data[$key]= trim($value,'"');
  }
 var_dump($data);


// while (list($key,$value)=each($rs)) {
//    var_dump($rs);
// }



