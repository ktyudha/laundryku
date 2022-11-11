<?php 
include ('../../assets/db/db-conn.php');
$carouselId = 0;
$carouselStatus = 0;

if(isset($_GET['carouselId'])) {
    $carouselId = $_GET['carouselId'];
}

if(isset($_GET['carouselStatus'])) {
    $carouselStatus = $_GET['carouselStatus'];
}

$sql = "UPDATE carosel SET status='$carouselStatus' WHERE id='$carouselId'";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "failed";
}

?>