<?php
/**
 * @Author: anchen
 * @Date:   2017-07-28 09:14:59
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-28 09:49:37
 */
//特殊的流程控制
// break continue
// goto
// exit:die
//
// break：终止 终断
 for ($i=0;$i<10;$i++){
    //在i=5中断循环
    if ($i==5) {
        break; //当i=5时 ，直接中断，跳过整个剩余的循环
    }
     echo $i;
 }
echo "<hr>";
 // continue
 for ($i=0; $i <10; $i++) {
   if ($i==5) {
      continue;//跳过一次循环
   }
   echo  $i;
 }

echo "<hr>";
//用到continue，输出0-10内3的倍数

for ($i=0; $i <10 ; $i++) {
   if ($i%3!= 0) {
     continue;
   }
   echo $i;
}

echo "<hr>";
//goto 跳转到指定位置，执行代码
for ($i=0; $i < 10; $i++) {
if ($i==5) {
   goto mycode;
}
    echo $i;
}
echo'循环执行结束';

 mycode:

echo'循环没有结束，被跳出';
goto next;
echo'循环没有结束，被跳出1';
echo'循环没有结束，被跳出2';
next:
echo'循环没有结束，被跳出3';


//exit die
// 相同：结束当前的脚本
// die结束时可以同时输出语句

echo "<hr>";
echo '脚本未结束1';
// exit;
die('我的脚本结束');
echo '脚本未结束2';
echo '脚本未结束3';
echo '脚本未结束4';
echo '脚本未结束5';
echo '脚本未结束16';












