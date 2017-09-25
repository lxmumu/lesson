<?php
/**
 * @Author: anchen
 * @Date:   2017-08-03 19:30:08
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-07 09:37:00
 */

// 正则表达式
// (?#注释内容)
// 通配符lookarounds
// ?= 正向预查 ?!表示否定 ?<=反向预查?<!表示否定
$regex = '#(?<=c)d(?=e)#';
$str ='adcdefgk';
$matches =array();
if (preg_match($regex, $str, $matches)) {
   var_dump($matches);
}
echo "\n";
echo '<hr>';
$regex = '#(?<!c)d(?!e)#';
$str ='adcdfegk';
$matches =array();
if (preg_match($regex, $str, $matches)) {
   var_dump($matches);
}

echo'<hr>';
$regex = '#(chuanshanjia)[\w\s!]+#';
$str = 'chuanshanjia thank chuanshanjia';
$matches = array();
if (preg_match($regex, $str, $matches)) {
        var_dump($matches);
}
echo'<hr>';
$regex = '#hel*#';
$str = 'hellllllllll';
$matches = array();
if (preg_match($regex, $str, $matches)) {
        var_dump($matches);
}
echo'<hr>';
$regex = '#hel?#';
$str = 'hellllllllll';
$matches = array();
if (preg_match($regex, $str, $matches)) {
        var_dump($matches);
}
echo'<hr>';
$regex = '#hel+#';
$str = 'hellllllllll';
$matches = array();
if (preg_match($regex, $str, $matches)) {
        var_dump($matches);
}
//preg_replace
echo '<hr>';
$subject =array("dd133aa2","kk1ff3");
$pattern ='#\d+#';
$result = preg_replace($pattern, "z", $subject);
print_r($result);//Array ( [0] => ddzaaz [1] => kkzffz )
//preg_replace_callback
echo "<hr>";
$subject= "dd133aa2";
$pattern ='#\d+#';
$result = preg_replace_callback($pattern,function ($matches){
    return 'z';
} ,$subject);
print_r($result);//ddzaaz
// preg_split 分割字符串
echo '<hr>';
 $subject="dd133aa2cc";
 $pattern ='#(\d+)#';
 $result1 = preg_split($pattern, $subject);
 // $result2 = preg_split($pattern, $subject,null,PREG_SPLIT_DELIM_CAPTURE);
  $result2 = preg_split($pattern, $subject,null,PREG_SPLIT_OFFSET_CAPTURE);
 print_r($result1);
 echo'<br>';
 print_r($result2);

echo'<br>';
 $php = "+php++点点通+++是++好网站";
 $regex = '#\+{1,}#';
 $result = preg_split($regex, $php);
 print_r($result);//Array ( [0] => [1] => php [2] => 点点通 [3] => 是 [4] => 好网站 )

 // preg_grep(regex, input, flags)  与数组匹配后返回新的数组
 echo '<br>';
 $phpddt = array("php点点通","php100","呵呵","hehehehe");
 $item = preg_grep( "#^php#" , $phpddt);
 print_r($item);//Array ( [0] => php点点通 [1] => php100 )