<?php include('config/constants.php'); 
include('partials-front/islogedin.php');

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
        .navbar{
            height:5%;
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
                        <a href="<?php echo SITEURL; ?>logoutFront.php">logout</a>
                    </li>
                    <li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->