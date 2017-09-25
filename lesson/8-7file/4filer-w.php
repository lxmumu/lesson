<?php
/**
 * @Author: anchen
 * @Date:   2017-08-07 16:32:21
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 19:17:58
 */
//文件的读写
//读
//file_get_contents  一次全部读取文件内容
//file 将文件内容读到数组中
//readfile  读到内容并输出
$arr = file('3-filemode.php');
var_dump($arr);

  htmlentities(readfile('3-filemode.php'));
// htmlspecialchars(readfile('filedemo.txt'));
//写
// file_put_contents('bb.txt','abc', FILE_APPEND);讲一个字符串写入文件， 追加数据而不是覆盖
// readfile('bb.txt');

//资源类型
//获得文件的资源，对资源进行处理，
// 获得文件的资源
// fopen
//读 r
//w+
//a+

//写
//r+   指针指向头 （覆盖原内容） 文件不存在不会创建文件
//w    指针指向头 (清空原内容） 会创建  将文件大小截为零
//w+ (可读)  指向头 （清空原内容）     会创建 将文件大小截为零
//a    指向尾部 （追加）   会创建
//a+   指向尾部  （追加）  会创建
//使用w打开文件夹的时候会清空原来的数据，千万不要用w来打开，不然会造成数据丢失
//
 $file = 'rwdemo.txt';
 $fr=fopen($file,'a+');

// 资源类型的读写
// fwrite (fp,str,length)
// fread(fp,length)
$rs = fwrite($fr,'angyel hello');

// 重置文件指针
rewind($fr);
// fclose($fr);

// $fr=fopen($file,'r');
  echo'<br>'.fread($fr,250);
//关闭资源
fclose($fr);

  // 资源类型打开以后
  // 写
  // 参数：1，资源 2，内容 [3，长度]
  // fwrite();
  // fputs();别名
  //
  // 读
  // fread();按照设定的长度读(需要设置长度)
  // 参数 1，资源 2，长度
  // fgetc();逐个字符读
  // 参数 1，资源
  // fgets();逐行读
  // 参数 1，资源
  //
  echo '<hr>';
  $fr = fopen('rwdemo.txt','r');

  // var_dump(fread($fr,100));
// var_dump(fread($fr,2));
// var_dump(fread($fr,1));
// var_dump(fread($fr,1));

// var_dump(fgetc($fr));
// var_dump(fgetc($fr));
// var_dump(fgetc($fr));

var_dump(fgets($fr));
var_dump(fgets($fr));
var_dump(fgets($fr));

fclose($fr);

