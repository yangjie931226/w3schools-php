<?php
/**
 * 功能：  将多个数据插入到MySQL数据库中
 * @author      杨杰 <yangjie@163.com>
 * @version     v 1.0
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')");
    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>