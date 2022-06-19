<?php 
    include('../config/constants.php');

    
    //Check whether the id and image_name value is set or not
    if(isset($_GET['id']) and isset($_GET['image_name']))
    {
        //Get the Value and Delete
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        if($image_name != "")
        {
            
            $path = "../images/category/".$image_name;
            //REmove the Image
            $remove = unlink($path);
            if($remove==false)
            {
                $_SESSION['remove'] = "<div class='error'>Failed to Remove Category Image.</div>";
                header('location:'.SITEURL.'admin/manage-category.php');
                die();
            }
        }

        //Delete Data from Database
        $sql = "DELETE FROM tbl_category WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        if($res==true)
        {

            $_SESSION['delete'] = "<div class='success'>Category Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
        else
        {

            $_SESSION['delete'] = "<div class='error'>Failed to Delete Category.</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
        }

 

    }
    else
    {
        //redirect to Manage Category Page
        header('location:'.SITEURL.'admin/manage-category.php');
    }
?>