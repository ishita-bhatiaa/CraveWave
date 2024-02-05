<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>FODEL</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
</head>
<body>
<div style="height: 80px;">
        <nav>
            <div style="width: 10%;float: left;"><p></p></div>
            <div style="width: 30%;float: left;">
                <table style="margin: 0;">
                    <tr>
                        <td><img style="height: 30px;width: 30px;" src="dragon.png" alt="logo"></td>
                        <td><h1>FODEL</h1></td>
                    </tr>
                </table>
            </div>
            <div style="width: 15%;float: left;padding-top: 25px;">
                <label for="browser">Search:</label>
                <input list="browsers" name="browser" id="browser">

                <datalist id="browsers">
                <option value="Burger King">
                <option value="wow chinese">
                <option value="momos">
                <option value="Pizza Hut">
                <option value="Sushi Piece">
                </datalist>
            </div>
            <div class="nav_div">
                <a href="">💲OFFER</a>
                <a href="">help</a>
                <a href="">cart</a>
                <a href="profil.php" style="margin: 0; word-spacing: 0;"><img style="height: 15px;width: 15px;margin: 0;" src="profile.png" alt=""> <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a>
            </div>
        </nav>
    </div>
    <div style="width: 100%;height: 300px;background-color: black;word-spacing: 70px;">
        <div style="padding-left: 200px;">
            <img class="bar_img" src="DIS_PIZ.jpg" alt="img...">
            <img class="bar_img" src="treat.jpg" alt="img...">
            <img class="bar_img" src="best.jpg" alt="img...">
            <img class="bar_img" src="street.jpg" alt="img...">
        </div>
    </div>
    <div>
        <div>
            <div style="padding-left: 100px;">
                <div class="d1">
                    <a href="burger.html"><img class="n_img" src="burger.jpg" alt="img..."></a>
                    <h3 class="h4">Burger King</h3>
                </div>
                <div class="d1">
                    <img class="n_img" src="chinese.jpg" alt="img...">
                    <h3 class="h4">wow chinese</h3>
                </div>
                <div class="d1">
                    <a href="momo.html"><img class="n_img" src="momos.jpg" alt="img..."></a>
                    <h3 class="h4">momos</h3>
                </div>
                <div class="d1">
                    <a href="pizza.html"><img class="n_img" src="pizza.jpg" alt="img..."></a>
                    <h3 class="h4">Pizza Hut</h3>
                </div>                
            </div>
        </div>
    </div>
    <div>
        <div>
            <div style="padding-left: 100px;">
                <div class="d1">
                <a href="taco.html"><img class="n_img" src="taco4.jpeg" alt="img..."></a>
                    <h3 class="h4">taco Piece</h3>
                </div>
                <div class="d1">
                <a href="frankie.html"><img class="n_img" src="f6.jpeg" alt="img..."></a>
                    <h3 class="h4">frankie</h3>
                </div>
                <div class="d1">
                <a href="ramen.html"><img class="n_img" src="leb.jpg" alt="img..."></a>
                    <h3 class="h4">ramen</h3>
                </div>
                <div class="d1">
                <a href="fries.html"><img class="n_img" src="f4.jpeg" alt="img..."></a>
                    <h3 class="h4">fries Hut</h3>
                </div>                
            </div>
        </div>
    </div> 
    <div>
        <div>
            <div style="padding-left: 100px;">
                <div class="d1">
                    <img class="n_img" src="s1.jpeg" alt="img...">
                    <h3 class="h4">south dosa</h3>
                </div>
                <div class="d1">
                    <img class="n_img" src="r5.jpeg" alt="img...">
                    <h3 class="h4">wow chinese</h3>
                </div>
                <div class="d1">
                    <img class="n_img" src="mo/sid.jpg" alt="img...">
                    <h3 class="h4">momos</h3>
                </div>
                <div class="d1">
                    <img class="n_img" src="pizza/pizza-814044__340.jpg" alt="img...">
                    <h3 class="h4">Pizza</h3>
                </div>               
            </div>
        </div>
    </div> 
    <div>
        <div>
            <div style="padding-left: 100px;">
                <div class="d1">
                    <img class="n_img" src="burger.jpg" alt="img...">
                    <h3 class="h4">Burger King</h3>
                </div>
                <div class="d1">
                    <img class="n_img" src="chinese.jpg" alt="img...">
                    <h3 class="h4">wow chinese</h3>
                </div>
                <div class="d1">
                    <img class="n_img" src="sushi.jpg" alt="img...">
                    <h3 class="h4">sushi</h3>
                </div>
                <div class="d1">
                    <img class="n_img" src="pizza.jpg" alt="img...">
                    <h3 class="h4">Pizza Hut</h3>
                </div>                
            </div>
        </div>
    </div>
</body>
</html>