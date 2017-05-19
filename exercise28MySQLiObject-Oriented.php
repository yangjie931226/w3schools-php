<?php
/**
 *
 * 功能： mysql数据库插入数据到MyGuests表
 *
 * @file        PHP Create MySQL Tables
 * @author      yangjie <yangjie@163.com>
 * @version     v 1.0 2017/05/19 13:26:12 yangjie
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>