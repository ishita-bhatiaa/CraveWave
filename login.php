<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
require_once "config.php";
 
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password FROM login_data WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: practice.html");
                        } else{
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CraveWave</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" herf="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <style>
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div style="width: 100%; height: 550px;">
        <div class="div1">
            <div class="div2">
                <h1 class="head1"><i>Welcome to</i></h1>
                <h1 class="head1"><i>CraveWave</i></h1>
            </div>
            <div class="div3">
                <div class="wrapper">
                    <?php 
                    if(!empty($login_err)){
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }        
                    ?>

                    <form action="practice.html" method="post">
                        <div class="form-group" style="font-size:20px;">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>    <br><br>
                        <div class="form-group" style="font-size:20px;">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div><br><br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                        <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                    </form>
                </div>
            </div>
        </div>

        <div class="div4" style="width:50%; height: 550px; float:left;">  
            <img class="img1" src="img.png" alt="img...">  
        </div>  
    </div>
    <div class="div5">
        <div class="div6" style="float: left;">
            <img class="img2" style="height: 220px;width: 30%; ;" src="img_min.jpg" alt="img..">
            <h1 class="h1">NO MINIMUM ORDER</h1>
            <p class="h1" >Order in for yourself or for the group,<br> with no restrictions on order value.</p>
        </div>
        <div class="div6" style="float: left ;">
            <h1 class="h1">DINE IN</h1>
            <p class="h1">Dine in is available,<br>come in a group and enjoy your food.</p>
            <img class="img2" style="height: 220px;width: 30%;padding-top: 47px; " src="img_take.jpg" alt="img..">
        </div>
        <div class="div6" style="float: left;">
            <img class="img2" style="height: 220px;width: 30%; ;" src="img_home.png" alt="img..">
            <h1 class="h1">EAT AT YOUR PLACE</h1>
            <p class="h1">Order in and pick up order,<br>at the location of resturant.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Web Programming Project by Ishita and Mishtee</p>
    </footer>
</body>
</html>