<?php
/**
 *
 * 功能： mysql数据库插入数据到MyGuests表,然后获取插入的id
 *
 * @file        PHP Create MySQL Tables
 * @author      yangjie <yangjie@163.com>
 * @version     v 1.0 2017/05/19 13:35:09 yangjie
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
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>