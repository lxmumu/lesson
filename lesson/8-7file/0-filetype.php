<?php
/**
 * @Author: anchen
 * @Date:   2017-08-07 10:50:38
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 19:09:32
 */
/*
php文件系统处理
文件系统基于linux

文件处理的作用：
1，项目中都有文件处理
2，长时间的存储数据
3，建立临时缓存

文件类型（在linux一切东西都是以文件的形式存在的）
block：块，设置文件，磁盘分区，软驱，ca-rom等；
char：字符设备，键盘，打印机
dir:目录
fifo：命名通道，用于进程间通信
file：文件
link：软连接
unknown  未知，无法识别
window下识别 file dir unknown
linux 下全部识别，（基于linux）

文件的属性

// 检测文件是否存在
file_exists(filename);
//文件的大小
filesize(filename);
读和写
is_writable(filename);
is_readable(filename);

fileatime(filename);访问
filemtime(filename);modify 修改
filectime(filename);creat 创建
stat(filename);//获得文件属性的数组
 */

$filename = 'filedemo.txt';
//获得文件属性
$fileArr = stat($filename);
var_dump($fileArr);

//文件的类型获取
echo '<br>'.filetype($filename);
echo'<br>'.filetype('filedir');
//类型的判断
// is_file(filename);判断是否为文件
// is_dir(filename);判断给定的文件名是否是一个目录（文件夹）
// is_link(filename);判断给定的文件名是否为一个符号连接
// is_executable(filename); //判断是否可执行
// is_uploaded_file(path);//是否上传的文件

//可读 可写
// is_readable();
// is_writable();
//大小
// filesize();
//时间
// fileatime(filename);
// filectime(filename);
// filemtime(filename);

//封装一个方法：获得文件的属性：文件的大小（正常的形式）文件的各种时间（正常显示），文件是文件夹，是否可读写
echo '<hr>';
// function getFileInfo($fileame) {
//    echo '<br>'. filesize($fileName);
//      $time =filectime($fileName);
//    var_dump (date('Y/m/d H:i:s',$res)).'<br>';
//    echo'<br>'.filetype($fileName);
//    echo'<br>'.is_readable($fileName);
//    echo'<br>'.is_writable($fileName);
// }
// getFileInfo('filedemo.txt');


function getFileInfo($filename) {

if (!file_exists($filename)) {
  return '文件不存在';
}
if (is_dir($filename)) {
    return '文件夹';
}
if(is_file($filename)){
    $info = null;
    if (is_readable($filename)) {
        $info ['isRead']= true;
    }else{
        $info['isRead']=false;
    }
    if(is_writable($filename)){
        $info['isWrite']=true;
    }else{
        $info['isWrite']=false;
    }
   $date = 'y/m/d H:i:s';
   $info['ctime'] = date($date,filectime($filename));
   $info['atime'] = date($date,fileatime($filename));
   $info ['mtime'] = date($date,filemtime($filename));
   $info['size']  = getfilesize(filesize($filename));
  return $info;
}
  return 'unknown';
}
function getfilesize($size){
$dw ='bytes';
if ($size>=pow(2,40)) {
   $size=round($size/pow(2,40),2);
   $dw = 'TB';
}elseif($size >=pow(2,30)){
$size =round($size/pow(2,30),2);
$dw = 'GB';
}elseif ($size >=pow(2,20)){
    $size = round($size/pow(2,20),2);
    $dw = 'MB';
}elseif($size >=pow(2,10)){
    $size=round($size/pow(2,10),2);
    $dw = 'KB';
}else{
    $size = $size;
}
   return $size.$dw;
}

var_dump(getFileInfo('filedemo.txt'));
/*

hhh

 */
