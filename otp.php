<?php
session_start();


  if(isset($_POST['send_otp'])){

    $username = "anjaliyel02@gmail.com";
    $hash = "bec1779aa041848876840a2f31ce69b35a22098ff57c38d407b64d1390bc19c5";
    $test = "0";
    $sender = "600010"; 
    $numbers = $mobile; 
    $message = "Hi there, thank you for sending your first test message from Textlocal. Get 20% off today with our code: ".$otp.".";

    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    curl_close($ch);
 
  }

  if(isset($_POST['register'])){
    if($in_otp == $_COOKIE['otp']){
      $insert_query = mysqli_query($conn, "INSERT INTO `registration` (`unique_id`, `mobile`) VALUES ('{$ran_id}', '{$mobile}')");
if($insert_query){
  echo "Thank You! Your data inserted successfully!";
  $select_sql2 = mysqli_query($conn, "SELECT * FROM `registration` WHERE `mobile` = '{$mobile}'");
  if(mysqli_num_rows($select_sql2) > 0){
      $result = mysqli_fetch_assoc($select_sql2);
      $_SESSION['id'] = $result['id'];
  header("location: register.html");
}
else{
echo "Failed to insert Data!"; 
sleep(5);
    }
  }
}else{
    echo'<script type="text/JavaScript"> 
    alert("Kindly enter valid OTP!");
    </script>';
  }
}
  
?>