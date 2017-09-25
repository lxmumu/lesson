<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 11:40:04
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 19:36:56
 */
//函数
//为了解决程序开发过程中，很多重复代码无法复用 的问题，设计了函数
//函数的目的，将重复的代码封装成一个方法，在需要的地方直接调用（不需要再写一遍）
//例子：
//1.输入0-100以内都数
// for ($i= 0;$i<100;$i++){
//     echo $i;
// }
//1.输入100-200以内的数 --改代码


//用到函数，相同的代码，封装到函数中
//函数的定义
// function 方法 方法的名字（参数1,参数2）{}
//方法的功能 ，输出100-200之间的数
function  showNum ($begin,$end){
    for ($i=$begin;$i<$end; $i++) {
    echo $i.'<br>';
    }
}

//以后用到这个功能，只需要调用方法  调用可以用
//方法调用，语法：方法名（）；
echo'aaa <br>';
// showNum(0,100);//0-100
// showNum(100,200);//100-200

//定义加法
echo'<hr>';
function sum($a,$b){
    $c=$a+$b;
    echo $c;
}
sum(1,2);

//函数需要有个结果返回出来
echo '<hr>';
function  add($a,$b){
    $c=$a+$b;
    //方法内部返回一个结果
    //默认每个方法都有返回结果，不写返回结果为空（null）
    return$c;
}
$a =add(11,33);
echo$a;//44



//命名
function _aMehthod(){

}
function aMehthod(){

}
  function bMehthod($var){

  }
  function bMehthode($var){
    return true;
  }
  //函数调用
  function test(){
    echo'<br>我是';
  }
  //函数调用时 不区分大小写，最好遵循大小写
  TEST();


// 错误
  // function test(){
  //   echo'<br>hello';
  // }
  // test();

  // Fatal error: Cannot redeclare bMehthod() (previously declared in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-31php\0-method_base.php:63) in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-31php\0-method_base.php on line
  //
  //函数命名是，规避函数已经存在的函数名
  // function md5(){
  //   echo'<br>md5';
  // }
  // md5();
  //
//return  代表着方法的结束；
  function testReturn(){
    return true;
    return 1;
    return '我是字符串';
    return ['a','b','c','d'];
  }
  var_dump(testReturn());