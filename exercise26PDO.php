<?php
/**
 *
 * @version 0.1.0
 * @author yangjie
 * @date 5/16/2017
 */
$servername = "localhost";
$username = "root";
$password = "";

try {
    //Open a Connection to MySQL
    //Example (PDO)
    $conn = new PDO("mysql:host=$servername;dbname=user", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    //Close the Connection
    $conn = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>