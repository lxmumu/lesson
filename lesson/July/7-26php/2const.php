<?php
/**
 * @Author: anchen
 * @Date:   2017-07-26 11:37:44
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-04 17:54:50
 */

//定义常量
define('CLASS_NUM', 7);
// define('名字'，'值')；
const CLASS_NAME = 'php';
// const 常量名称=值；
//错误
// CLASS_NUM= 8;
// CLASS_NAME= 'HELLO';
//
echo  CLASS_NUM ,CLASS_NAME;


echo PHP_VERSION,PHP_OS,M_PI;
echo "<hr>";
echo __LINE__,__DIR__,__FILE__;

echo "<hr>";
$name = 'CLASS_NAME';
if (defined($name)) {
    echo constant($name);
}else{
    echo "常量未定义";
}

// $constArr = get_defined_constants(true);
// var_dump ($constArr) ;
