<?php
/**
 * @Author: anchen
 * @Date:   2017-08-08 09:14:42
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 10:07:26
 */
//检测代码的有效行
//1，读文件
//2，检测每行代码

$file_name = '0-filetype.php';
$fileArr = file($file_name);

$k_line = $code_line = $node_line = 0;
$isNode = false;
foreach($fileArr as $value){
    //单行 // #
    //多行 /**/
    if (preg_match('#^((//)|\#)#',trim($value))) {//单行
       $node_line++;
    }elseif (preg_match('#^[/\*]#',trim($value))||$isNode) {//多行
     $isNode = true;
     if (preg_match('#\*\/$#',trim($value))){
       $isNode = false;
     }
 $node_line ++;
    }
    elseif (trim($value)=='') {//空行
      $k_line++;
    }else{//代码行
        $code_line++;
    }

}
echo "注释：".$node_line;
echo "空行：".$k_line;
echo "代码：".$code_line;