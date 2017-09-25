<?php
/**
 * @Author: anchen
 * @Date:   2017-08-09 15:35:07
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-12 12:01:11
 */

//下载需要设置http的请求头信息
//目的是告诉浏览器，处理这个文件的方式
//
//



$dir_path = '../8-9up/';
$dir = opendir($dir_path);
while ($file_name = readdir($dir)) {
    if ($file_name == '.'||$file_name =='..') {
       continue;
    }
    $file_path = $dir_path.DIRECTORY_SEPARATOR.$file_name;
    echo"<p><a href='2-file-download.php?fname={$file_path}'>{$file_name}</a></p>";
}



if (isset($_GET['fname'])){
   $file_name = $_GET['fname'];


//设置头部信息
//header（）；
//image/png image/jpeg image/gif image/jpg
header("Content-Type:text/html");//设置文件类型
//处理方式 attachment 附件的形式处理
$fname = basename($file_name);
header("Content-Disposition:attachement;filename={$fname}");
//文件大小
header("Content-Length:".filesize($file_name));

// 将文件内容输出
readfile($file_name);
}

?>

