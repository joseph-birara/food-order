<?php 

    //AUthorization - Access COntrol
    //CHeck whether the customer is logged in or not
    if(!isset($_SESSION['customer']))
    {
        //User is not logged in
        //REdirect to login page with message
        $_SESSION['no-login-message-front'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        //REdirect to Login Page
        header('location:'.SITEURL.'login_and_register_form.php');
    }

?>