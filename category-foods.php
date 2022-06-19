<!--     
    <?php include('partials-front/menu.php'); ?>

    <?php 
        //CHeck whether id is passed or not
        if(isset($_GET['category_id']))
        {
            //Category id is set and get the id
            $category_id = $_GET['category_id'];
            // Get the CAtegory Title Based on Category ID
            $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Get the value from Database
            $row = mysqli_fetch_assoc($res);
            //Get the TItle
            $category_title = $row['title'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            header('location:'.SITEURL);
        }
    ?>


    <!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum eius consequuntur iusto deleniti blanditiis
            animi nobis non iste sapiente corrupti! Numquam at animi laborum. Porro fugit modi minima eaque veniam quo
            enim quaerat nam vel, quisquam corrupti sed cumque, voluptate recusandae accusamus quis culpa, odio omnis.
            Recusandae fuga maxime, dolorem fugit illum quisquam animi minus ea saepe reiciendis unde! Quos amet
            deserunt optio fugiat consectetur ex nulla, vero atque quis dolorem iusto animi tenetur voluptate quibusdam
            quo! Numquam dicta unde consequatur corrupti veniam nam aspernatur error molestiae et blanditiis nisi
            voluptas cum, ab at quaerat sapiente hic dolores aut suscipit magni autem ducimus cumque. Dicta, in, natus
            cum quo deleniti eveniet magni, omnis perspiciatis enim ipsa accusamus ducimus ratione eligendi delectus
            illo repudiandae explicabo culpa facere? Qui ea minima sint, totam fugit quis cumque necessitatibus enim
            maxime suscipit vitae quas earum eligendi autem voluptatibus, quidem sequi sit aut tempora? Modi dolores
            eius quasi minus provident error praesentium voluptates non inventore, accusantium amet quo quidem dolorum
            perspiciatis, harum tenetur earum perferendis. In nihil iure, quae voluptas blanditiis aspernatur
            praesentium perferendis corporis! Itaque id provident optio autem facere adipisci modi dolorum amet, aliquam
            illum praesentium nemo esse at cum asperiores nesciunt numquam nostrum quod perspiciatis placeat. Totam
            illum distinctio, debitis nesciunt nisi suscipit laborum atque beatae odio earum temporibus, aspernatur
            eligendi voluptates optio tenetur cumque deserunt impedit delectus fugit rem molestias commodi repellendus?
            Libero quos iste, sed odit asperiores ipsum. Cumque exercitationem ipsa nobis porro recusandae unde sint
            fugiat ipsam vitae molestias? Animi veritatis tenetur nulla molestiae est itaque praesentium facilis. Dolore
            delectus cupiditate consequuntur rerum ipsa est, eaque laudantium. Rem, perspiciatis in nesciunt non
            molestiae cumque reprehenderit facere porro harum dolore nihil neque ullam nobis. Nobis recusandae pariatur
            impedit ab ratione magnam accusantium animi doloremque quas? Blanditiis suscipit iste error temporibus
            nulla. Repellat molestias illo cum beatae adipisci deserunt earum officiis doloribus, libero blanditiis. Eum
            deleniti corrupti natus nam consequatur. Magni similique deleniti ratione. Ipsum eaque et aliquid sed
            consequatur libero similique, odit veritatis deserunt dignissimos error qui! Fugit ipsa molestiae corporis
            quae repudiandae quo labore amet pariatur saepe temporibus. Animi reiciendis possimus esse consequuntur
            nobis necessitatibus ullam. Ad ab doloremque, ea voluptas aliquid maiores corporis officiis dolorum rem
            perspiciatis dolores aut facilis eos praesentium vel ipsa vero magnam consequatur! Molestiae ea non esse
            odio eveniet, similique neque aliquid quia ab deleniti doloremque, libero animi magnam iusto aliquam
            suscipit ut corrupti illum nesciunt. Atque quasi, rem officia dolor eos impedit. Nostrum, pariatur repellat?
            Iure dolorem, corrupti explicabo eaque quos numquam quisquam fugit consequatur. Atque asperiores odit sint
            nihil eligendi autem officiis facilis nemo eum rerum esse, quas deserunt quo eveniet, quidem sapiente porro
            obcaecati quaerat praesentium neque et sunt? Fuga eaque tenetur qui illum amet sint cum cumque illo eligendi
            quibusdam? Ab vel laboriosam in. Culpa harum fuga non accusantium, pariatur magni sit nostrum neque corrupti
            vel odit mollitia distinctio nobis voluptas facere error dolorem delectus impedit adipisci dicta. Veritatis
            rem, autem dolores maiores sapiente incidunt, unde ipsa optio animi ab repellendus culpa vel accusamus eaque
            debitis sint vitae in neque. Alias magni velit dolorum necessitatibus aliquam nisi exercitationem iste sed
            repellat? Nulla voluptas animi numquam, ipsum quasi tempora recusandae ex ipsa et quia eos rem culpa
            officiis distinctio exercitationem accusamus obcaecati aut sunt tempore itaque reiciendis temporibus quam
            consectetur? Rerum cum doloribus aut officia, dicta eum cumque quae vero eveniet adipisci praesentium harum,
            in sit natus nulla nihil cupiditate esse quia voluptate dolorem impedit quod amet consectetur. Est numquam
            unde eaque recusandae alias! Adipisci beatae est soluta odio alias quis totam dolor minima, accusamus
            architecto! Ratione adipisci eveniet facere. Sapiente adipisci, iusto laborum facilis nemo quod. Ipsam
            incidunt impedit quia autem vero pariatur eum delectus facere dolorem eos excepturi magnam dolor aliquam
            sunt tempore odit omnis voluptatem officiis doloremque, ipsum corporis labore. A, rerum! Distinctio magnam
            nesciunt dicta aliquid consectetur blanditiis sequi consequuntur nam animi praesentium quae debitis ipsa
            molestias doloremque eos neque dolores excepturi officiis, reiciendis eum repudiandae accusamus atque
            laborum fugiat. Explicabo sapiente sequi quos, iusto voluptatem reprehenderit quibusdam sed laboriosam
            harum, asperiores minus modi eveniet, inventore dicta quam accusantium cupiditate necessitatibus voluptate.
            Deserunt rem harum doloremque molestias cumque, fugiat ut adipisci repudiandae vel ipsa facere suscipit,
            unde delectus porro quidem. In odio ab atque recusandae unde consequatur optio consectetur alias neque, hic
            repudiandae distinctio iusto ea fugiat tenetur minima labore delectus omnis? Omnis consectetur inventore
            molestiae, adipisci quam sint, nisi fugit iusto culpa ipsum ea necessitatibus, deleniti minima voluptas
            dignissimos similique architecto. Ab quidem error labore adipisci vitae debitis. Iure, molestiae aliquam? Ab
            earum repellendus eius et facilis, impedit beatae porro quas repudiandae ratione! Accusantium, omnis
            molestiae recusandae nulla soluta voluptates nobis porro, eaque provident voluptate ex autem. Veniam
            incidunt at alias voluptates. Facere impedit fugiat, repellat, nam ex eos reprehenderit voluptas molestias
            ab maiores voluptatibus libero illo sit numquam porro vel cumque dolore, nulla commodi reiciendis provident
            sapiente quaerat? Illo natus tempora, doloremque harum id fugit eveniet vel aspernatur numquam repellendus
            porro dicta deleniti a fugiat et quae suscipit atque quos cupiditate autem. Eos excepturi tempora, ut
            inventore sint non possimus? Totam velit illum dolores reiciendis excepturi architecto quod inventore fugiat
            quibusdam debitis obcaecati eveniet itaque dolorum tenetur quos delectus, facere hic voluptatum laudantium
            accusamus sapiente quasi doloremque? Voluptatibus suscipit qui quaerat sapiente ad eligendi voluptas eveniet
            nesciunt, officiis repellat omnis et iure incidunt exercitationem, voluptates accusantium maxime illum
            asperiores impedit doloremque obcaecati. Hic tempore quos corporis sed explicabo illum autem pariatur,
            voluptas cum, aperiam placeat? Saepe labore distinctio, numquam autem quam, voluptatem facilis, nesciunt
            natus repellendus similique vitae obcaecati eos iure ipsum? Pariatur deleniti in numquam, fuga officiis
            nihil quas enim veritatis consequatur error quisquam autem, atque ex cum nam soluta magnam. Maxime aliquid
            quis eaque labore debitis? Id doloremque minus placeat sunt adipisci! Odio explicabo ratione dicta accusamus
            quod porro facilis. Perferendis nisi harum iure totam est eos assumenda iste praesentium tenetur voluptas
            omnis, doloremque, consequatur quod facilis. Dolores perferendis ratione ad dolorem nemo perspiciatis, porro
            deserunt doloremque cumque repellendus asperiores reiciendis rem. Officia!
        </p>

        <h2>Foods on <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->



<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h4 class="text-center">Dishes</h4>

        <?php 
            
                //Create SQL Query to Get foods based on Selected CAtegory
                $sql2 = "SELECT * FROM tbl_food WHERE category_id=$category_id";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Count the Rows
                $count2 = mysqli_num_rows($res2);

                //CHeck whether food is available or not
                if($count2>0)
                {
                    //Food is Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
                        ?>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza"
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

                <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order
                    Now</a>
            </div>
        </div>

        <?php
                    }
                }
                else
                {
                    //Food not available
                    echo "<div class='error'>Food not Available.</div>";
                }
            
            ?>



        <div class="clearfix"></div>



    </div>

</section>
<!-- fOOD Menu Section Ends Here -->

<?php include('partials-front/footer.php'); ?> -->