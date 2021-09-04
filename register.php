<?php

session_start();
        include_once "connect.php";
        $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
        $time = time();
        $ran_id = rand($time, 100000000);
        $name = mysqli_real_escape_string($conn, $_POST['userid']);
        $job = mysqli_real_escape_string($conn, $_POST['job']);
        $source = mysqli_real_escape_string($conn, $_POST['source']);
        $sourcename = mysqli_real_escape_string($conn, $_POST['sourcename']);
        $sourceaddre = mysqli_real_escape_string($conn, $_POST['sourceaddre']);
        $distriloc = mysqli_real_escape_string($conn, $_POST['distriloc']);
        $donloc = mysqli_real_escape_string($conn, $_POST['donloc']);
        $needaddre = mysqli_real_escape_string($conn, $_POST['needaddre']);
        $needloc = mysqli_real_escape_string($conn, $_POST['needloc']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $encrpass = md5($pass);
        $sql = mysqli_query($conn, "INSERT INTO `registration` (`unique_id`, `name`, `mobile`, `job`, `source`, `source_name`, `source_addre`, `need_addre`, `need_loc`, `don_loc`, `distri_loc`, `password`) 
        VALUES ('{$ran_id}','{$name}','{$mobile}','{$job}','{$source}','{$sourcename}','{$sourceaddre}','{$needaddre}','{$needloc}','{$donloc}','{$distriloc}','{$encrpass}')") ;
       
       if($sql){
        echo "Thank You! Your data inserted successfully!";
        $select_sql2 = mysqli_query($conn, "SELECT * FROM `registration` WHERE `mobile` = '{$mobile}'");
        if(mysqli_num_rows($select_sql2) > 0){
            $result = mysqli_fetch_assoc($select_sql2);
            $_SESSION['id'] = $result['id'];
        header("location: register.html");
       }
    }else {
   // echo "The mobile number you have entered is already registered with us..!";
   echo '<script>
   alert("The mobile number you have entered is already registered with us..!");
   alert("Registration failed!");
 </script>';
 header( "refresh:1;url=index.html" );
    }
?>