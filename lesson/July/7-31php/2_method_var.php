<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 16:11:15
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-31 21:10:11
 */
//作用域
// 局部
function test(){
    //在方法体声明的，局部变量
    //作用域：方法体出了作用域就释放了
    $a ='abc';
}
test();
echo $a;
//Notice: Undefined variable: a in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\7-31php\2_method_var.php on line 14
//
//静态变量
function test_statsic(){
    static $i = 1;//初始化：只初始化一次
    echo '<br>'.$i;
    $i++;
}
 test_statsic();//1
test_statsic();//2
test_statsic();//3
test_statsic();//4
echo'<hr>';
function tests_statsic(){
    $i = 1;//没有static
    echo '<br>'.$i;
    $i++;
}
 tests_statsic();//1
tests_statsic();//1
tests_statsic();//1
tests_statsic();//1

//全局变量
$a = 'abc';
function test_global(){
    $a='aaa';
    // echo $a;
}
test_global();
echo $a;//abc
//全局变量的作用域是整个脚本
//全局变量不能直接在方法体中使用
//想在方法体中使用全局变量  需要添加关键字 global

$b ='abc';
function test_global_b(){
    global $b;//告诉方法体。这个$b是全局$b
    $b='bbb';
}
test_global_b();
echo '<br>'.$b;


echo'<hr>';
function  test_global_bb(){
    global $b,$a;
    $b ='ssss'.$a;
}
test_global_b();
test_global_bb();
echo '<br>'.$b;