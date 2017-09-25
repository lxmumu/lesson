<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 10:15:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 21:22:25
 */
set_time_limit(0);

function preg($a){
    for ($pageno = 1 ; $pageno < 3; $pageno ++) {
    ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');

   // file_get_contents(filename, flags, context, offset, maxlen)
   // 将整个文件读入一个字符串（网页地址）
    $content = file_get_contents($a);
    $regex='#class="pic" (href="[^"]+)#';
    // preg_match_all(pattern, subject, &subpatterns, flags, offset)
     // preg_match_all: 执行一个全局正则表达式
     //
    $res =preg_match_all($regex, $content, $arr);
    foreach ($arr[1] as $value) {
      $a =rtrim($a,'/pc');
      // file_put_contents:经一个字符串写入文件
      // （被写入数据的文件名，要写入的数据，flag）
      // FILE_APPEND：如果文件名已经存在，追加数据而不是覆盖
        file_put_contents('url.txt', "$a$value",FILE_APPEND);
        }
    }
}
echo preg('http://desk.zol.com.cn/fengjing/');

function pic($url){
 $content = file_get_contents($url);
 $regex = '#src="([^"]+)[^s]+"#';
 $res = preg_match_all($regex, $content, $arr);
 foreach ($arr[1] as $value) {
    $img = file_get_contents($value);
    // basename:返回路径中文件名部分

    file_put_contents('./images/'.basename($value), $img);
 }
 ob_flush();
 return "爬图成功";

}

$fileName = 'url.txt';
if (file_exists($fileName)) {
// file_exists：检查文件目录是否存在
// fopen: 打开文件或者URL
   $file = fopen($fileName,'r');
  // fgets:从文件指针读取一行
  // (文件必须是有效的，必须由fopen()或fsockopen()成功打开的文件并未被fclose()关闭)
while ($url = fgets($file)){
    echo $url;
$url = rtrim($url);
static  $i = 0;
$i++;
 pic($url);
}
echo "Notfind";
}







