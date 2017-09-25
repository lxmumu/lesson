<?php
/**
 * @Author: anchen
 * @Date:   2017-08-08 20:52:38
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-09 09:51:36
 */

$file = './c';
$newfile='./d';

// function  dir_copy($file,$newfile){
//     if(!file_exists($newfile)){
//         mkdir($newfile);
//     }
// $dir =opendir($file);
// while ($file_name= readdir($dir)) {
//       if ($file_name == '.'||$file_name == '..')
//           continue;
//         // ./c/0.txt
//       $file_path = $file.DIRECTORY_SEPARATOR.$file_name;
//       // ./$newfile/0.txt
//       $newfile_path = $newfile.DIRECTORY_SEPARATOR.$file_name;
//       if(is_dir($file_path)){
//         dir_copy($file_path,$newfile_path);
//       }else{
//          copy($file_path,$newfile_path);
//       }
// }
// closedir($dir);
// }
// dir_copy($file,$newfile);


//teacher
//s_path:源文件
//$d_path:目标路径
function copy_dir($s_path,$d_path){
  //如果copy的目录不存在直接返回
if (!file_exists($s_path)) {
 return;
}
//判定目标目录是否存在，不存在创建
if (!file_exists($d_path)) {
 mkdir($d_path);
}
//遍历源目录
$dir = opendir($s_path);
while ($s_filename =readdir($dir)) {
  //过滤
  if ($s_filename == '.'|| $s_filename == '..') {
 continue;
  }
//拼接完整的相对路径
$s_filepath = $s_path.DIRECTORY_SEPARATOR.$s_filename;
$d_filepath = $d_path.DIRECTORY_SEPARATOR.$s_filename;
if (is_file($s_filepath)) {
  copy($s_filepath,$d_filepath);
}else{
   copy_dir($s_filepath,$d_filepath);
   }
}
//关闭文件夹
closedir($dir);
}
copy_dir($file,$newfile);