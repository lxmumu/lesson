<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 16:39:32
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 20:00:41
 */
//正常传值
$a =1;
function  test($a){
    $a++;
    echo $a;
}
test($a);
echo $a;//1
echo '<hr>';
// 引用传值  本质，变量将自己的地址传给了函数，函数拿到变量的地址，就可以随意修改变量
function  test_1(&$a){
    $a++;
    $a=['a','b','c'];//拿到地址，可以修改变量的类型
}
test_1($a);
// echo $a;//2
print_r($a);

// 练习：声明一个方法，有两个参数 方法的功能：调换两个参数的值

$a =1;
$b =2;
function arr(&$a,&$b){

$m =$a;
$a = $b;
$b =$m;

}

$x=4;
$y=5;
arr($x,$y);
echo $x.$y;

//变量函数
function say(){
    echo'<br>你好';
}
function hello(){
    echo'<br>hello';
}
function nihao(){
    echo '<br>nihao';
}
//变量的值是函数名
$method ='nihao';
$method();

function play(){
echo'播放音乐';
}
function stop(){
echo'停止';
}
function pause(){
 echo '暂停';
}
$ex='play';
$ex();

echo'<hr>';
//匿名函数
$a =function(){
    echo'我是匿名函数';
};
$a();

echo'<hr>';
//递归函数
// 例子：定义方法 有一个参数，$n=3 输出：3 2 1 0--0 1 2 3
//参数是n 输出n-0 0-n
function arry($n){
  for($j =$n;$j>=0;$j--){
        print_r($j);
    }

       for ($i=0; $i <=$n ; $i++) {
      print_r($i) ;
    }
}
 arry(7);
//递推
 echo'<hr>';
function text_d($n){
    echo $n;
    if($n>0){
        text_d($n-1);
    }else{
echo '-';
    }
    echo $n;
}
text_d(3);



//输出0-10数
function showNum($num){
    echo'<br>'.$num;
     $num++;
    if ($num >10) {
        echo '结束';
    }else{
        showNum($num);
    }
}
showNum(0);

echo'<hr>';
//递推练习：1+2+3+4+5+6+..n的值
//参数n

function sum_test($n){
    if ($n==1) {
        return 1;
    }else{
        return $n +sum_test($n-1);
    }
}
echo sum_test(10);
//

echo'<hr>';
function sum($n){
    static $sum =0;
    if ($n>=0) {
       $sum += $n;
       sum(--$n);
    }
    else{
        return $sum;
    }
}
echo sum(9);