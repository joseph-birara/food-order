<?php 
include('config/constants.php');


    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //Process for Login
        
         $name = $_POST['name'];
         $pass =($_POST['pass']);
        

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM customer  WHERE  name='$name' AND pass='$pass'";
        
        
        $res = mysqli_query($conn, $sql);

        if($res)
        {
            //User AVailable and Login Success
            $_SESSION['loginFront'] = "<div>Login Successful.</div>";
            $_SESSION['customer'] = $name; //TO check whether the user is logged in or not and logout will unset it
            header('location:'.SITEURL.'index.php');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['loginFront'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'login_and_register_form.php');
        }


    }

?>