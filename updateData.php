<?php
    include 'connection.php';

    $name_student = $_POST["name_student"];
    $nis = $_POST["nis"];
    $id_student = $_POST["id_student"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $id_major = $_POST["id_major"];

    $sql = "UPDATE buku
    SET name_student='$name_student', nis='$nis', id_student='$id_student', gender='$gender', address='$address', id_major='$id_major'
    WHERE nis=$nis ";
   $result = mysqli_query($conn, $sql);
?>
