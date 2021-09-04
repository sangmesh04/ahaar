<?php

session_start();
    include_once "connect.php";
    $mobile = mysqli_real_escape_string($conn, $_POST['userid']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);


    $sql = mysqli_query($conn, "SELECT * FROM `registration` WHERE `mobile` = '{$mobile}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($pass);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $job = $row['job'];
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success";
                 if($job == 'donor'){
                    header("location: donor.php");
                 }elseif($job == 'distributor'){
                    header("location: distributor.php");
                 }elseif($job == 'need'){
                    header("location: needy.php");
                 }else {
                     echo "Something went wrong!";
                 }
            }
        }else {
            echo '<script>
            alert("Recheck mobile number or password and try again!");
            alert("Login failed!");
          </script>';
          header( "refresh:1;url=index.html" );
        }

?>