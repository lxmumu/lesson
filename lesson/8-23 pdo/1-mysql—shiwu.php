<?php
/**
 * @Author: anchen
 * @Date:   2017-08-23 10:19:27
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-08-23 10:39:35
 */
//事物
//事物的四大特性
//1 原子性 ：确保工作单元内所有的操作都能完成，否则事物终止，并滚到原始状态
//2 一致性：
//确定数据库正确的改变状态后，成功提交事务
//3 隔离性：
//事物操作是独立的
//4 持久性：
//确保提交的事务的结果和效果，在系统出故障的时候依然存在
//
//
// sql-命令
// begin - 开启事务
// commit 提交事务
// rollback 回滚

// pdo：
// begintransaction();
// commit();
// rollback();
//

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mu";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 开始事务
    $conn->beginTransaction();
    // SQL 语句
    $conn->exec("INSERT INTO dept)
    VALUES (90, 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO dept)
    VALUES (65, 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO dept)
    VALUES (78, 'Dooley', 'julie@example.com')");

    // 提交事务
    $conn->commit();
    echo "新记录插入成功";
}
catch(PDOException $e)
{
    // 如果执行失败回滚
    $conn->rollback();
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>