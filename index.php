    <?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">

            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD search Section Ends Here -->

    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <!-- Categories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h4 class="text-center"></h4>

            <?php 
                //Create SQL Query to Display Categories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {

                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>

            <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                <div class="box-3 float-container">
                    <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza"
                        class="img-responsive img-curve">
                    <?php
                                    }
                                ?>


                    <h3 class="float-text text-white"><?php echo $title; ?></h3>
                </div>
            </a>

            <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h4 class="text-center">dishes</h4>
            <div class="foods">

                <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' ";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt=" Pizza"
                            class="img-responsive img-curve">
                        <?php
                                }
                            ?>

                    </div>

                    <div class="food-menu-desc">
                        <h4><?php echo $title; ?></h4>
                        <p class="food-price">$<?php echo $price; ?></p>
                        <p class="food-detail">
                            <?php echo $description; ?>
                        </p>
                        <br>

                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>"
                            class="btn btn-primary">Order
                            Now</a>
                    </div>
                </div>

                <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>

            </div>

            <p class="text-center">
                <a href="#">See more Foods</a>
            </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
    <div class="review">
        <div class="reviewIntro">

            <p>

            <h3><br>
                please share to us what you feel about our services and products using this form.
                <br>
            </h3>
            <br>

            </p>
        </div>

        <form action="">
            <label for="name">your name:</label>
            <br>
            <input type="text" id="name" placeholder="enter your name" class="input"><br>
            <label for="email">Email:</label>
            <br>
            <input type="text" placeholder="enter your email" id="email" class="input">
            <br><br><br>

            <div class="reviewmessage">

                <textarea name="" placeholder="enter your message" id="" cols="30" rows="5"></textarea>
            </div>
            <input type="submit" value="send now" class="btnr" id="send">


        </form>
    </div>


    <?php include('partials-front/footer.php'); ?>