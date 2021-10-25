<?php
    include 'connection.php';

    $nis = $_GET['nis'];

	$sql = "DELETE FROM buku WHERE nis='$nis'";
    $result = mysqli_query($conn, $sql);
?>