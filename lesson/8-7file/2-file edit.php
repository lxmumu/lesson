<?php
/**
 * @Author: anchen
 * @Date:   2017-08-07 14:42:09
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-12 11:12:37
 */
//文件的操作
//php提供的函数
//增加 touch();
//删除  unlink();
//移动  rename();给目录和文件夹重命名，移动文件夹
//复制  copy();

// 相对路径
// $file = './filedir/b.txt';
// $new_file = './bb.txt';
//  相对路径
// // $file ='D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\8-7file\filedir\b.txt';
// $rs= touch($file);
// if ($rs) {
// echo '文件创建成功';
// }else{
//     echo '文件创建失败';
// }
//删除文件
// unlink($file);

// rename($file,$new_file);

// copy($file, $new_file);
// $a = './a/b/c/bb.txt';
// copy ($file,$a);
//路径有问题，文件夹不存在
//Warning: copy(./a/b/c/bb.txt): failed to open stream: No such file or directory in D:\Bitnami\wampstack-5.6.19-0\apache2\htdocs\8-7file\2-file edit.php on line 33

$file = './filedir';
$new_file = '../demo';
rename($file, $new_file);//移动文件夹包括文件夹内容
