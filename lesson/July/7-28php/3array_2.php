<?php
/**
 * @Author: anchen
 * @Date:   2017-07-28 14:31:43
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-28 14:58:03
 */
//二维数组
//数组的使用
//通过索引获取到值，修改值
echo '<pre>';
    // $arr =array()
$arr = ['a', 'b','c'];
$arr[0] = 'aa';
print_r($arr);

//删除数组数据
$arr[0] = null;//null只是空
print_r($arr);
// 使用unset  释放变量
// 用isset 检测变量是否存在
unset($arr[0]);
print_r($arr);

unset($arr);
print_r($arr);

// Notice:  Undefined variable: arr in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-28php\3array_2.php on line 26

//二维数组:数组里面有数组
//
$xiaoming = ['小名','22','123456','郑州'];
$xiaomi = ['小w','23','123456','郑州'];
$xiaomg = ['小s','26','123456','郑州'];
$xiaong = ['小q','27','123456','郑州'];
$xiaomp = ['小e','20','123456','郑州'];

$students = compact('xiaoming','xiaomi','xiaomg','xiaong','xiaomp');
print_r($students);

//取出电话
$xiaomg =$students['xiaomg'];
  echo $xiaomg[2];
//上下等效
  print_r($students['xiaomg'][2]);

  //修改

$students['xiaong'][3] = '北京';
print_r($students);
//just test
$arr [][][][] ='just test';
print_r($arr);
























 echo '</pre>';