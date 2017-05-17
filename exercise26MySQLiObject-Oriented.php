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
//Example (MySQLi Object-Oriented)
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//Close the Connection
$conn->close();
?>