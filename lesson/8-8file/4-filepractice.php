<?php
/**
 * @Author: anchen
 * @Date:   2017-08-08 14:43:57
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-10 12:00:17
 */
$dir_path='../../lesson/';
//接受超链接参数并赋值
if (isset($_GET['filepath'])) {
    $dir_path = $_GET['filepath'];
}

$dir = opendir($dir_path);

while ($file_name = readdir($dir)) {
    // 把.处理
    if ($file_name=='.') {
      continue;
    }
    //将文件名拼接成完整的相对路径
    $file_path=$dir_path.DIRECTORY_SEPARATOR.$file_name;

        if(is_dir($file_path)){
            if($file_name=='..'){
                $file_name='返回上一层';
                $mtime = '';
                $file_type = '';
                $file_size='';
            }else{
                    //时间
            $mtime = filemtime($file_path);
            date_default_timezone_set('PRC');
            $mtime = date('Y/m/d H:i:s', $mtime);
              //类型
            $file_type=filetype($file_path);
              //大小
              //自己定义方法计算
              //思路：
              //1，遍历文件夹
              //2，如果文件累计计算大小（递归基础）
              //3，如果是文件夹--递归
             $file_size = transform(dir_file($file_path));

              }


           echo "<a href='4-filepractice.php?filepath={$file_path}'>
           {$file_name}---------时间{$mtime}
           --------------类型{$file_type}
           ---------------大小{$file_size}
           </a><br>";
        }else{
           echo"<br>$file_name";
        }
      }



function  transform($size){
 $dw='bytes';
 if ($size>pow(2,40)) {
     $size = round($size/pow(2,40));
     $dw='TB';
 }
 if ($size>pow(2,30)) {
     $size = round($size/pow(2,30));
     $dw='GB';
 }
 if ($size>pow(2,20)) {
     $size = round($size/pow(2,20));
     $dw='MB';
 }
 if ($size>pow(2,10)) {
     $size = round($size/pow(2,10));
     $dw='KB';
 }else{
  $size = $size;
 }
 return $size.$dw;
}

function  dir_file($dir_name){
  //文件大小
  $file_size=0;
  $dir = opendir($dir_name);
  while ($file_name = readdir($dir)) {
  if ($file_name =='.'||$file_name =='..')
  continue;
  //判断文件 文件夹
  $file_path = $dir_name.DIRECTORY_SEPARATOR.$file_name;

  if (is_file($file_path)) {//文件
    $file_size += filesize($file_path);
  }else{//文件夹
        //获得文件夹文件的大小
        $file_size += dir_file($file_path);
  }
}
closedir($dir_name);
return $file_size;
}
//第一层：获得文件夹内所有文件的大小
// homework 1， 删除文件夹
//          2，复制文件夹