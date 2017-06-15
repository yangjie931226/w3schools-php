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
     * Get field info for 1st column ("Lastname")
     */
    mysqli_field_seek($result, 0);
    $fieldinfo = mysqli_fetch_field($result);
    printf("Name: %s\n", $fieldinfo->name);
    printf("Table: %s\n", $fieldinfo->table);
    printf("max. Len: %d\n", $fieldinfo->max_length);

    /**
     * Free result set
     */
    mysqli_free_result($result);
}

/**
 * Close connection
 */
mysqli_close($conn);
