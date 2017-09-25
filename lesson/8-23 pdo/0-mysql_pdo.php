<?php
/**
 * @Author: anchen
 * @Date:   2017-08-23 09:32:53
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-23 10:50:50
 */
//对象
//使用 new关键字声明对象



// 类比
// js 中
// . 查找属性
// . 调用对象的方法

// php中
// -> 查找属性
// -> 调用对象的方法

//PDO的使用
//配置信息


$host = 'localhost';
$user ='root';
$pwd = '123456';
$db = 'mu';


try {
    //数据库连接
    $pdo = new  PDO("mysql:host=$host;dbname=$db", $user, $pwd);
    //查询
    // $sql = "SELECT * FROM em";

    // foreach ($pdo->query($sql) as $row) {
    //     print_r($row);
    // }

   //修改
   // exec  执行一条sql语句
   // query 也是执行一条sql语句--查询使用
   // $sql = "UPDATE em SET e_salary=8000 WHERE e_no=1004";
   // $rs = $pdo->query($sql);
   // $rs = $pdo->exec($sql);
   // var_dump($rs);

  //插入
   // $sql = "INSERT INTO dept VALUES (80,'houqin','zhengzhou')";
   // $rs = $pdo->exec($sql);
   // var_dump($rs);

   //删除


    // 关闭
    $pdo = null;
} catch (Exception $e) {
    // Exception 异常
    echo $e -> getMessage();

}

