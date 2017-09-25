<?php
/**
 * @Author: anchen
 * @Date:   2017-08-01 15:10:57
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-01 16:04:04
 */
//md5
$pwd = '123456';
$md5Str = md5($pwd);
echo $md5Str;
//sha1
$sha1 = sha1($pwd);
echo '<br>'.$sha1;

//加密
// rsa
// des
