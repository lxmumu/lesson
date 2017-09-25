<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 22:07:39
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-02 21:36:34
 */
//冒泡排序法
$arr =array(10,5,9,8);
$temp =0;
for ($i=0; $i <count($arr)-1 ; $i++) {
   for ($j=0; $j <count($arr)-1-$i ; $j++) {
      if ($arr[$j]>$arr[$j+1]) {
          $temp=$arr[$j];
          $arr[$j]=$arr[$j+1];
          $arr[$j+1]=$temp;
      }
   }
}
print_r($arr);//Array ( [0] => 5 [1] => 8 [2] => 9 [3] => 10 )
//封装
echo '<hr>';
function Bubblesort(&$arr){
$temp =0;
for ($i=0; $i <count($arr)-1 ; $i++) {
   for ($j=0; $j <count($arr)-1-$i ; $j++) {
      if ($arr[$j]>$arr[$j+1]) {
          $temp=$arr[$j];
          $arr[$j]=$arr[$j+1];
          $arr[$j+1]=$temp;

      }
   }
}
}
$arry=array(10,5,8,41,12);
Bubblesort($arry);
print_r($arry);

echo '<hr>';


// $a=45;
// $b=$a;
// // $b=&$a;
// $b=$b+10;
// echo $a.'<br>'.$b;