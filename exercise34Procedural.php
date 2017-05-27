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
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);