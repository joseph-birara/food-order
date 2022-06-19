<?php include('config/constants.php'); 
 if(!isset($_SESSION['customer']))
    {
        $text="logIn";
        $addres="login_and_register_form.php";
    }
    else{
        $text="logOut";
        $addres="logoutFront.php";
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <style>
    .navbar {
        height: 5%;
        position: relative;
        bottom: 90%;

    }
    </style>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container2">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/food-label.jpg" alt="Restaurant Logo" class="img-logo">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <li>
                        <a href="<?php echo SITEURL.$addres; ?>"> <?php
                             echo "$text";?>
                        </a>
                    </li>
                    <li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->