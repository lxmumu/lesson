<?php
/**
 * @Author: anchen
 * @Date:   2017-08-09 16:00:01
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-09 20:40:09
 */
// 文件管理系统
// 0，创建目录-删除目录
// 1，上传-选择文件目录上传
// 2，下载
// 3，文件的查看
// 4，文件的删除
// 5，文件的编辑（可选）

//创建目录


if(isset($_POST['dir_creat'])){
$dir_name = $_POST['name'];
$dir ='./x';
  $dir_path = $dir.DIRECTORY_SEPARATOR.$dir_name;
 if (is_dir($dir_path)) {
    echo'目录已经存在';
    exit;
 }else{
   $res= mkdir($dir_path,0777,true);
   if ($res) {
    echo '创建成功';
    include'file.html';
}else{
  echo '创建失败';
}
}
}

 //删除目录
 function del_dir($path){
    if (file_exists($path)){
        $dir = opendir($path);
         while ($file_name = readdir($dir)) {
         if ($file_name == '.'||$file_name == '..')
           continue;
         $file_path = $path.DIRECTORY_SEPARATOR.$file_name;
         if (is_dir($file_path)) {
             del_dir($file_path);
         }else{
            unlink($file_path);
         }
      }
     closedir($dir);
     rmdir($path);
    }
 }