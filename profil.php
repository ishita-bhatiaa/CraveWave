<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <style>
        label{color:white}
        #pass{
        padding-right:20px;
        }
        p{
        font-size:20px;
        
        }
        p.one{
        font-size:25px;
        }
        div.one{
        background-color:black}
        div.a{
        background-color:#e1e8e3; height:150px;
        }
        div.b{
        background-color:#e1e8e3; height:150px;
        }
        div.c{
        background-color:#ced9d1; height:150px;
        }
        
        
        h1{color:white;
        text-shadow:black 2px 2px}
        input[type=text]{color:grey; background-color:#ffeab5; width:200px; height:30px; border-radius:20px; border:3px black groove}
        input[type=text]:hover{background-color:black}
        input[type=email]{color:grey; background-color:#ffeab5; width:200px; height:30px; border-radius:20px; border:3px black groove}
        input[type=email]:hover{background-color:black}
        input[type=password]{color:grey; background-color:#ffeab5; width:200px; height:30px; border-radius:20px; border:3px black groove}
        input[type=password]:hover{background-color:black} <br>
    </style>
    <title>Profile</title>
</head>
    <body font-size:50px; align="center" style="color:white;">
        <div class="one"> <h1>PROFILE</h1>
            <br>
            <p>  <label>Name:</label> <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> <input type="button" name ="" value="edit"></p>
            <p> <label>Email:</label> <input type="email" placeholder="enter your email"> <input type="button" name ="" value="edit"></p>
        </div>
            
        <div class="a">
            <a href="transaction.html">
            <br><br>
            <p class="one">Transactions</p><br><br>
            </a>  
        </div> 
        <div class="c"><a href="orderhistory.html">
            <br><br>
            <p  class="one"><a href="orderhistory.html">Order History<br><br></p></a>
        </div>
        <div class="b"><a href="trackorder.html">
            <br><br>
            <p  class="one">Track Order</a></p>
            <br><br></a>
        </div>
        <div class="c">
            <br><br><p  class="one"><input type="button" name ="" value="logout"></p>
        </div>
    </body>
</html>