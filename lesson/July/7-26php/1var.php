<?php
/**
 * @Author: anchen
 * @Date:   2017-07-26 09:54:30
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 17:55:23
 */
//php中的变量
// 1
$aBoy;
// $1Boy; 不行
// $@Boy; 不行
// $this;关键字不行
$_a_boy;

$_A_BOY;

$美女= '我是美女';
echo  $美女;
// $a;
$a = 1;
$a = $b = $c = 1;
echo $a,$b,$c;//, 同时输出多个

//错误
// echo $abc;
// 变量未定义错误
// Notice: Undefined variable: abc in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-26php\1var.php on line 26
//undefined(没有定义)
//variable(变量)


//解析错误
//1， ;没写
//2 ，小（）
//3， 少｛｝
//
//Parse: 解析错误
//syntax: 语法错误
//unexpected:意外错误
//expecting: 期望

//可变变量
$a ='b';
$b = 'c';
$c = 'd';
echo $$$a;//等价于$c
${$a} = $b;

${${$a}} = $c;

echo '<hr>';
$a = 'hello';

$hello = '你好';
// $world = '世界';

${$a} = '你不好';

echo $hello;

echo'<hr>';
//取地址符号
$a ='hello';

$c= &$a;
$d= &$a;
$b = &$a;
$d ='你好';
// $b ='弄好';
echo $a;

echo'<hr>';
$a = 'hello';
$b = $a;
// $b = '你好';
echo $b;//你好


// function  test (&$var){
//     $var = 'hello';
// }
// $a = '你好';
// test($a);
// echo $a;