<?php  

include 'connection.php';

$sql = "SELECT * FROM buku ORDER BY nis DESC";
$result = mysqli_query($conn, $sql);