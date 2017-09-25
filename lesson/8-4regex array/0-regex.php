<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 10:44:59
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 14:12:37
 */
//正则替换
//preg_replace 使用正则替换
//参数
//1，正则
//2，替换的内容
//3，搜索的目标
//4，替换的次数
//5，替换次数统计
// preg_replace(regex, replace, subject, limit, &count)
// 返回值
// 如果subject是一个数组， preg_replace()返回一个数组， 其他情况下返回一个字符串。

//剔除某个字符串的数字
$str = 'abcdefg012345aabbcc';
$regex =  '#\d#';
$replace = '';
$res = preg_replace($regex, $replace, $str,-1, $count);
echo  $res;
echo"次数{$count}";
echo '<hr>';
//位置替换
$str = "april 15 2017";//2017 15 april
$regex = '#(\w+) (\d+) (\d+)#';
// $replace ='\3\2\1';//  等价 $3 $2 $1
$replace ='$3 $2 $1';
$res = preg_replace($regex,$replace ,$str);
echo $res;

echo '<hr>';
// 练习
$str = "<starData>=1999-5-27";//starData=27/5/1999
$regex = '#<(\w+)>=(\d+)-(\d+)-(\d+)#';
$replace = '\1=\4/\3/\2';
$res = preg_replace($regex, $replace, $str);
echo $res;


//数组替换，正则是数组，替换是数组
$rege = ['#<(\w+)>=#',
       '#(\d+)-(\d+)-(\d+)#'];
$replaceArr = ['$1=','$3/$2/$1'];
$res = preg_replace($rege, $replaceArr, $str);
echo '<br>'.$res;

echo '<hr>';
//数组替换，目标是数组 ，正则是数组，替换是数组
$strArr = ['abc@163.com','abc@sina.com'];//user:abc emaile:163.com
$regex = ['#(\w+)@#',
          '#@(\w+\.\w+)#'];
// $replace=['user:$1@','emaile:$1'];
// $replace=['user:$0','emaile:$1'];
$replace=['user:$1@','emaile:$0'];
// 替换数组第二个元素会在，第一个元素替换结果的基础上替换
// $0 完整正则的匹配结果
$res = preg_replace($regex, $replace, $strArr);
print_r($res);

