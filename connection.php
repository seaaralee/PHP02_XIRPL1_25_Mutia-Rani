<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'datasiswa';

    $conn = new mysqli($host, $user, $pass, $db);

    if(!$conn){
        echo 'Connection not success!';
        exit();
    }
?>