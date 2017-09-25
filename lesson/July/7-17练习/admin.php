<?php
/**
 * @Author: anchen
 * @Date:   2017-07-18 17:16:03
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-18 17:31:45
 */



// 判断是处理登录请求还是注册请求
if (isset($_GET['action'])) {
$action = $_GET['action'];
switch ( $action) {
       case 'login':
           //判断用户名和密码
        $user = $_POST['user'];
$pwd = $_POST['pwd'];
if ($user&&$pwd) {
    // 跳转
    include '02blogindex.php';
}
           //跳转到后台首页


           break;


       case 'register':

           break;
       default:

           break;
   }



}