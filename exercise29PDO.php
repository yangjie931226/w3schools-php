<?php
/**
 *
 * 功能： mysql数据库插入数据到MyGuests表,然后获取插入的id
 *
 * @file        PHP Create MySQL Tables
 * @author      yangjie <yangjie@163.com>
 * @version     v 1.0 2017/05/22 13:40:12 yangjie
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>