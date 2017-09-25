<?php
/**
 * @Author: anchen
 * @Date:   2017-08-03 17:02:19
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-09-18 23:31:15
 */
//php中的正则表达式函数
// preg_match(pattern, subject, &subpatterns, flags, offset);
// preg_match_all(pattern, subject, &subpatterns, flags, offset);
  $str = "hellophp@gmail.com,hellojava@163.com";
   $res ="#\w+@\w+(\.\w{2,3})+#";

   //如果在php中使用正则必须添加-定界符（不是正则表达式的符号）
   //为了界定正则的开始和结束
   //4种
   //1， /正则表达式/
   //2， ！正则表达式！
   //3，｛正则表达式｝
   //4， #正则表达式#
   $arr=array();
   // $res =preg_match($res, $str, $arr[], PREG_OFFSET_CAPTURE);
    $res =preg_match_all($res, $str, $arr[], PREG_OFFSET_CAPTURE);


   if ($res) {
       var_dump($arr);
   }else{
    echo'邮箱不匹配';
   }

