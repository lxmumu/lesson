<?php
/**
 * @Author: anchen
 * @Date:   2017-07-29 15:42:34
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-29 16:27:39
 */
//遍历关联数组的三种方法
//
// foreach ($variable as $key => $value) {

// }
 $arr =array('xiaoming','16','123456',);
 foreach ($arr as $key => $value) {
    echo $key.':'.$value;
    echo '<br>';
 }


 // while () {

 // }

 $ar = array('xiaomingf','20','1234567988');
 while ($ay=each($ar) ) {
 print_r($ay['key'].':'.$ay['value']);
}

echo '<hr>';

//list&each
$ar = array('xiaomingf','20','1234567988');
while (list($key,$value)=each($ar)) {
    echo "$key =>$value";
}

echo'<hr>';
$arr_age =array('wang'=>18,'li'=>20,'zhang'=>25);
foreach ($arr_age as $age){
    // $age =$age-10;
    echo $age;
    echo '<br>';
}
 print_r($arr_age);


 //混合
 echo '<hr>';

$product1 = ['001','ipone','5666','7'];
$product2 = ['002','huawei','3500','p9plus'];
$product3 = ['003','vivo','2999','x9plus'];
$product4 = ['004','oppo','2999','r11pro'];
$product5 = ['005','meizu','2566','6pro'];
$product6 = ['006','xiaomi','3500','6mix'];
$products = [$product1,$product2,$product3,$product4,$product5,$product6];
 foreach ($products as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $v) {
            echo $v ,'<br>';
        }
        }else{
            echo $value;
    }
 }