<?php
/**
 * @Author: anchen
 * @Date:   2017-07-31 10:23:34
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-31 10:23:55
 */

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  if ($action == 'add') {
    if($_POST['user']&&$_POST['msg']){
      $msg = [$_POST['user'],$_POST['msg']];
      $filename = 'msg.txt';
      $fileContent = file_get_contents($filename);
      if ($fileContent) {
        // 将文件的内容反序列化成数组
        $msgList = unserialize($fileContent);
      }else{
        $msgList = array();
      }
      $msgList[] = $msg;
      // 将最新的数据写入数组
      $res = file_put_contents($filename,serialize($msgList));
      if ($res) {
        include "huancun.html";
      }else{
        echo "添加失败";
      }
    }else{
      echo "不能为空";
    }
  }
}
