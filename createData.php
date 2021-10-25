<?php
    session_start();
    if (isset($_POST["nis"])){
        include 'connection.php';

        $name_student = $_POST["name_student"];
        $nis = $_POST["nis"];
        $id_student = $_POST["id_student"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $id_major = $_POST["id_major"];

        $message = "";

        if ($name_student==""){
            $message = "Student Name must be filled to Add Data";
        } else if ($nis=="") {
            $message = "NIS must be filled to Add Data";
        } else if ($id_student=="") {
            $message = "Student ID must be filled to Add Data";
        } else if ($gender=="") {
            $message = "Gender must be filled to Add Data";
        } else if ($address=="") {
            $message = "Address must be filled to Add Data";
        } else if ($id_major=="") {
            $message = "Major ID must be filled to Add Data";
        } else {

            $conn->query("INSERT INTO buku(name_student, nis, id_student, gender, address, id_major) VALUES('$name_student', '$nis', '$id_student', '$gender', '$address', '$id_major')");

            $message = "Succesfully Added New Student Data!";

        }

        $_SESSION["message"] = $message;
    }

    header("location:index.php");
    exit();
?>
