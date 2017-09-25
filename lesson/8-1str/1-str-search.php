<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 11:03:07
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 20:48:01
 */
//字符串查找
//字符串长度
$a = 'hello php';
$len = strlen($a);
echo $len;

echo '<hr>';
//查找，某个字符在字符串中的位置
$str ='hello php PHP';
$finStr = 'php';
// $pos = strpos($str,$finStr);//在指定字符串中查找第一次出现的位置
// $pos = strripos($str,$finStr); //忽略大小写 查找最后一次的位置
// $pos = strrpos($str,$finStr);//在指定字符串中查找最后一次的位置
$pos = stripos($str,$finStr);//忽略大小写
echo $pos;


echo '<hr>';
$str = 'abcdef abcdef';
$finStr = 'a';
//带三个参数  offset 设置查找起始位置
//如果是负数，从字符串的结尾开始
$pos =strpos($str,$finStr,1);
echo $pos;

//查找字符位置，并返回一些结果
$str = 'aa123@163.com';
$email = strstr($str,"@");//默认返回找到字符位置后面的字符串
echo '<br>'.$email;
$email = strstr($str,"@",true);//返回找到字符位置前面的字符串
echo '<br>'.$email;
//查找最后一次出现的位置，并返回后面的内容
$str = 'www.baidu.com';
$com = strrchr($str,'.');
echo '<br>'.$com;

//练习
//www.baidu.com
//.baidu
//.com
//.cn

echo'<hr>';
$str= 'www.baidu.com';
$com =substr($str, 0,3);
$baidu = substr($str,4,5);
$last =substr($str,-3,3);
echo '<br>'.$com.'<br>'.$baidu.'<br>'.$last;

// 字符串
$subject= '我要变有钱，有很多钱';
$search = '钱';
$replace ='车';
 $res=str_replace($search, $replace, $subject);
echo '<br>'.$res;

// 替换
 $subject= '<body  bgcolor = %color%>';
$search = '%color%';
$replace ='pink';
 $res=str_replace($search, $replace, $subject);
echo '<br>'.$res;

// search 数组
 $subject= 'hello php7 ni hao ';
$search = ['h','o'];
$replace ='';
 $res=str_replace($search, $replace, $subject);
echo '<br>'.$res;//ell pp7 ni a

//search replace 数组
//替换顺序从左到右，进行多重替换可能会替换掉之前插入的值
$subject= '我要有钱，有车, 有房';
$search = ['钱','车','房'];
$replace =['男朋有','男朋友','男朋友'];
 $res=str_replace($search, $replace, $subject);
echo '<br>'.$res;//

// 例子
$subject= ['A','B'];
$search = ['A','B','C'];
$replace =['B','C','D'];
 $res=str_replace($search, $replace, $subject);
print_r($res); //Array ( [0] => D [1] => D )



//大小写
$str = 'hello word';
echo  '<br>' .strtoupper($str);//全大写
echo'<br>'.ucwords($str);//单词首字母
echo '<br>'.ucfirst($str);//字符串首字母
$strr = 'HELLO WORD';
echo '<br>'.lcfirst($strr);//字符串首字母
echo '<br>'.strtolower($strr);//全小写