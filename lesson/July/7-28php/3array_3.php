 <?php
/**
 * @Author: anchen
 * @Date:   2017-07-28 14:59:14
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-28 19:12:03
 */
//数组的遍历
$arr =range('a','z');
//取出第偶数个字母；
//通过方法获取数组内元素的个数 count:计数
for ($i=0; $i <count($arr); $i++) {
if($i%2!=0){
continue;
}
 echo$i.'...............'.$arr[$i] .'<br/>';
}

echo '<pre>';
//array_flip 数组的key-value对调
$arr = array_flip($arr);
print_r($arr);
//如何遍历关联数组
//php 提供遍历关联数组的方式
foreach ($arr as $key => $value) {
   // print_r($value);
   // print_r($key);
   echo $value;
   echo $key;
}
echo'<hr>';
//练习：商品列表
$product1 = ['001','ipone','5666','7'];
$product2 = ['002','huawei','3500','p9plus'];
$product3 = ['003','vivo','2999','x9plus'];
$product4 = ['004','oppo','2999','r11pro'];
$product5 = ['005','meizu','2566','6pro'];
$product6 = ['006','xiaomi','3500','6mix'];
$products = [$product1,$product2,$product3,$product4,$product5,$product6];

   echo '</pre>';
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
  <table  border="1" rules="all">
    <?php
foreach ($products as $key=> $product) {
echo '<tr>';
foreach ($product as $pk => $pv) {
   echo "<td>
   $pv;
    </td>";
}
echo '</tr>';

}

    ?>
  </table>
</body>
</html>