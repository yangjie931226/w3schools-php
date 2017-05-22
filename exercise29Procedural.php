<?php
/**
 *
 * 功能： mysql数据库插入数据到MyGuests表,然后获取插入的id
 *
 * @file        PHP Create MySQL Tables
 * @author      yangjie <yangjie@163.com>
 * @version     v 1.0 2017/05/22 13:45:56 yangjie
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>