<?php
/**
 * @Author: anchen
 * @Date:   2017-08-03 17:29:39
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-03 19:28:56
 */
//简单的抓取url
//
//1 获取网页内容
 $content =  file_get_contents('http://www.hao123.com');
//2 正则网页里面的url
//
$regex ='#http://[^");]+#';
//将正则出来的结果写入本地
$resArr= array();
 $res =   preg_match_all($regex, $content, $resArr);
if ($res) {
    // $url = $resArr[0];与下面相同
    $urls = current($resArr);//取到数组第一个位置的数据
    // var_dump($urls);exit;
foreach ($urls as  $value) {
$value = $value."\n";
    //追加写入文件
  file_put_contents('url.txt', $value, FILE_APPEND);
}
}

