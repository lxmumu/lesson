<?php
/**
 * @Author: anchen
 * @Date:   2017-08-08 10:16:17
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-08 10:55:29
 */
//文件的指针
// ftell(fp)获得当前指针的位置
// rewind(fp)回到初始指针位置
// fseek(fp, offset, whence)指针跳转
//
$file_name = 'c.txt';
$fp = fopen($file_name,'r');

echo '<br>指针'.ftell($fp);
echo '<br>'.fgets($fp);

// rewind($fp);

echo '<br>指针'.ftell($fp);
echo '<br>'.fgets($fp);

// rewind($fp);
echo '<br>指针'.ftell($fp);
echo '<br>'.fgets($fp);

// rewind($fp);
echo '<hr>';
echo '<br>指针'.ftell($fp);
echo  '<br>'.fread($fp,17);

echo'<hr>';
rewind($fp);
fseek($fp,17);//直接定位到文件指针17的位置
echo '<br>'.fgets($fp);

rewind($fp);
fseek($fp,-10,SEEK_END);//结尾，向前移动10
echo '<br>'.fgets($fp);

fseek($fp,-30,SEEK_CUR);
echo '<br>'.fgets($fp);//在当前位置，向前移动30
