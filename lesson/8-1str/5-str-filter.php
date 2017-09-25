<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 15:51:19
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-06 19:38:26
 */
//过滤
// trim(修剪)
$str = '   php   ';
var_dump($str);
var_dump(ltrim($str));//过滤左边
var_dump(rtrim($str));//过滤右边
var_dump(trim($str));//过滤两边
// 过滤指定字符
echo '<hr>';
$str = '123php!!';
var_dump($str);
var_dump(ltrim($str,'123'));//左边剔除特定字符
var_dump(rtrim($str,'!'));//右边剔除特定字符
//同时剔除123 ！
var_dump(trim($str,'123!'));
var_dump(trim($str,'0..9!'));//0..9 =>0-9


//剔除html和php标签
    $str ="<a href =''>hello a </a> <p>php</p>";
// $res =strip_tags($str);
// strip_tags:从字符串中去除html和php标签
    $res =strip_tags($str,'<a><p>');//<a>hello a </a> <p>php</p> 源代码
// echo'<br>'.$res;//hello a php
echo'<br>'.$res;


//自动转义
$str = "insert i'm";
$str ='insert "im"';
$res = addslashes($str);//本质：让具有特殊意义的符号转义成普通字符
echo'<br>'.$res;

echo'<hr>';
// 将特殊字符转换成html实体
$str = "php + java = <html>";
 echo '<br>'. htmlentities($str);//<br>php + java = &lt;html&gt;

$str = "<h1>你好</h1>";
echo'<br>'.htmlentities($str);//<br>&lt;h1&gt;你好&lt;/h1&gt;gt;
echo '<hr>';
// $baiDuContent = file_get_contents('http://www.baidu.com');
// echo htmlentities($baiDuContent);
$str = "<h1>&&你好</h1>";
echo '<br>'. htmlspecialchars($str);

echo '<hr>';
$str = "<h1>\n你好\n</h1>";
echo '<br>'. nl2br($str);

echo'<hr>';
$a ='a';
$b ='A';
$res =strcmp($a,$b);
echo '<br>'.$res;


echo'<hr>';
$a ='a';
$b ='A';
$res =strcasecmp($a,$b);
echo '<br>'.$res;

echo'<hr>';
$a ='a';
$b ='A';
$res =strnatcasecmp($a,$b);
echo '<br>'.$res;

echo'<hr>';
$a ='t';
$b ='A';
$res =strncasecmp($a,$b,1);
echo '<br>'.$res;



