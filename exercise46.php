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

/**
 * Get connection stats
 */
print_r(mysqli_get_connection_stats($conn));

/**
 * Close connection
 */
mysqli_close($conn);
