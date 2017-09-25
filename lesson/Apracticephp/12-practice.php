<?php
/**
 * @Author: anchen
 * @Date:   2017-08-04 21:12:41
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-05 16:26:47
 */
set_time_limit(0);

$content=file_get_contents('http://desk.zol.com.cn/fengjing/');
$regex = '#src="([^"]+)[^s]+"#';
$res = preg_match_all($regex, $content,$matches);

foreach ($matches[1] as $value) {
//     var_dump($value);
// exit;
    $img = file_get_contents($value);
    file_put_contents('./imge/'.basename($value), $img);
}
ob_flush();
