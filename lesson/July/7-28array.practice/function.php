<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 21:41:37
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-01 09:23:04
 */
function show(){

  global $fileName;
  $fileName = 'mag.txt';
  @$fileContent = file_get_contents($fileName);
if ($fileContent) {
   global $magList;
   $magList = unserialize($fileContent);
}else{
    $magList = array();
}
return $magList;
}