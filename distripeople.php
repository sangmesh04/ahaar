<?php
    session_start();
    include_once "connect.php";
    $sql = "SELECT * FROM `registration` WHERE `job`= 'distributor' ORDER BY `unique_id` DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No one is registered as distributor :(";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "distridata.php";
    }
    echo $output;
?>