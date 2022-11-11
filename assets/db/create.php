<?php
include "db-conn.php";

$query = "INSERT INTO users VALUES('', '$username', '$nama', '$passwordmd5','$level')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    echo json_encode( array ('message' => 'Success'));
} else {
    echo json_encode( array ('message' => 'Error!'));
}