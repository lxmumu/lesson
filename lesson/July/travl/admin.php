<?php
/**
 * @Author: anchen
 * @Date:   2017-07-20 22:03:25
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-22 10:20:52
 */
$connect= mysqli_connect('localhost', 'root', '123456', 'test');
if (!$connect) {
   echo "link error".mysqli_error($connect);
   exit;
}

if (isset($_GET['action'])) {
$action = $_GET['action'];
switch ($action) {
    case 'login':
     // include 'blog.html';
    if (isset($_POST['loginsubmit'])) {
       $user=$_POST['user'];
       $pwd=$_POST['pwd'];
       // $pwd = md5($pwd);
       if ($user&&$pwd) {
        $sql="SELECT * FROM user WHERE username ='$user'";
        $res =mysqli_query($connect, $sql);
        if ($row = mysqli_fetch_assoc($res)) {
        if ($pwd==$row['pwd']) {
            include 'travl.html';
        }
        else{
              echo "密码错误";
        }
        }else{
              echo"用户不存在";
        }
        }
         else{
          echo "用户或密码不能为空";
         }
        }
                break;
        case 'register':
        // include "blog.html";
        if (isset($_POST['user'])){
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];
        if ($user&&$pwd) {
         $sql = "SELECT * FROM  user WHERE username = ' $user'";
         $res =mysqli_query($connect,$sql);
if ($row=mysqli_fetch_assoc($res)) {
 echo "用户已存在不能重复注册";
}else{
  $sql="INSERT INTO user VALUES (NULL,'$user','$pwd')" ;
  $res = mysqli_query($connect,$sql);
  if ($res) {
  echo "注册成功";
  }
}
 }
else{
  echo "用户和密码不能为空";
}



        }




  break;
            default:

                break;
        }
        }