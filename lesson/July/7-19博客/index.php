<?php
/**
 * @Author: anchen
 * @Date:   2017-07-19 09:25:39
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-22 18:05:00
 */
// 只要名字是index，代表默认首页
//
//
// blog前台的处理逻辑组织
$connect = mysqli_connect('localhost','root','123456','test');
if (!$connect) {
    echo "link error".mysqli_error($connect);
}
// 查询分类的数量
  $sql="SELECT category_id, COUNT(*) as num FROM blog GROUP BY category_id";
  //通过查询category_id中category_id的数量 作为一个数字输出
  $category_num = array();
  $res = mysqli_query($connect,$sql );
  // var_dump($res);
  while ($row = mysqli_fetch_assoc($res)){
    $category_num[] =$row;
  }

  // var_dump($category_num);
// 常用语调试代码
  // exit;用于调试程序
//查询blog全部数据
$sql = "SELECT * FROM blog";

//定义一个空的数据组,用来接收查询的数据
$data = array();
$res = mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($res)){
    $data[] = $row;
}
if (isset($_GET['blogid'])) {
// 如何根据blogeid，获取blog的数据
$blogid = $_GET['blogid'];
$sql = "SELECT * FROM blog WHERE id = $blogid ";
$res = mysqli_query($connect, $sql);
$newBlog =mysqli_fetch_assoc($res);
}else{

// 获取bloge最新一条数据
 $newBlog = $data[count($data)-1];
}
 // newblog改成动态数据，如果用户没有点击，显示最新的bloge
 // 如果用户点击了 显示用户碘点击的数据


//查询category的信息
$sql= "SELECT * FROM category";

$category_data = array();

$res = mysqli_query($connect,$sql);

while ($row = mysqli_fetch_assoc($res)){

    $category_data[] = $row;

}
// var_dump($category_data);

mysqli_close($connect);

if (isset($_GET['action'])) {
$action= $_GET['action'];

if ($action== 'bloglist') {
include "bloglist.html";
}

}else{

include 'blogindex.html';
}
