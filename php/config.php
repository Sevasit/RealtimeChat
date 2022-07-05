<?php 
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if(!$conn){
        echo "Database was connected" . mysqli_connect_error();
    }
?>