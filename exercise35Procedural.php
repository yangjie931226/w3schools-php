<?php
/**
 * @author 杨杰 <yangjie@163.com>
 * @version 1.0
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Assume we wish to select all records from 1 - 3<br>";
$sql = "SELECT id, firstname, lastname FROM MyGuests LIMIT 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "Assume we wish to select all records from 4 - 8<br>";
$sql = "SELECT id, firstname, lastname FROM MyGuests LIMIT 5 OFFSET 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);