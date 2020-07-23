            <header>
                <div class="container no-padding">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo">
                            <a href="index.php">
                            
                            
<!--                           WEBSITE LOGO HERE-->
                              <img src="images/logo.png" class="logo-img" alt="logo" width="242px" height="100px">
                      
                                
                            </a>
                        </div><!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div><!-- /.logo-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
                        <div class="contact-row">
                            <div class="phone inline">
                                <i class="fa fa-phone"></i> (+800) 123 456 7890
                            </div>
                            <div class="contact inline">
                                <i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span>
                            </div>
                        </div><!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form>
                                <div class="control-group">
                                    <input class="search-field" placeholder="Search for item" />

                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown">

                                            <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html">all categories</a>

                                            <ul class="dropdown-menu" role="menu" >
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">laptops</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">tv & audio</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">gadgets</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">cameras</a></li>

                                            </ul>
                                        </li>
                                    </ul>

                                    <a class="search-button" href="#" ></a>

                                </div>
                            </form>
                        </div><!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div><!-- /.top-search-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
                        <div class="top-cart-row-container">
                            <div class="wishlist-compare-holder">
<!--
                                <div class="wishlist ">
                                    <a href="#"><i class="fa fa-heart"></i> wishlist <span class="value">(21)</span> </a>
                                </div>
-->
<!--
                                <div class="compare">
                                    <a href="#"><i class="fa fa-exchange"></i> compare <span class="value">(2)</span> </a>
                                </div>
-->
                            </div>

                            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                           
                            <div class="top-cart-holder dropdown animate-dropdown">
                                <div class="basket">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <div class="basket-item-count">
                                            <span class="count"><?php items(); ?></span>
                                            <img src="assets/images/icon-cart.png" alt="" />
                                        </div>

                                        <div class="total-price-basket">
                                            <span class="lbl">your cart:</span>
                                            <span class="total-price">
                                                <span class="sign">RS:</span><span class="value"><?php total_prize(); ?></span>
                                            </span>
                                        </div>
                                    </a>
                                    
                            
                                  
                                   
                                    <ul class="dropdown-menu">
                                      
                                  <!--                           SHOW  all cart item in navbar slide with imagess  query        -->
                      
                      
                 <?php 
                                    
 $ip_add = getuser_ip();                        
 $select_from_cat = "SELECT * FROM cart WHERE ip_add='$ip_add'";
  $cart_query_run = mysqli_query($connection,$select_from_cat);
    $cart_count = mysqli_num_rows($cart_query_run);                                
                                    
                   
  ?>                     
         
     <?php
               while($row = mysqli_fetch_array($cart_query_run)){
                $p_id = $row['p_id'];
                $qty = $row['qty'];
//                $product_img1 = $row['product_img1'];
//               $product_prize = $row['product_prize'];
     
         
         $product_select_query = "SELECT * FROM products WHERE product_id='$p_id'";
            $result = mysqli_query($connection,$product_select_query); 
            while($row = mysqli_fetch_array($result)){
                
                $product_title = $row['product_title'];
                $product_img1 = $row['product_img1'];
                   $product_prize = $row['product_prize'];
                
        
                   
                                    
      ?>     
                                      
                                      
                                      
                                      
                                       
                                        <li>
                                            <div class="basket-item">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                        <div class="thumb">
                                                            <img alt="" src="admin/product_images/<?php echo $product_img1; ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8 col-sm-8 no-margin">
                                                        <div class="title"><?php echo $product_title; ?></div>
                                                        <div class="price">RS:<?php echo $product_prize; ?></div>
                                                    </div>
                                                </div>
                                                <a class="close-btn" href="#"></a>
                                            </div>
                                        </li>


                           <?php } } ?>
                            


                                        <li class="checkout">
                                            <div class="basket-item">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="cart.html" class="le-button inverse">View cart</a>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <a href="checkout.html" class="le-button">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    
                                    
                                    
                                </div><!-- /.basket -->
                            </div><!-- /.top-cart-holder -->
                        </div><!-- /.top-cart-row-container -->
                        <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
                    </div><!-- /.top-cart-row -->
                </div><!-- /.container -->
            </header>
            
           
          
         
        
       
      
     
    
   
  
 




              
               
               
<nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
<div class="container">
<div class="yamm navbar">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div><!-- /.navbar-header -->
<div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">TV &amp; Audio</a>
<ul class="dropdown-menu">
<li>
<div class="yamm-content">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h2>Laptops &amp; Notebooks</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound </a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Computers &amp; Laptops</h2>
<ul>
<li><a href="#">Computer Cases &amp; Accessories</a></li>
<li><a href="#">CPUs, Processors</a></li>
<li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
<li><a href="#">Graphics, Video Cards</a></li>
<li><a href="#">Interface, Add-On Cards</a></li>
<li><a href="#">Laptop Replacement Parts</a></li>
<li><a href="#">Memory (RAM)</a></li>
<li><a href="#">Motherboards</a></li>
<li><a href="#">Motherboard &amp; CPU Combos</a></li>
<li><a href="#">Motherboard Components &amp; Accs</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Dekstop Parts</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound</a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.yamm-content -->
</li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">RTV</a>
<ul class="dropdown-menu">
<li>
<div class="yamm-content">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h2>Laptops &amp; Notebooks</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound </a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Computers &amp; Laptops</h2>
<ul>
<li><a href="#">Computer Cases &amp; Accessories</a></li>
<li><a href="#">CPUs, Processors</a></li>
<li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
<li><a href="#">Graphics, Video Cards</a></li>
<li><a href="#">Interface, Add-On Cards</a></li>
<li><a href="#">Laptop Replacement Parts</a></li>
<li><a href="#">Memory (RAM)</a></li>
<li><a href="#">Motherboards</a></li>
<li><a href="#">Motherboard &amp; CPU Combos</a></li>
<li><a href="#">Motherboard Components &amp; Accs</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Dekstop Parts</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound</a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.yamm-content -->
</li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Computers</a>
<ul class="dropdown-menu">
<li><a href="#">Computer Cases &amp; Accessories</a></li>
<li><a href="#">CPUs, Processors</a></li>
<li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
<li><a href="#">Graphics, Video Cards</a></li>
<li><a href="#">Interface, Add-On Cards</a></li>
<li><a href="#">Laptop Replacement Parts</a></li>
<li><a href="#">Memory (RAM)</a></li>
<li><a href="#">Motherboards</a></li>
<li><a href="#">Motherboard &amp; CPU Combos</a></li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Games &amp; Consoles</a>
<ul class="dropdown-menu">
<li>
<div class="yamm-content">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h2>Laptops &amp; Notebooks</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound </a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Computers &amp; Laptops</h2>
<ul>
<li><a href="#">Computer Cases &amp; Accessories</a></li>
<li><a href="#">CPUs, Processors</a></li>
<li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
<li><a href="#">Graphics, Video Cards</a></li>
<li><a href="#">Interface, Add-On Cards</a></li>
<li><a href="#">Laptop Replacement Parts</a></li>
<li><a href="#">Memory (RAM)</a></li>
<li><a href="#">Motherboards</a></li>
<li><a href="#">Motherboard &amp; CPU Combos</a></li>
<li><a href="#">Motherboard Components &amp; Accs</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Dekstop Parts</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound</a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.yamm-content -->
</li>
</ul>
</li>


<li class="dropdown yamm-fw">
<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Gadgets</a>
<ul class="dropdown-menu">
<li>
<div class="yamm-content">
<div class="row">
<div class="col-xs-12 col-sm-3">
<h2>Laptops &amp; Notebooks</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound </a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-3">
<h2>Computers &amp; Laptops</h2>
<ul>
<li><a href="#">Computer Cases &amp; Accessories</a></li>
<li><a href="#">CPUs, Processors</a></li>
<li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
<li><a href="#">Graphics, Video Cards</a></li>
<li><a href="#">Interface, Add-On Cards</a></li>
<li><a href="#">Laptop Replacement Parts</a></li>
<li><a href="#">Memory (RAM)</a></li>
<li><a href="#">Motherboards</a></li>
<li><a href="#">Motherboard &amp; CPU Combos</a></li>
<li><a href="#">Motherboard Components &amp; Accs</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-3">
<h2>Desktop Parts</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound</a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-3">
<h2>Laptops &amp; Notebooks</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound </a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.yamm-content -->
</li>
</ul>
</li><!-- /.yamm-fw -->


<li class="dropdown">
<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Phones &amp; Tablets</a>
<ul class="dropdown-menu">
<li><a href="#">Motherboard Components &amp; Accs</a></li>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply TestersSound </a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</li>


<li class="dropdown hidden-md">
<a href="#" class="dropdown-toggle" data-hover="dropdown">GPS &amp; Car Audio</a>
<ul class="dropdown-menu">
<li><a href="#">Laptops &amp; Notebooks</a></li>
<li><a href="#">RTV</a></li>
<li><a href="#">TV &amp; Audio</a></li>
<li><a href="#">Gadgets</a></li>
<li><a href="#">Cameras</a></li>
</ul>
</li>

<li class="dropdown navbar-right hidden-md">
<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Accessories</a>
<ul class="dropdown-menu">
<li>
<div class="yamm-content">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h2>Laptops &amp; Notebooks</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound </a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Computers &amp; Laptops</h2>
<ul>
<li><a href="#">Computer Cases &amp; Accessories</a></li>
<li><a href="#">CPUs, Processors</a></li>
<li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
<li><a href="#">Graphics, Video Cards</a></li>
<li><a href="#">Interface, Add-On Cards</a></li>
<li><a href="#">Laptop Replacement Parts</a></li>
<li><a href="#">Memory (RAM)</a></li>
<li><a href="#">Motherboards</a></li>
<li><a href="#">Motherboard &amp; CPU Combos</a></li>
<li><a href="#">Motherboard Components &amp; Accs</a></li>
</ul>
</div><!-- /.col -->

<div class="col-xs-12 col-sm-4">
<h2>Dekstop Parts</h2>
<ul>
<li><a href="#">Power Supplies Power</a></li>
<li><a href="#">Power Supply Testers Sound</a></li>
<li><a href="#">Sound Cards (Internal)</a></li>
<li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
<li><a href="#">Other</a></li>
</ul>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.yamm-content -->
</li>
</ul>
</li>
</ul><!-- /.navbar-nav -->
</div><!-- /.navbar-collapse -->
</div><!-- /.navbar -->
</div><!-- /.container -->
</nav><!-- /.megamenu-vertical -->
<!-- ========================================= NAVIGATION : END ========================================= -->










  
    	        <div class="animate-dropdown">
                    <!-- ========================================= BREADCRUMB ========================================= -->
                    <div id="breadcrumb-alt">
                        <div class="container">
                            <div class="breadcrumb-nav-holder minimal">
                                <ul>

<!--
                                    <li class="dropdown breadcrumb-item">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">desktop PC </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">PDA</a>
                                                <a href="#">accesories</a>
                                                <a href="#">tablets</a>
                                                <a href="#">games</a>
                                                <a href="#">consoles</a>
                                            </li>
                                        </ul>
                                    </li>
-->

                                    <li class="breadcrumb-item">
                                        <a href="index.php">HOME</a>
                                    </li><!-- /.breadcrumb-item -->

                                    <li class="breadcrumb-item ">
                                        <a href="shop.php">SHOP</a>
                                    </li>
                                    
                                      <li class="breadcrumb-item ">
                                        <a href="my_account.php">MY ACCOUNT</a>
                                    </li>
                                    
                                      <li class="breadcrumb-item ">
                                        <a href="shopping_cart.php">SHOPPING CART</a>
                                    </li>
                                    
                                    
                                      <li class="breadcrumb-item ">
                                        <a href="about_us">ABOUT US</a>
                                    </li>
                                    
                                     
                                      <li class="breadcrumb-item ">
                                        <a href="service.php">SERVICE</a>
                                    </li>
                                    
                                    
                                    
                                       <li class="breadcrumb-item ">
                                        <a href="contact_us.php">CONTACT US</a>
                                    </li>
                                    
                                </ul><!-- /.breadcrumb-nav-holder -->
                            </div>
                        </div><!-- /.container -->
                    </div><!-- /#breadcrumb-alt -->
                    <!-- ========================================= BREADCRUMB : END ========================================= -->
                </div>
