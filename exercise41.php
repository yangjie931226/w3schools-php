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
 * Perform queries
 */
$sql1 = "CREATE TABLE testPersons (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
mysqli_query($conn, $sql1);
$sql2 = "INSERT INTO testPersons (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
mysqli_query($conn, $sql2);

/**
 * Print info about most recently executed query
 */
echo mysqli_info($conn);

/**
 * Close connection
 */
mysqli_close($conn);
