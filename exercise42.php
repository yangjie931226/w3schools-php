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
$sql = "SELECT id, firstname, lastname FROM MyGuests";
if ($result = mysqli_query($conn, $sql)) {

    /**
     * Seek to row number 2
     */
    mysqli_data_seek($result, 1);

    /**
     * Fetch row
     */
    $row = mysqli_fetch_row($result);
    printf("Lastname: %s Age: %s\n", $row[0], $row[1]);

    /**
     * Free result set
     */
    mysqli_free_result($result);
}

/**
 * Close connection
 */
mysqli_close($conn);
