<?php
/**
 * @author 杨杰 <yangjie@163.com>
 * @version 1.0
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Assume we wish to select all records from 1 - 3<br>";
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests LIMIT 3");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($stmt->fetchAll() as $row) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
    echo "Assume we wish to select all records from 4 - 8<br>";
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests LIMIT 5 OFFSET 3");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($stmt->fetchAll() as $row) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;