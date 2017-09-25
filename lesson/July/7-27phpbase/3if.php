       <?php
/**
 * @Author: anchen
 * @Date:   2017-07-27 15:07:40
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 18:54:12
 */
//条件语句
//不同的条件处理不同的代码
//
//网吧 18岁
//if的条件用来判断真假
$age = 27;
//if
if($age>=18)
    echo '可以上网';
//if...else
if ($age>=18) {
    echo '可以lol';
}else{
    echo '回家王者';
}

// $week = '周一';//可能有周一....周日
//使用  比较 逻辑运算符
//输出，周一到周五，上课
//周六 周日 睡觉


$week = '周二';
if ($week=='周六' or$week =='周日' ) {
   echo "睡觉";
}else{
    echo "上课";
}

echo "<hr>";
// 周一到周六每天输出不同的欢迎语
// if..elseif..
//
// 单个if循环效率低  if ...elseif效率高
$week = '周日';
if ($week=='周一') {
    echo "新的一周开始了";
}elseif($week == '周二'){
echo "第二天";
}elseif ($week =='周三') {
    echo "第三天";
}elseif ($week =='周四') {
    echo "第四天";
}elseif ($week =='周五') {
    echo "第五天";
}elseif ($week == '周六') {
    echo "第六天";
}else{
    echo "又是新的一周";
}


//练习：
//if...elseif..else
//1。有两个数
//2.如果都是正的，输出两数差；
//如果一正一负，输出和；
//4，其他情况输出两个数的值
echo "<hr>";
$a = -8;
$b = -8;
if ($a >0 &&$b>0 ){
    $c =$b - $a;
     echo $c;
}
elseif ($a<0 && $b>0) {
    $c=$a+$b ;
echo $c;
}elseif ($a>0 && $b<0) {
    $c=$a+$b  ;
echo $c;
}else{
    echo $a;
    echo $b;
}
// if 嵌套
 // 周一到周六每天根据用户的性别输出不同的欢迎语

 echo "<hr>";
 $sex = 'woman';
 $week='周五';

 if ($sex == 'man') {
    if ($week=='周一') {
    echo "新的一周开始了";
}elseif($week == '周二'){
echo "第二天";
}elseif ($week =='周三') {
    echo "第三天";
}elseif ($week =='周四') {
    echo "第四天";
}elseif ($week =='周五') {
    echo "第五天";
}elseif ($week == '周六') {
    echo "第六天";
}else{
    echo "又是新的一周";
 }
}elseif ($sex =='woman') {
   if ($week=='周一') {
    echo "新的一周开始了";
}elseif($week == '周二'){
echo "第二天好";
}elseif ($week =='周三') {
    echo "第三天好";
}elseif ($week =='周四') {
    echo "第四天好";
}elseif ($week =='周五') {
    echo "第五天好";
}elseif ($week == '周六') {
    echo "第六天好";
}else{
    echo "又是新的一周";
}
}
// if (condition) {
 //什么代码都可以写
// }

echo "<hr>";
// switch语句
$week = '周一';
 switch ($week) {
    case '周一':
       echo 1;
        break;
    case '周二':
       echo 2;
        break;
    case '周三':
       echo 3;
        break;
     case '周四':
       echo 4;
        break;
     case '周五':
        echo 5;
        break;
     case '周六':
        echo 6;
        break;
    default:
        # code...
        break;
}
echo "<hr>";
$floor =6;
switch ($floor) {
    case 1:
    case 2:
    echo "电脑";
        break;
    case 3:
    case 4:
    echo "智游";
    break;
    case 5:
    case 6:
     echo "网吧";
     break;
    default:
    # code...
    break;
}



echo "<hr>";
//为什么有循环
//机器重复执行某一个操作
//输出0-100，每一个数
//循环结构
// while (循环的条件) {

// }
// 死循环：根本停不下来（原因：循环的条件恒成立）
// while (1==1) {
//  echo 'hello<br';
// }


//循环语句。需要注意 3个地方：1.结束条件 2.循环动力 3.循环的开始
$a = 0;
while ($a<10) {
   $a++;
   echo $a.'<br>';
   //1
   //2
   //3
   //4
   //5
   //6
   //7
   //8
   //9
   //10
}

//while 循环 先判断条件，在执行循环
//do...while 先执行一次代码，在判断条件

echo "<hr>";
$a = 0;
do{
  echo  ++$a .'<br>';
}while($a<10);
echo "<hr>";
//for
for ($i=0; $i <10 ; $i++) {
echo $i.'<br>';
}


//九九乘法表
echo "<hr>";
for ($a=1; $a <= 9; $a++) {
  echo "<br>";
  for ($b=1; $b<=$a ; $b++) {
    echo "$a * $b =".$a*$b.'&nbsp';
  }
}
// echo "<hr>";
for ($a=9; $a >= 1; $a--) {
  echo "<br>";
  for ($b=1; $b<=$a ; $b++) {
    echo "$a * $b =".$a*$b.'&nbsp';
  }
}

//循环的嵌套
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
  <style>
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    td{
      width: 50px;
      height: 20px;
    }


  </style>
</head>
<body>
<div class="left">
<table rules="all"  border="1">
  <?php

for ($i=1; $i<= 9; $i++) {
echo "<tr>";
//写列

for ($j=1; $j<= $i; $j++) {
  $c =$i *$j;
echo "<td>$i*$j=$c</td>";
}
 echo"</tr>";
}
?>
</table>
</div>
<div class="right">
<table rules="all" border="1">
<?php
for ($i=9; $i>= 1; $i--) {
echo "<tr>";
//写列

for ($j=1; $j<= $i; $j++) {
  $c =$i *$j;
echo "<td>$i*$j=$c</td>";
}
 echo"</tr>";
}

  ?>
  </table>
  </div>
</body>
</html>