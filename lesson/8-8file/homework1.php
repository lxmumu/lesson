<?php
/**
 * @Author: anchen
 * @Date:   2017-08-08 19:17:48
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-09 09:35:17
 */

// $dir_file = './a';
//  dia_file($dir_file);
// function  dir_file($dir_name){
//   $dir =opendir($dir_name);
//    while ($file_name = readdir($dir)) {
//        if ($file_name=='.'||$file_name =='..')
//                continue;
//     $file_path=$dir_name.DIRECTORY_SEPARATOR.$file_name;
//     //递归函数 判断是否为文件夹，如果不是，用unlink
//      if (is_dir($file_path)) {
//         dir_file($file_path);

//      }else{
//         unlink($file_path);
//      }
//      rmdir($file_path);
// }
// @rmdir($dir_name);
// closedir($dir_name);
// }

//teacher
//文件夹的删除
//复制

// 1，遍历文件夹
// 2，删除文件
// 3，删除文件夹（文件夹为空才能删）

function del_dir($path){
     //1,文件夹是否存在
if (file_exists($path)) {
    //打开文件夹遍历
    $dir = opendir($path);
    //遍历
    while ($file_name = readdir($dir)) {
    //过滤
        if ($file_name == '.' ||$file_name == '..') {
             continue;
        }
    //拼接完整的相对地址
        $file_path = $path.DIRECTORY_SEPARATOR.$file_name;
        if (is_file($file_path)) {
            unlink($file_path);
        }else{
    //删除文件夹
        del_dir($file_path);
        }
    }
    //关闭文件夹
    closedir($dir);
    //文件夹内的东西清空完毕——删除文件夹
    rmdir($path);
    }
}
$dir_file = './c';
del_dir($dir_file);