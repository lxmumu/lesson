<?php
/**
 * @Author: anchen
 * @Date:   2017-07-19 09:37:44
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-21 21:17:05
 */
// 数据库连接
$connect = mysqli_connect('localhost','root', '123456','test');
if (!$connect) {
    var_dump(mysqli_error($connect));
    exit;
    // exit用于调试程序，不执行位于它以下的程序
}

// 查询blog的所有数据
$sql = "select * from blog";
$res = mysqli_query($connect, $sql);
$blogDate = array();
while ($row = mysqli_fetch_assoc($res)) {
$blogDate[] = $row;
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'login':
// 登录操作
if (isset($_POST['loginsubmit'])) {

// var_dump($_POST);
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$pwd = md5($pwd);//加密 密码
if ($user&&$pwd) {
 $res =  mysqli_query($connect,"SELECT * FROM user WHERE username = '$user'");
 if ($row = mysqli_fetch_assoc($res)) {
     if ($pwd == $row['pwd']) {
       include "adminindex.html";
}else{
     echo "<script>alert('密码错误')</script>";
}
}
else{
    echo "<script>alert('用户不存在')</script>";
  }
 }
else{
 echo "<script>alert('用户名或密码不能为空')</script>";
}
}else{
include 'login.html';
}


            break;
        case 'register':
// 注册操作
// 先判断是否已经注册
// 判断用户名和密码不能为空
// 注册并插入数据库
if (isset($_POST['user'])) {
    $user = $_POST['user'];
$pwd = $_POST['pwd'];
// echo   $user;
if ($user&&$pwd) {
 // 判断数据库中是否已经注册
 $sql = "SELECT * FROM user WHERE username = '$user' ";
// echo "$sql";
  $res = mysqli_query($connect, $sql);
  // var_dump($res);
if ($row = mysqli_fetch_assoc($res)) {
  echo "<script>alert('用户名已经存在不能重复注册')</script>" ;
}else{
    $res = mysqli_query($connect,"INSERT INTO user VALUES (NULL,'$user',md5('$pwd'))");
    // echo $sql1;
   // $res= mysqli_query($connect,$sql1);
if ($res) {
  echo "<script>alert('注册成功!')</script>" ;

}
}
}else{
    echo "<script>alert('用户名或密码不能为空')</script>";
}
}
            break;
case 'list':
include 'adminbloglist.html';
    break;
    // 博客文章管理
case 'delete':
$id = $_GET['id'];
  $res = mysqli_query($connect, "DELETE FROM blog WHERE id =$id");
if ($res) {
  echo "<script>alert('删除成功');
  location.href='admin.php?action=list';</script>";
}

  break;
case 'add':
  // include 'adminadd.html';
  if (isset($_POST['wo'])) {
      $title =$_POST['title'];
      $author = $_POST['author'];
      $text = $_POST['text'];
      if ($title == null||$author==null||$text==null) {
        echo "请输入数据";
      }else{
         $sql= "INSERT INTO blog VALUES (NULL,'$title','$text','$author',null)";
         $res=mysqli_query($connect,$sql);
      }
    }
    if ($res) {
         // echo "<script>alert('发布成功')</script>";
include 'adminadd.html';
       }
    break;
// 发布新的博客

    case 'category':
        break;
        // 分类管理
        default:

            break;
    }
}