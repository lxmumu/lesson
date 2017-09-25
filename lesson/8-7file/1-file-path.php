<?php
/**
 * @Author: anchen
 * @Date:   2017-08-07 14:10:15
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-07 14:37:43
 */
//路径
//相对路径
//相对于当前目录，相对于上级目录
//.当前目录
//..上级目录
//./filedir/a.text
//绝对路径
//全路径c:/wampstack/apache2/htdocs/lesson/12-file/
//
//
//linux 的路径分隔和windows的路径分割
//wind：\ 反斜杠
//linux:/ 斜杠
//php提供一个常量来表示分隔符
// DIRECTORY_SEPARATOR
echo DIRECTORY_SEPARATOR;

//远程地址
//相对路径和本地的相对一样
//绝对路径
//本地：c\a\b\c
//远程：http://www.baidu.com/index.html
//
//php中路径的函数
//basename(path, suffix);//路径下文件的名字
//dirname(path);//路径下文件夹的名字
//pathinfo(path, options);//路径的一些信息

$url = './aaa/bbb/ccc/index.php';
// $aurl = "c:/aaa/bbb/ccc/aindex.php";
$aurl= "http://www.baidu.com/index.html";
 echo  basename($url).'<br>';
 echo  basename($aurl).'<br>';
 echo  dirname($url).'<br>';
 echo  dirname($aurl).'<br>';
 echo'<br>';
  var_dump(pathinfo($url));
  echo '<br>';
  var_dump(pathinfo($aurl));