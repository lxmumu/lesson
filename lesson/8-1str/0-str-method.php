<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 10:01:12
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 20:31:27
 */
//字符格式化输出(通过格式化符号将不同类型的变量和字符串融合)
//1.使用特定的格式化符号，进行在原字符串中占位
//2.每个格式化符号，一一对应一个变量
//
// 格式化符号
//%d 整型
//%s 字符型
//%f 浮点
//%x 小写16进制
//%X大写的16进制
//格式化基本语法
//%[部位的字符][字符长度的设置][类型]
 $a =1;
printf("<br />整型%02d",$a);//01
printf("<br />浮点%.2f",$a);//1.00
$a ='a';
printf("<br> 字符 %'i6s",$a);//iiiiiia


$a =15;
printf("<br> 16进制%x",$a);//f


//将数字转换成格式化过字符串
// $a = sprintf("%02d", $a);
// echo  $a;
//
//练习：
//1，输出长度为5的数字5
//2，输出长度为6，小数位为3，的数5.5
//3. 输出15.98的整数表示方法

$a = 5;
printf("<br> 整型%05d",$a);
$b = 5.5;
printf("<br> 浮点型%06.3f",$b);
$c=15.98;
printf("<br> 整型%d",$c);