<?php
/**
 *
 * 功能： mysql数据库创建表
 *
 * @file        PHP Create MySQL Tables
 * @author      yangjie <yangjie@163.com>
 * @version     v 1.0 2017/05/18 13:48:46 yangjie
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>