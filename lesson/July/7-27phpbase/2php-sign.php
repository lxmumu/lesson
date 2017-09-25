<?php

header('content-type:text/html;charset =gb2312');
/**
 * @Author: anchen
 * @Date:   2017-07-27 11:02:02
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-27 14:51:56
 */

// 运算
$a = 1;
echo  -$a;//-1

$a =87;
$b= $a%7;
echo $b;//3
// 赋值
$a += 5;
$a = $a +5;
// -=  +=  /=  *=  %=

$b = 15;
$b %=7;
echo $b;
// 00000001=1
// <<左移 往高位
// 00000010=2
//>>右移 往低位

echo "<hr>";
$a= 1;
$b = $a << 2 ;
echo "$b";

echo "<hr>";
// 取反
 $a =20 ;
$b =  ~$a;
echo $b;


//& 按位与
$a = 1;//00000001
$b = 2;//00000010
$c =$a&$b;
echo $c;//0

// | 按位或
$a =3;//00000011
$b= 4;//00000100
$C=$a|$b;//00000111
echo $c;//7

//^ 按位异或
$a = 3;//00000011
$b =2 ;//00000010
$c = $a^$b;//00000001
echo $c;//1

echo "<hr>";
//判断的事情，比较运算符
$a=1;
$b='1';
if ($a==$b) {
    echo "相等";
}
//全等 类型和数值相同
if ($a===$b) {
    echo "全等";
}

// 比较的ASCII码 a:65 b:66
$a='a';
$b='b';
if ($a>$b) {
    echo "成立";
}else{
    echo "不成立";
}

//不等  <>  != 符号相同
$a = 1;
$b = 2;
if ($a<>$b) {
    echo "不相等";
}

//错误控制
//@抑制报错
$a= array();

@$b =$a['a'];

if(@$a['a']){

}

//执行运算符
echo `ipconfig`;
//通过函数的方式执行命令
 echo shell_exec('ipconfig');

 echo shell_exec('dir');



 //自增自减
echo "<hr>";
 $a = 0;
 $a++;//自己增加1
 echo $a;
 $a--;//自己减少1
 echo $a;
 // 前置   直接加一
 $b = 10;
 echo ++$b;//11

echo "<br>";

 // 后置  执行完语句再加一
  $b=10;
 echo $b++;//10

 //逻辑运算符
 // and && 逻辑与
 // or ||  逻辑或
 // xor    逻辑异或
 // Not !  逻辑非
echo "<hr>";
 var_dump(true and true);//true
  var_dump(false and true);//false
 var_dump(true && true);//true
  var_dump(false &&true);//false
  var_dump(false && false);//false
  echo "<hr>";

  var_dump(true or true);//true
  var_dump(true or false);//true
  var_dump(false or false);//false

  echo "<hr>";

 var_dump(true xor true);//false
  var_dump(true xor false);//true
  var_dump(false xor false);//false
  echo "<hr>";

var_dump( !true);//false
var_dump(!false);//true

echo "<hr>";
//字符串
$a = '我是一个字符串';
$b =10;
$c = $a.$b;
echo $c;//我是一个字符串10

$c.='我是女神';
$c= $c.'我是女神';
// 上下等效代码
echo $c;
