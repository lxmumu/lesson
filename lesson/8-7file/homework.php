<?php
/**
 * @Author: anchen
 * @Date:   2017-08-07 19:00:50
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 09:06:00
 */
// 晚上作业  vc
// 写一个代码检测工具，检测出有效代码行数和注释代码的行数

function  Tool($file){
   static  $ALLline = 0;
   static  $singleR = 0;
   static  $doubleR= 0;
   static  $space = 0;
    // $other = 0;
    static  $content=0;
   // static  $row2 =0;
    if (file_exists($file)) {
$fr = fopen($file,'r');
$Fr= file($file);
    echo '文件打开';
    }else{
        echo '文件不存在';
    }
   $line =fgets($fr);
    do {
         $ALLline++;
        }while(next($Fr)!=null);
 // if(preg_match('#^\s+\m#',$line)){
 //            $R++;
 //        }
    foreach ($Fr as$value) {
    if(strlen(strpos($value,'/*'))){
       $doubleR++;
     }elseif(strlen(strpos($value,'//'))){
     $singleR++;
    }//elseif($value='#\s+#'){
        //$other++;
    //}
    elseif(strlen($value)>1){
        $content++;
    }else{
        $space++;
    }
}
echo'<br>';
echo '单行注释'.$singleR .'<br>';
echo  '多行注释'.$doubleR. '<br>';
echo  '总行数'.$ALLline.'<br>';
echo  '空白行' .$space.'<br>';
echo '内容'.$content.'<br>';;
  // var_dump($Fr);
  fclose($fr);
}

Tool('0-filetype.php');
