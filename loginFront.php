<?php 
include('config/constants.php');

//CHeck whether the Submit Button is Clicked or NOt
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //Process for Login
        //1. Get the Data from Login form
         $name = $_POST['name'];
         $pass =($_POST['pass']);
        

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM customer  WHERE  name='$name' AND pass='$pass'";
        
        
        $res = mysqli_query($conn, $sql);

    // if($res){
    //     echo "database is quere";
    // }
    // else{
    //     echo "failed to do";
    // }

        // $count = mysqli_num_rows($res);

        if($res)
        {
            //User AVailable and Login Success
            $_SESSION['loginFront'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['customer'] = $name; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page
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