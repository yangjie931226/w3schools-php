<?php
/**
 * @author 杨杰 <yangjie@163.com>
 * @version 1.0
 * @copyright 2014-2017 海量云图（北京）数据技术有限公司
 */

/**
 * MySQL database account information
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

/**
 * Create connection
 */
$conn = mysqli_connect($servername, $username, $password, $dbname);

/**
 * Check connection
 */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

/**
 * Fetch all
 */
mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "Failed to connect to MySQL: " . mysqli_connect_error();
/**
 * Free result set
 */
mysqli_free_result($result);
/**
 * Close connection
 */
mysqli_close($conn);
