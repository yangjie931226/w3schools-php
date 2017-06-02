<?php
/**
 * @author 杨杰 <yangjie@163.com>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */
//Mysql数据库账户信息
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
//建立连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
//检查是否连接成功
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//关闭自动提交事务
mysqli_autocommit($con, FALSE);
//Perform queries and print out affected rows
mysqli_query($conn, "INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Peter','Griffin',35)");
mysqli_query($con, "INSERT INTO Persons (FirstName,LastName,Age)
VALUES ('Glenn','Quagmire',33)");
//提交事务
mysqli_commit($con);
//关闭数据库连接
mysqli_close($conn);