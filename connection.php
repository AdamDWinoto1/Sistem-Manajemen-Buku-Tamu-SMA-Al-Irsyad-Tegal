<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "e-book_tamu";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    
    if(!$conn){
        die("Error :" . mysqli_connect_error());
    }