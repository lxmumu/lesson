<?php
/**
 * @Author: anchen
 * @Date:   2017-08-12 16:11:28
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-12 17:04:20
 */
//面向对象编程
//类是抽象的，概念的，代表一类事物，比如人类，猫类
//对象是具体的，实际的，代表一个具体的事物
//定义
// class 类名 {
//     成员属性（变量）；
// }
// 成员属性：是从某个事物中提取出来的，可以是基本数据类型，也可以是复合数据类型（数组，对象）
//创建对象
// $对象名 = new 类名（）；
// $对象名 = new 类名；
// 访问成员属性 属性名：public
//创建一个类
class cat{
    public $name;
    public $age;
}
//创建对象

$cat1= new cat;
// 给某个对象赋值
$cat1->name='小明';
//访问某个对象的某个属性值 $对象->属性名
echo $cat1->name;
echo'<hr>';

class person{
    public $name;
    public $age;
}
$a = new person();
$a->name='xiaoming';
$a->age=20;
//把a变量（对象）赋值给b
$b=$a;
echo $a->name;
echo $b->age;
echo'<hr>';
class persons{
    public $name;
    public $age;
}
$p1 = new persons;
$p1->name='liming';
$p1->age='22';
function  t1($p){
    $p->name='xiaohua';
}
t1($p1);
echo $p1->name;
// function t2(&$p1){

// }
// 成员方法的基本语法
// public function 函数名（）｛
//
//    return（可选）
//   ｝
echo'<hr>';
 class personss{
    public $name;
    public $age;

 public function speak(){
    echo'我是好人';
 }
 public function count(){
  $res=0;
  for ($i=0; $i < 100; $i++) {
     // $res=$res+$i;
     $res +=$i;
  }
   return $res;
 }
}
$p2= new personss;
 $rs = $p2->speak();
 $rs1=$p2->count();
 echo $rs.'<br>';
 echo $rs1;
