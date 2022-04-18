<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <title>Login</title>

</head>
<body>
<?php
require_once ('header.php');
?>


<div class="wrapper">
    <div class="title-text">
        <div class="title login">
            Login Form</div>
        <div class="title signup">
            Signup Form</div>
    </div>
    <div class="form-container">
        <div class="slide-controls">

            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab">
            </div>
        </div>
        <div class="form-inner">
            <form action="Login_page.php" class="login" method="post">
                <?php echo display_error(); ?>
                <div class="field">
                    <input type="text" placeholder="Email Address" required name="username">
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" required name="password">
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password?</a></div>
                <div class="field btn">
                    <div class="btn-layer">
                    </div>
                    <input type="submit" value="Login"  name="login_btn">
                </div>
                <div class="signup-link">
                    Not a member? <a href="">Signup now</a></div>
            </form>
            <form action="Login_page.php" class="signup" method="post">
                <?php echo display_error(); ?>
                <div class="field">
                    <input type="text" placeholder="Email Address" required name="email">
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" required name="password_1">
                </div>
                <div class="field">
                    <input type="password" placeholder="Confirm password" required name="password_2">
                </div>
                <div class="field btn">
                    <div class="btn-layer">
                    </div>
                    <input type="submit" value="Signup" name="register_btn">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
    });
</script>



</body>
</html>