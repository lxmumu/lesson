<?php
$arr ['bar'] =" hello word";
print_r($arr);

echo'<hr>';
//自定义函数
//标准内置函数
echo md5('1');
echo '<br>';
echo sha1('a');
echo'我是';

echo'<hr>';
//创建函数，不能跟系统的内置函数重名，必须调用才能执行
// 无参数值无返回值
function name(){
    echo '我是一个无参数无返回的函数';
}
name();

 echo'<hr>';
 //包含参数无返回值大函数
function  d($radius){
$area =$radius * $radius *pi();
 // echo '半径为'.$radius.'的面积为:'.$area;//两种写法都可以
echo $area;
}
d(10);
// 使用关键字  function 开始
echo '<hr>';
function arr($radius){
    $area = $radius *$radius *pi();
    return  $area;
}
echo arr(20);

echo '<hr>';
function arry($radius = 10){
    $area =$radius *$radius *pi();
    return $area;
}
echo arry();
//
echo '<hr>';
function  Info($name,$age,$job){
$user = array ($name,$age,$job);
// $user[]= $name;
// $user[] = $age;
// $user[] =$job;
return $user;
}

// list($name,$age,$job) = $user;

  print_r(Info('我','20','无'));
// echo Info();
//
// 不懂！！！！！
echo '<hr>';
$parice = 50;
$tax =0.5;
function Prices(&$parice,&$tax){
$parice = $parice + $parice*$tax;
$tax=$tax*$tax;
echo $parice;
echo '<br>';
echo $tax;
}
    Prices ($parice,$tax);
    echo'<br>';
    echo $parice;
    echo'<br>';
    echo $tax;
//全局变量
echo'<hr>';
$a =5;
function fa(){
    global  $a ;
    $a =2;
}
fa();
echo $a;
//超级全局变量
echo'<hr>';
$GLOBALS['a'] =5;
function qa (){
    $GLOBALS['a'] =2;
}
qa();
  print_r($a);
//each
echo'<hr>';
  $contact =array( 'id' =>1,'姓名'=>'名');
  $name =each($contact);
  print_r($name);

  //list each
echo'<hr>';
$contact = array('id'=>1,'姓名'=>'xiaoming','公司'=>'wu');
list($a,$v)=each($contact);
echo "$a => $v";
// echo $key.$value.'<br>';
//list
echo'<hr>';
$contact = array(1,'xiaoming','wu');
list($key,$value,$conm)=$contact;
print_r($value);
//
echo '<hr>';
$contact = array('id'=>1,'姓名'=>'xiaoming','公司'=>'wu');
while(list($key,$value)=each($contact)){
    echo "$key =>$value";
    // echo $key.$value;
}