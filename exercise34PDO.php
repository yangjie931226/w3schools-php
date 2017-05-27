<?php
/**
 * 功能：        PHP Update Data in MySQL
 * @author      杨杰 <yangjie@163.com>
 * @version     1.0
 * @copyright  (c) 2014-2017 海量云图（北京）数据技术有限公司
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;