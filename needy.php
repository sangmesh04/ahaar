
<?php
session_start();
include_once "connect.php";
if(!isset($_SESSION['unique_id'])){
  header("location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place where you can get help!</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        header{
            line-height: 80px;
            display: flex;
            justify-content: space-evenly;
            background-color: rgb(248, 248, 248);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        header button{
            height: 60px;
            padding: 10px;
            background-color: rgb(255, 53, 53);
            border: none;
            outline: none;
            font-size: 30px;
            color: white;
            width: 150px;
        }
        header button:hover{
            background-color: rgb(255, 71, 71);
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        header svg:hover{
            cursor: pointer;
        }
        .main{
            text-align: center;
        }
        .main h1{
            color: rgb(255, 24, 24);
            font-size: 45px;
            padding: 30px;
        }
        .profile{
            text-align: center;
            margin-left: 30%;
            margin-right: 30%;
            margin-top: 60px;
            font-size: 20px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .profile p{
            color: rgb(255, 35, 35);
        }
        @media screen and (max-width:550px) {
            header h1{
                font-size: 20px;
            }
            header button{
                font-size: 20px;
                width: 100px;
            }
            .profile{
                margin-left: 5%;
                margin-right: 5%;
                margin-bottom: 10%;
            }
        }
        html {
    --scrollbarBG: #ffffff00;
    --thumbBG: #f52525;
  }
  body::-webkit-scrollbar,.illustration .concepts::-webkit-scrollbar {
    width: 5px;
  }
  body,.illustration .concepts {
    scrollbar-width: thin;
    scrollbar-color: var(--thumbBG) var(--scrollbarBG);
  }
  body::-webkit-scrollbar-track , .illustration .concepts::-webkit-scrollbar-track{
    background: var(--scrollbarBG);
  }
  body::-webkit-scrollbar-thumb,.illustration .concepts::-webkit-scrollbar-thumb {
    background-color: var(--thumbBG) ;
    border-radius: 6px;
    border: 3px solid var(--scrollbarBG);
  }
  ::selection{
      color: rgb(255, 255, 255);
      background-color: rgb(245, 58, 58);
  }
  .number{
    text-align: center;
    padding: 30px;
    margin-top: 20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
}
.number b{
    color: rgb(255, 24, 24);
}
    </style>
</head>
<body>

<?php 
    $sql = mysqli_query($conn, "SELECT * FROM `registration` WHERE `unique_id` = '{$_SESSION['unique_id']}'");
    if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
    }
    $num_donor = mysqli_query($conn, "SELECT COUNT(*) AS '' FROM `registration` WHERE `job` = 'donor'");
    $row1 = mysqli_fetch_assoc($num_donor);
?>
    <header>
        <div class="back">
           <a href="logout.php?logout_id=<?php echo $row['unique_id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>
        </div>
        <div class="title">
           <h1> Help Center  </h1>
        </div>
        <div class="logout">
            <a href="logout.php?logout_id=<?php echo $row['unique_id']; ?>"><button>Logout</button></a>
        </div>
    </header>
    <div class="main">
        <h1>
            WE KNOW HOW ANYONE FEEL HUNGRY..!
        </h1>
        <h3>We assure you that you can't be hungry today!</h3>
        <h3>Beasuse, some of kind people are with you.</h3>
    </div>
    <div class="number">
        <h1>Total number of donar people in your area <b><?php echo $row1['']; ?></b></h1>
    </div>

    <div class="profile">

   <p>Name: </p><?php echo $row['name']; ?><br><br>
   <p>Mobile No: </p><?php echo $row['mobile']; ?><br><br>
   <p>Pincode: </p><?php echo $row['need_loc']; ?><br><br>
   <p>Address: </p><?php echo $row['need_addre']; ?><br><br>

    </div>
</body>
</html>