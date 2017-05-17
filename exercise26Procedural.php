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
//Example (MySQLi Procedural)
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//Close the Connection
mysqli_close($conn);
?>