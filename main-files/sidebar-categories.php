<div id="top-banner-and-menu">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">




            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown">
                <div class="head"><i class="fa fa-list"></i>Product Categories</div>
                <nav class="yamm megamenu-horizontal" role="navigation">
                    <ul class="nav">
                        <?php 
                    $product_categories_query = "SELECT * FROM product_categories ";
                            $product_cat_result = mysqli_query($connection,$product_categories_query);
                       while($row = mysqli_fetch_array($product_cat_result)){

                        $p_cat_id = $row['p_cat_id']; 
                        $p_cat_title = $row['p_cat_title']; 
                        $p_cat_desc = $row['p_cat_desc']; 

                echo "<li> <a href='product_categories.php?pro_cat_get=$p_cat_id'>$p_cat_title </a> </li> "; 
                        
                        ?> 
                                     
                                        
                                      <?php } ?>
<!--                        <li><a href="">Buy this Theme</a></li>-->
                    </ul><!-- /.nav -->
                </nav><!-- /.megamenu-horizontal -->
            </div><!-- /.side-menu -->
            <!-- ================================== TOP NAVIGATION : END ================================== -->

            <br><br>










            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown">
                <div class="head"><i class="fa fa-list"></i>Categories</div>
                <nav class="yamm megamenu-horizontal" role="navigation">
                    <ul class="nav">
                
                   <?php 
                    $categories_query = "SELECT * FROM categories ";
                            $product_cat = mysqli_query($connection,$categories_query);
                       while($row = mysqli_fetch_array($product_cat)){

                        $cat_id = $row['cat_id']; 
                        $cat_title = $row['cat_title']; 
                        $cat_desc = $row['cat_desc']; 

                   
                        
                        ?>

                      <?php echo "<li> <a href='categories.php?cat_get=$cat_id'>$cat_title </a> </li> "; ?> 
                                     
                                        
                                      <?php } ?>
                    </ul><!-- /.nav -->
                </nav><!-- /.megamenu-horizontal -->
            </div><!-- /.side-menu -->
            <!-- ================================== TOP NAVIGATION : END ================================== -->

            <br><br>






        </div><!-- /.sidemenu-holder -->






        <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
            <!-- ========================================== SECTION – HERO ========================================= -->
            <div id="hero">
                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                    <?php
                                
             $query = "SELECT * FROM slider LIMIT 0,2";                   
              $result = mysqli_query($connection,$query);  
                while($row = mysqli_fetch_array($result)){
                    
                 $slider_name = $row['slider_name']; 
                  $slider_img = $row['slider_img']; 
                    
               ?>

                    <img class="item" src="assets/images/sliders/<?php echo $slider_img ; ?>" alt="banner1">

                    <!--
                                    <div class="container-fluid">
                                        <div class="caption vertical-center text-left">
                                            <div class="big-text fadeInDown-1">
                                                Save up to a<span class="big"><span class="sign">$</span>400</span>
                                            </div>

                                            <div class="excerpt fadeInDown-2">
                                                on selected laptops<br>
                                                & desktop pcs or<br>
                                                smartphones
                                            </div>
                                            <div class="small fadeInDown-2">
                                                terms and conditions apply
                                            </div>
                                            <div class="button-holder fadeInDown-3">
                                                <a href="single-product.html" class="big le-button ">shop now</a>
                                            </div>
                                        </div>
                                   
                                    </div>
-->

                    <?php } ?>
                </div>


            </div>

        </div>






    </div>
</div>