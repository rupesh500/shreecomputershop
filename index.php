<!DOCTYPE html>
<?php include "database/db.php"; ?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include "main-files/header.php"; ?>
    
    
    

       <body>
        <div class="wrapper">
   
        
                                            <!--        TOPNAVAR-->
                         <?php include "main-files/top-navbar.php"; ?>        
                                            <!--        TOPNAVAR END-->
   
           
           
            <!-- ============================================================= HEADER ============================================================= -->

           
<!--           MAIN NAVBAR HERE-->
          <?php include "main-files/navbar.php"; ?>
           
            <!-- ============================================================= HEADER : END ============================================================= -->

         
<!--         SIDERBAR CATEGORIES MENU HERE-->
         <?php include "main-files/sidebar-categories.php"; ?>
           
           
           
           
           
           
           
            <!-- ========================================= HOME BANNERS ========================================= -->
            <section id="banner-holder" class="wow fadeInUp">
                <div class="container">
                    <div class="col-xs-12 col-lg-6 no-margin banner">
                        <a href="category-grid-2.html">
                            <div class="banner-text theblue">
                                <h1>New Life</h1>
                                <span class="tagline">Introducing New Category</span>
                            </div>
                            <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-narrow-01.jpg" />
                        </a>
                    </div>
                    <div class="col-xs-12 col-lg-6 no-margin text-right banner">
                        <a href="category-grid-2.html">
                            <div class="banner-text right">
                                <h1>Time &amp; Style</h1>
                                <span class="tagline">Checkout new arrivals</span>
                            </div>
                            <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-narrow-02.jpg" />
                        </a>
                    </div>
                </div><!-- /.container -->
            </section><!-- /#banner-holder -->
            <!-- ========================================= HOME BANNERS : END ========================================= -->

           
<!--           /////////////////////////MAIN SHOPPING ITEMS HERE//////////////////////-->
           
           <?php include "main-files/main-content.php"; ?>
           
   
           
            <!-- ========================================= TOP BRANDS ========================================= -->
            <section id="top-brands" class="wow fadeInUp">
                <div class="container">
                    <div class="carousel-holder" >

                        <div class="title-nav">
                            <h1>Top Brands</h1>
                            <div class="nav-holder">
                                <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                                <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                            </div>
                        </div><!-- /.title-nav -->

                        <div id="owl-brands" class="owl-carousel brands-carousel">

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-01.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-02.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-03.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-04.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-01.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-02.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-03.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="assets/images/brands/brand-04.jpg" />
                                </a>
                            </div><!-- /.carousel-item -->

                        </div><!-- /.brands-caresoul -->

                    </div><!-- /.carousel-holder -->
                </div><!-- /.container -->
            </section><!-- /#top-brands -->
            <!-- ========================================= TOP BRANDS : END ========================================= -->

       
  <?php include "main-files/footer.php"; ?>
            
       
        