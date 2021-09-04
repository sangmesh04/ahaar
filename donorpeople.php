<?php
    session_start();
    include_once "connect.php";
    $donorjob = 'donor';
    $sql = "SELECT * FROM `registration` WHERE `job` = '{$donorjob}' ORDER BY `unique_id` DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 2){
        $output .= "No one is registered as donor :(";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "donordata.php";
    }
    echo $output;
?>