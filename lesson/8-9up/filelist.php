<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>文件管理系统</title>
  <style>
    body{
      margin: 0;
      background-color:pink;
    }
  </style>
</head>
<body>
<a id='list_id'></a>
</body>
</html>


<?php
/**
 * @Author: anchen
 * @Date:   2017-08-10 21:33:45
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-12 14:52:08
 */

if (!isset($_GET['action'])) {
    $file_path='./x';
    list_file($file_path);
}
else {
    //方法的名字
    $action = $_GET['action'];
   if ($action=='move_file'&&isset($_POST['d_file_path'])){
    $action($_POST['filepath'],$_POST['d_file_path']);
   }


     //根据不同action操作
    $action($_GET['filepath']);
    }
//}


function list_file($file_path){
 $dir = opendir($file_path);
echo'<table border="1" rules="all" width="80%" style="margin:0 auto">
<tr>
<td>文件名</td>
<td>类型</td>
<td>操作</td>
</tr>';
 while ($file_name = readdir($dir)){
 if ($file_name == '.'||$file_name == '..'){
     continue;
 }
 $f_path = $file_path.DIRECTORY_SEPARATOR.$file_name;
 $type = filetype($f_path);
 $type = ($type=='file')?'文件':'文件夹';
  echo "<tr>
   <td>{$file_name}</td>
   <td>{$type}</td>
   <td>
    <a href='filelist.php?action=show_content&filepath={$f_path}'>查看</a>
    <a href='filelist.php?action=move_file&filepath={$f_path}'>移动</a>
    <a href='filelist.php?action=modify_file&filepath={$f_path}'>修改</a>
    <a href='filelist.php?action=del_file&filepath={$f_path}'>删除</a>
      <a href='filelist.php?action=download_file&filepath={$f_path}'>下载</a>
   <a href='file.html#shouye'>上传</a>
   </td>
   </tr>";
 }
 echo '</table>';
 closedir($dir);
}

function  show_content($file_path){
  if(is_dir($file_path)){
    list_file($file_path);
  }else{
    $file_content = file_get_contents($file_path);
    $file_content = htmlentities($file_content);
    echo
    "<textarea style='width:80% height:500px' disabled>{$file_content}</textarea>";
  }
}



function  modify_file($file_path,$file_content=''){
    if (is_dir($file_path)){
      echo '对不起，不能修改';
      return;
    }
    if ($file_content !='') {
      if (file_put_contents($file_path, $file_content)){
        echo'保存成功';
      }else{
        echo '保存失败';
      }
    }else{
     $file_content=file_get_contents($file_path);
echo
"<form action='filelist.php' method='post' accept-charset='utf-8'>
  <input type='hidden' name='filepath' value='{file_content}'>
  <textarea  style:'width=80%;height:500px' name='file_content'>{file_content}</textarea>
  <input type='submit'  value='保存'>
</form>";

}
}

function del_file($file_path){
  if (is_dir($file_path)) {
    if(del_file($file_path)){
      echo'删除成功';
    }else{
      echo'删除失败';
    }
  }else{
   if (unlink($file_path)){
    echo'删除成功';
   }else{
    echo'删除失败';
   }
  }
}

function download_file($file_path){
 if (is_dir($file_path)) {
   echo'文件夹不能下载';
 }else{
    $filesize = filesize($file_path);
    $filename = basename($file_path);
    header ("content-type:application/octet-stream");
    header("accept-ranges:bytes");
    header("content-dispostion:attachment;filename={filename}");
    readfile($file_path);
 }




}
//移动
function  move_file($S_file_path,$d_file_path=''){
  if (strlen($d_file_path)>0){
  $d_file_path .=DIRECTORY_SEPARATOR.basename($S_file_path);
  // echo"{$s_file_path}-----{$d_file_path}";
  if (rename($s_file_path,$d_file_path)){
    echo'移动成功';
  }else{
    echo'移动失败';
  }
  }else{
    $dir_path = dirname($S_file_path);
    $dir_path_arr = null;
    $dir=opendir($dir_path);
    while ($file_name = readdir($dir)) {
      if ($file_name == '.'||$file_name =='..') {
       continue;
      }
      $file_path = $dir_path.DIRECTORY_SEPARATOR.$file_name;
       if (is_dir($file_path)){
         $dir_path_arr[]=$file_path;
       }
    }
    closedir($dir);
    echo"
     <form action='filelist.php?action=move_file'method='post';accept-charset='utf-8'>
     <input type='hidden' name='filepath' value='{$s_file_path}'>
     选择移动的文件夹
     <select name='d_file_path' multiple>
    ";
    foreach ($dir_path_arr as $value) {
      echo "<option value='{$value}'>{value}</option>";
    }
  echo"
 </select>
 <input type='submit' value='移动'>
 </form>";
}
}
?>
