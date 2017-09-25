<?php
/**
 * @Author: anchen
 * @Date:   2017-08-03 22:15:27
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 21:13:05
 */
//随机颜色生成器
function randomColor(){
    $str = '#';
    for ($i=0; $i <6 ; $i++) {
        $ranNum = rand(0,15);
        switch ($ranNum) {
            case 10: $ranNum = 'A';
            break;
            case 11: $ranNum = 'B';
            break;
            case 12: $ranNum = 'C';
            break;
            case 13: $ranNum = 'D';
            break;
             case 14: $ranNum = 'E';
            break;


             case 15: $ranNum = 'F';
            break;
            default:

                break;
        }
        $str .=$ranNum;
    }
    return $str;
}
$color = randomColor();
echo $color;




//爬虫
set_time_limit(0);

// for ($pageno = 1 ; $pageno < 22; $pageno ++) {
    // ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');
function preg($a){
    for ($pageno = 1 ; $pageno < 3; $pageno ++) {
    ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; GreenBrowser)');
    $content = file_get_contents($a);
    $res = preg_match_all('{class="pic" href="([^"]+)}',$content,$arr);
    foreach ($arr[1] as $keys => $value) {
        // $value = ltrim($value,'/');
        $value = $value."\n";
        $a = rtrim($a, '/pc');
        // var_dump($a);
        // exit;

        file_put_contents('000.txt',"$a$value", FILE_APPEND);
    }
}
}

echo preg('http://desk.zol.com.cn/pc/');
// exit;

function tu($url)
{
    $content = file_get_contents($url);
    $res = preg_match_all('{srcs="([^"]+)"}',$content,$arr);
    foreach ($arr[1] as $keys => $value) {

        // $value = $value."\n";
        // file_put_contents('000.txt',"$a$value", FILE_APPEND);
        $img = file_get_contents($value);
        file_put_contents('./images/'.basename($value),$img);
    }
    ob_flush();
    return "偷图成功！！！！";
}

// if (preg('http://desk.zol.com.cn/pc/')) {
    $fileName = '000.txt';
    if (file_exists($fileName)) {
        // 打开文件
        $file = fopen($fileName, 'r');
        // fgets逐行读取文件
        // foreach ($file as $key => $value) {
        // var_dump($value);
        // }
        // exit;
        while ($url = fgets($file)) {
            // $url = ltrim(explode('=', $url)[1],'"') ;
            $url = rtrim($url);
            // var_dump($url);
            // exit;
            static $i = 0;
            $i++;
            // echo "<hr>[$i]";
            tu($url);
            // ob_flush();
            // sleep(1);
        }
        echo "404!!!!";
    }
 // }


