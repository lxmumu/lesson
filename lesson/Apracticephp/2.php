<?php
/**
 * @Author: anchen
 * @Date:   2017-07-29 11:15:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-07 09:09:10
 *///

//九九乘法表
// for ($a=1; $a <= 9; $a++) {
//   echo "<br>";
//   for ($b=1; $b<=$a ; $b++) {
//     echo "$a * $b =".$a*$b.'&nbsp';
// }
// }
// //九九乘法表
for ($a=9; $a >= 1; $a--) {
  echo "<br>";
  for ($b=1; $b<=$a ; $b++) {
    echo "$a * $b =".$a*$b.'&nbsp';
  }
}
echo'<hr>';
// 九九乘法表
for ($i=9; $i >=1; $i--) {
    $j=0;
    while ( $j<$i) {
        $j++;
        $sum =$i*$j;
        echo "$i*$j = $sum";
    }
echo'<br>';
}

//九九倒序乘法表
echo'<hr>';
$i=10;
while ( $i>1) {
     $i--;
for ($j=9; $j >=$i; $j--) {
   $c=$i*$j;
   echo "$i*$j=$c";

}
echo'<br>';
}

echo '<br>';
$a ='123456';
$regex='#\d+#';
$res = preg_match_all($regex, $a, $arr);
echo $res;