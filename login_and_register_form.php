<?php include('config/constants.php'); 
session_start();
$message="";
if(isset($_SESSION['loginFrontFaild'])){
    $message= $_SESSION['loginFrontFaild'];
    unset($_SESSION['loginFrontFaild']);
}
if(isset($_SESSION['create'])){
    $message=$_SESSION['create'];
    
    unset($_SESSION['create']);
}
if(isset($_SESSION['notcreate'])){
    $message= $_SESSION['notcreate'];
    unset($_SESSION['notcreate']);
}
if(!$message){
    $message="Welcome";
}

?>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login_and_register_form_style.css">
    
</head>

<body>

    <div id="error" cass="error">

        <h2 id="txt"><?php echo $message;?></h2>
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
            <form onsubmit="return validate()" id='register' class='input-group-register' action="create.php"
                method="post" name="myform">
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
            modal.style.display = "none";
        }
    }
    </script>
    <script>



//validate password 

function confirmPasswod() {
     let message=''
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById('confirm_password').value;
        if (password != confirmPassword) {
            message="Passwords do not match.";
            document.getElementById("password").focus();
            
        }
    let pt = /[0-9]/;
    let pt2 = /[A-Z]/;
    let pt3 = /[a-z]/;

      if (password.length < 8) {
        
        message = "password too short!";
        document.getElementById("password").focus();
        
    }
    if (!password.match(pt)) {
        message = "password should contain number"
        document.getElementById("password").focus();
        
    }
    if (!password.match(pt2)) {
       message = "password should contain capital letter"
       document.getElementById("password").focus();
        
    }
    if (!password.match(pt3)) {
        message = "password should contain small letter"
        document.getElementById("password").focus();
    }
    
        return message;
}
    

//validate email

function validateEmail(){
    let email=document.getElementById("email").value;
    var text=''
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email.match(mailformat))
    
            {
                text="too short  or email has a wrong format" ;
                document.getElementById("email").focus() ;
                return text;
            }
      
}
    
//validate name 

 function validateusername()
 {
    var text='';
    var name = document.getElementById('name');
    var userName =name.value;

    var pattern=/^[A-z0-9]+$/;
    if(!userName.match(pattern))

    {
        text = "User name should conatin only alphanumeric characters";
         name.focus();
        
    }
        if (userName.length > 12 || userName.length< 4) {
            text = " name length must be between 4 and 12";
         name.focus();
        

        }
        return text;
 }

 //validate last name 

function validateLastname()
{
    var tx='';
    var lastname = document.getElementById('lastname');
    var lName =lastname.value;

    var pattern=/^[A-z0-9]+$/;
    if(!lName.match(pattern))

    {
        tx = "last name should conatin only alphanumeric characters";
         lastname.focus();
        
    }
        if (lName.length > 12 || lName.length< 3) {
            tx = "last name length must be between 3 and 12";
         lastname.focus();
        

        }
        return tx;
}
function validate() {
    let val= document.getElementById('txt');
    if (confirmPasswod()) {
        val.innerText=confirmPasswod();
        return false;
    }
    if (validateusername()) {
        val.innerText=validateusername();
        return false;
    }
    if (validateLastname()) {
        val.innerText=validateLastname();
       return false;
    }
    if (validateEmail()) {
        val.innerText=validateEmail();
        return false
    }
    return true;

}

    </script>
</body>

</html>