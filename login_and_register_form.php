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
    <style>

    </style>
    <script defer src="css/formValidation.js">
    </script>
</head>

<body>

    <div id="error" cass="error">

        <h2>hello</h2>
    </div>
    <div id='login-form' class='login-page'>
        <div class=" form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                <button type='button' onclick='register()' class='toggle-btn'>Register</button>
            </div>
            <form id='login' class='input-group-login' method="post" action="loginFront.php">
                Name:
                <input type="text" name="name" no-login-message-fronttype='text' class='input-field'
                    placeholder='user name' required>
                password:
                <input name="pass" type='password' class='input-field' placeholder='Enter Password' required>
                <input type='checkbox' class='check-box'><span>Remember Password</span>
                <button type='submit' class='submit-btn'>Log in</button>
            </form>
            <form onsubmit="return(validate());" id='register' class='input-group-register' action=" create.php"
                method="post">
                Name:
                <input id="name" type='text' class='input-field' placeholder='First Name' name="username" equired>
                Last name:
                <input id="lastname" type='text' class='input-field' placeholder='Last Name ' name="lastname" required>
                Email:
                <input id="email" type='email' class='input-field' placeholder='Email Id' name="email" required>
                Password:
                <input id="password" type='password' class='input-field' placeholder='Enter Password' required
                    name=" password">
                Confirm password:

                <input id="confirm_password" type='password' class='input-field' placeholder='Confirm Password'
                    required>
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
        y.style.left = '100px';
        z.style.left = '110px';
    }

    function login() {
        x.style.left = '110px';
        y.style.left = '650px';
        z.style.left = '0px';

    }
    </script>
    <script>
    var modal = document.getElementById('login-form');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = " none";
        }
    }
    </script>
</body>

</html>