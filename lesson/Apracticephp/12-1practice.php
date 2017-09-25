<?php
/**
 * @Author: anchen
 * @Date:   2017-08-05 09:04:51
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-05 12:05:45
 */



set_time_limit(0);

// for ($pageno = 1 ; $pageno < 22; $pageno ++) {
    // ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');

    $content = file_get_contents('http://desk.zol.com.cn/pc/');
    $res = preg_match_all('{(load)?src(h)?="[^"]+[^s]"}',$content,$arr);
    // var_dump($arr);
    // exit;
    if ($res) {
        $urls = current($arr);
    }
    foreach ($urls as $keys => $value) {

        $value = ltrim($value,'src=||loadsrc=||srch=');
        $value = rtrim($value,'"');
        $value = ltrim($value,'"');
        // copy($value,"1.jpg");
        // $value = $value."\n";
        // file_put_contents('000.txt', $keys."--".$value, FILE_APPEND);
        $img = file_get_contents($value);
        file_put_contents('./imge/'.basename($value),$img);
    }

    ob_flush();
    echo "偷图成功！！！！";
