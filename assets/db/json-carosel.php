<?php
include "db-conn.php";

header('Content-Type: application/json');

$query = "SELECT * FROM carosel ORDER BY id DESC";
$sql = mysqli_query($conn, $query);

if ($sql) {
    
    $result = array();
    while ($row = mysqli_fetch_array($sql)) {
       array_push($result, array (
            'id' => $row['id'],
            'tagline' => $row['tagline'],
            'deskripsi' => $row['deskripsi'],
            'image' => $row['image_url']
       ));
    }
     echo json_encode( array( 'carosel' => $result ));
}