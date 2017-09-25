<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <title>管理系统</title>
         <style>
             body{
                box-sizing:border-box;
                background-image:url('1.jpg');

             }
            table{
              border:solid darkcyan 5px;
           }
         </style>
    </head>
    <body>
     <a  id='look'></a>
     <div>
    <h1>文件管理系统</h1>
</div>
</body>
</html>



<?php

$dir_path = './x';
if (isset($_GET['filepath'])) {
    $dir_path = $_GET['filepath'];
    // var_dump($dir_path);
}

$dir = opendir($dir_path);
echo'<table border="1" rules="all" width="50%" style="margin:0 auto">
<tr>
<td>文件名</td>
<td>时间</td>
<td>类型</td>
<td>大小</td>

</tr>';
// var_dump($dir);
while ($file_name = readdir($dir)) {
    if ($file_name =='.') {
        continue;
    }

    $file_path = $dir_path.DIRECTORY_SEPARATOR.$file_name;
     // var_dump($file_path);
    if (is_dir($file_path)){
        if($file_name=='..'){
            $file_name = '返回';
            $mtime = '..';
            $file_type='..';
            $file_size='..';
        }else{
            $mtime = filemtime($file_path);
            date_default_timezone_set('PRC');
            $mtime=date('Y/m/d H:i:s',$mtime);
            $file_type = filetype($file_path);
            $file_size = transform(dir_file($file_path));
        }
         echo
             "<tr>
             <td> <a href='filelook.php?filepath={$file_path}'>{$file_name}</a><br></td>
             <td> {$mtime}<br></td>
             <td> {$file_type}<br></td>
             <td> {$file_size}<br></td>
             </tr>";
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
@closedir($dir_name);
return $file_size;
}




 ?>

