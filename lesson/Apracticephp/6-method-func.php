<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 21:35:38
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-07 09:09:08
 */
 Function abc($n){
    if($n>2){
       abc(--$n);      //（函数自己调用自己称为递归调用）
      Echo $n;
    }
    // Echo $n;
}
abc(5);
echo'<br>';
// 练习 1到n的值

function sums($begin ,$end){
  $sum =0;
  for ($i=$begin;$i <= $end; $i++) {
    // echo $i;
      $sum +=$i;
  }
  echo  $sum;
  return $sum;
}
 $a= sums(1,4);
 echo $a;

