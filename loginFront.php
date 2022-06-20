<?php 
include('config/constants.php');


    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        
        //1. Get the Data from Login form
         $username = $_POST['name'];
        $password = ($_POST['pass']);
       

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM customer WHERE name='$username' AND pass='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['loginFront'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['customer'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'index.php');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['loginFrontFaild'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'login_and_register_form.php');
        }


    }
?>