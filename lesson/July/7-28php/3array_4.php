<?php
/**
 * @Author: anchen
 * @Date:   2017-07-28 16:43:46
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-28 17:50:18
 */
//数组指针的操作
//
$arr = range (1,10);

//指针的默认位置-最顶头
 echo   current($arr);//1
 echo next($arr);//2
 echo  current($arr);//2
 echo   prev($arr);//1

 echo  end($arr);//10
echo next($arr);//null
echo  reset($arr);//1



//使用指针操作的方式，遍历数组，并输出数组中每个元素的key-value
echo'<hr>';
$arr = range( 'a','z');

do{
     echo  current($arr).'-----'.key($arr).'<br/>';
} while(next($arr)!=null) ;


//list
$arr = ['admin','123456','23'];
list($user,$pwd,$age) = $arr;
echo $user.'<br>';
echo $pwd.'<br>';
echo $age.'<br>';

//each 返回的数组中包括的四个元素：键名为 0，1，key 和 value。单元 0 和 key 包含有数组单元的键名，1 和 value 包含有数据。
echo '<hr>';
$arr = ['user'=>'admin', 'pwd'=>'123456'];
print_r(each($arr));
print_r(each($arr));

//如何使用list 和each 结合 来遍历数组
$arr = range('a','z');

// 使用while循环
while (list ($key,$value)=each($arr)) {
    echo $key.$value.'<br>';
}