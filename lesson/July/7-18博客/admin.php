<?php
/**
 * @Author: cancan
 * @Date:   2017-07-18 17:14:37
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-18 22:08:27
 */
// 判断请求行为：是登陆还是注册
if (isset($_GET['action'])) {

    $action = $_GET['action'];

    switch ($action) {
        case 'login':
        // 判断用户名密码，成功跳转到后台首页
         // 接收数据
         $user = $_POST['user'];
         $pwd = $_POST['pwd'];


         if ($user=='root'&&$pwd=='123456') {
             // 跳转
             include '02blogindex.php';
         }
        else{
           echo '登陆失败，请注册！！！';
        }
        break;

        case 'register':
            include 'login.html';
            break;
    }
}