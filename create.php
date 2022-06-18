<?php include('./partials/menu.php'); ?>



    
       


<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        

        //1. Get the Data from form
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = ($_POST['password']); //Password Encryption with MD5

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO customer SET 
            email='$email',
            name='$username',
            pass='$password'
        ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res==TRUE)
        {
        
            //Create a Session Variable to Display Message
            $_SESSION['create'] = "<div class='success'>Admin Added Successfully.</div>";
            header("location:".SITEURL.'loginFront.html');
        }
        else
        {
            
            $_SESSION['notcreate'] = "<div class='error'>Failed to Add Admin.</div>";
            //Redirect Page to Add Admin
            header("location:".SITEURL.'create.php.php');
        }

    }
    
?> 