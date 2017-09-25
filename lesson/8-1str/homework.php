<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 17:51:14
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-02 22:03:42
 */
//实现  模仿系统函数array（'a:b','0:a','1:c'）；
//
//索引函数
function  Func($Name){
    $value= explode(",",$Name);
    return $value;
 }
 $Name="1,2,3";
$arr=Func($Name);
print_r($arr);

//索引数组
echo '<hr>';
function custom_array(){
    $key=$arr=null;
    for ($i=0;$i<func_num_args();$i++){
        if ($i%2==0) {
            $key = func_get_arg($i);
        }else {
            $arr[$key] = func_get_arg($i);
        }
    }
    return $arr;
}
echo '<hr>';
$arr = custom_array('a','b','c','e','f','g');
var_dump($arr);


function customs_array(){
//1.取参数
$args =  func_get_args();
//2.根据参数来决定数组元素怎么做
$arr = null;
foreach ($args as $arg) {
//如果参数遵循关联数组的原则（a:b）
if (strlen(stristr($arg, ':'))){
//获取key
$key =stristr($arg,':',true);
// $ey =substr($arg,0,strlen($arg)-strlen(stristr($arg,':')));
// $key =explode(':',$arg)[0];
$value = ltrim(stristr($arg,':'),':');
$arr[$key] = $value;

}else{
    $arr[]=$arg;
}

}
return $arr;
}
echo '<hr>';
$arr = customs_array('a','b:hello','c:php','e','f','g');
var_dump($arr);


