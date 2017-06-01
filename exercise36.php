<?php
/**
 * @author 杨杰 <yangjie@163.com>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */
//Mysql database account information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Perform queries and print out affected rows
mysqli_query($conn, "SELECT * FROM MyGuests");
echo "Affected rows: " . mysqli_affected_rows($conn);
mysqli_query($conn, "DELETE FROM MyGuests WHERE id>5");
echo "Affected rows: " . mysqli_affected_rows($conn);
//Close connection
mysqli_close($conn);