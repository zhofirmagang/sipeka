<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    mysqli_select_db($conn,"sipeka");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>