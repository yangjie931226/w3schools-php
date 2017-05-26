<?php
/**
 * 功能：        PHP Delete Data From MySQL
 * @author      杨杰 <yangjie@163.com>
 * @version     1.0
 * @copyright (c) 2014-2017 海量云图（北京）数据技术有限公司
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM MyGuests WHERE id=3";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();