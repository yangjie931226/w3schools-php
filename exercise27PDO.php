<?php
/**
 *
 * 功能： mysql数据库创建表
 *
 * @file        PHP Create MySQL Tables
 * @author      yangjie <yangjie@163.com>
 * @version     v 1.0 2017/05/18 13:30:46 yangjie
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    $conn->exec($sql);
    echo "Table MyGuests created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>