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
    <title>Deliver food to needy</title>
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
    
        #t01 tr:nth-child(even) {
  background-color: rgb(255, 214, 214);
}
#t01{
    width: 70%;
    margin-top: 60px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    margin-left: 15%;
}
#t01 tr:nth-child(odd) {
  background-color: #fff;
  
}
#t01 th {
  color: rgb(255, 58, 58);
  background-color: rgb(255, 255, 255);
  
}
#t01 td {
 border: 1px solid rgb(255, 46, 46);
 padding: 4px;
 margin: -3px;
}
@media screen and (max-width:550px) {
    header{
        display: block;
    }
    header h1{
        padding: 0px 30px;
        margin-top: -30px;
    }
    header button{
        margin-left: 30px;
    }
    #t01{
        width: 100%;
        margin-left: 0px;
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
.greet{
    text-align:center;
    font-size:30px;
    color:red;
    margin-top:30px;
}
.greet b{
    color:black;
}
    </style>
</head>
<body>
<?php 
    $sql = mysqli_query($conn, "SELECT * FROM `registration` WHERE `unique_id` = '{$_SESSION['unique_id']}'");
    if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
    }
    $num_need = mysqli_query($conn, "SELECT COUNT(*) AS '' FROM `registration` WHERE `job` = 'need'");
    $row1 = mysqli_fetch_assoc($num_need);
    $num_donor = mysqli_query($conn, "SELECT COUNT(*) AS '' FROM `registration` WHERE `job` = 'donor'");
    $row2 = mysqli_fetch_assoc($num_donor);
?>
    <header>
        <div class="back">
           <a href="logout.php?logout_id=<?php echo $row['unique_id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>
        </div>
        <div class="title">
           <h1> Distribution Center  </h1>
        </div>
        <div class="logout">
            <a href="logout.php?logout_id=<?php echo $row['unique_id']; ?>"><button>Logout</button></a>
        </div>
    </header>
    <div class="greet">
        Hello! <b> <?php echo $row['name']; ?> </b>
    </div>
    <div class="main">
        <h1>
            FEEL THE JOY BY DELIVERING FOOD TO NEEDY..!
        </h1>
        <h3>We assure you that you are motivating hundreds of people!</h3>
        <h3>Beasuse, are one of kind people with us.</h3>
    </div>
    <div class="number">
    <h2>Total number of donor people in your area <b><?php echo $row2['']; ?></b></h2><br>
    <h2>Total number of needy people in your area <b><?php echo $row1['']; ?></b></h2>
    </div>
    <div class="people">
        <table id="t01">
            <tr>
                <th colspan="6" style="font-size: 30px;background-color: rgb(255, 255, 255);color: rgb(255, 37, 37);">Donor People in your area</th>
            </tr>
          
            <tr>
                
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Pin Code</th>
                <th>Address</th>
            </tr>
            <tbody id="donarsList">
               
 
            </tbody>
        </table>
        <table id="t01">
            <tr>
                <th colspan="6" style="font-size: 30px;background-color: rgb(255, 255, 255);color: rgb(255, 37, 37);">Needy People in your area</th>
            </tr>
          
            <tr>
                
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Pin Code</th>
                <th>Address</th>
            </tr>
            <tbody id="needyList">
            
            </tbody>
        </table>
    </div>

    <script>
        donarsList = document.getElementById("donarsList");
                setInterval(() =>{
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "donorpeople.php", true);
        xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          donarsList.innerHTML = data;
          
        }
    }
  }
  xhr.send();
}, 500);

needyList = document.getElementById("needyList");
                setInterval(() =>{
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "needypeople.php", true);
        xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          needyList.innerHTML = data;
          
        }
    }
  }
  xhr.send();
}, 500);

    </script>
</body>
</html>