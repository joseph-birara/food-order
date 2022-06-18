<?php include('config/constants.php'); 
session_start();
if(isset($_SESSION['no-login-message-front'])){
    echo $_SESSION['no-login-message-front'];
    unset($_SESSION['no-login-message-front']);
}
if(isset($_SESSION['create'])){
    echo $_SESSION['create'];
    unset($_SESSION['create']);
}
if(isset($_SESSION['notcreate'])){
    echo $_SESSION['notcreate'];
    unset($_SESSION['notcreate']);
}

?>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login_and_register_form_style.css">
</head>

<body>
    <div id='login-form' class='login-page'>
        <div class="form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                <button type='button' onclick='register()' class='toggle-btn'>Register</button>
            </div>
            <form id='login' class='input-group-login' method="post" action="loginFront.php">
                <input type="text" name="name" no-login-message-fronttype='text' class='input-field'
                    placeholder='user name' required>
                <input name="pass" type='password' class='input-field' placeholder='Enter Password' required>
                <input type='checkbox' class='check-box'><span>Remember Password</span>
                <button type='submit' class='submit-btn'>Log in</button>
            </form>
            <form id='register' class='input-group-register' action=" create.php" method="post">
                <input type='text' class='input-field' placeholder='First Name' name="username" equired>
                <input type='text' class='input-field' placeholder='Last Name ' name="lastname" required>
                <input type='email' class='input-field' placeholder='Email Id' name="email" required>
                <input type='password' class='input-field' placeholder='Enter Password' required name="password">
                <input type='password' class='input-field' placeholder='Confirm Password' required>
                <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                <button type='submit' class='submit-btn'>Register</button>
            </form>
        </div>
    </div>
    <script>
    var x = document.getElementById('login');
    var y = document.getElementById('register');
    var z = document.getElementById('btn');

    function register() {
        x.style.left = '-400px';
        y.style.left = '50px';
        z.style.left = '110px';
    }

    function login() {
        x.style.left = '50px';
        y.style.left = '450px';
        z.style.left = '0px';
    }
    </script>
    <script>
    var modal = document.getElementById('login-form');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>