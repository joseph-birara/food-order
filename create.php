<?php 
include('config/constants.php');
// echo var_dump($conn);
echo var_dump($_POST);
?>




<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        

        //1. Get the Data from form
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $lastname=$_POST['lastname'];


        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO customer SET
            name='$username',
            lastname='$lastname',
            email='$email',
            pass='$password' 
            ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql);

        // echo var_dump($res);

        if($res)
        {
        
            //Create a Session Variable to Display Message
            $_SESSION['create'] = "<div class='success'>account created Successfully.</div>";
            header("location:".SITEURL.'login_and_register_form.php');
        }
        else
        {
            
            $_SESSION['notcreate'] = "<div class='error'>Failed to to creat acount .</div>";
            //Redirect Page to creat account page
            header("location:".SITEURL.'login_and_register_form.php');
        }

    }
    
?>