<?php

include 'config.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password === $cpassword){
        $sql = "INSERT INTO users (username, email,password)
            VALUES('$username', $email, $password)";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "<script>alert('Woops! something wrong')</script>";
         }
    } else {
        echo "<script>alert('Password not Matched')</script>";
           }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Custom styles-path -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome kit script -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Google Fonts Open Sans-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/html-5.png">
</head>

<body>
    <img class="wave" src="img/wave.svg">
    <div class="container">
        <div class="img">
            <img src="img/login-mobile.svg">
        </div>
        <div class="login-container">
            <form action="" method="POST">
                <h2>Sign-up</h2>
                <!--<p>Entrar com:</p> -->
                <div class="social">
                    <div class="social-icons facebook">
                        <!-- <a href="#"><img src="img/facebook.png">Entrar com o Facebook</a> -->
                    </div>
                    <div class="social-icons google">
                        <!--    <a href="#"><img src="img/google.png">Entrar com Google</a> -->
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="username" value="<?php echo $username; "required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>E-mail</h5>
                        <input class="input" type="email" name="email" value="<?php echo $email;" required >
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-key"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" name="password" value="<?php echo $password;" required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-key"></i>
                    </div>
                    <div>
                        <h5>confirm password</h5>
                        <input class="input" type="password" name="cpassword" value="<?php echo $cpassword;" required>
                    </div>
                </div>
                <div class="terms">
                    <input type="checkbox">
                    <label>I agree with the terms of use</label>
                </div>
                <div class="btn-container">
                    <button name="submit" class="submit-btn" > Register </button> 
                </div>
                <div class="account">
                    <p>Already have an account? </p>
                    <a href="index.html">Login</a>
                </div>

            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>