<!DOCTYPE html>
<?php include "database/db.php"; ?>
<?php include "function.php"; ?>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include "main-files/header.php"; ?>
<div class="animate-dropdown">


<!--        TOPNAVAR-->
<?php include "main-files/top-navbar.php"; ?>
<!--        TOPNAVAR END-->

<!-- ============================================================= HEADER ============================================================= -->


<!--           MAIN NAVBAR HERE-->
<?php include "main-files/navbar.php"; ?>

<!-- ============================================================= HEADER : END ============================================================= -->

<div id="top-mega-nav">
<div class="container">
<nav>
<ul class="inline">
<li class="dropdown le-dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-list"></i> shop by department
</a>

<!--
<ul class="dropdown-menu">
<li><a href="#">Computer Cases & Accessories</a></li>
<li><a href="#">CPUs, Processors</a></li>
<li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
<li><a href="#">Graphics, Video Cards</a></li>
<li><a href="#">Interface, Add-On Cards</a></li>
<li><a href="#">Laptop Replacement Parts</a></li>
<li><a href="#">Memory (RAM)</a></li>
<li><a href="#">Motherboards</a></li>
<li><a href="#">Motherboard &amp; CPU Combos</a></li>
<li><a href="#">Motherboard Components</a></li>
</ul>
-->
</li>


<?php
if(!isset($_GET['pro_cat_get'])){
  if(!isset($_GET['cat_get'])){
      
   echo "SHOP";   
      
  }  
   
}    
?>



</ul><!-- /.inline -->
</nav>

</div><!-- /.container -->
</div><!-- /#top-mega-nav -->
<!-- ========================================= BREADCRUMB : END ========================================= -->
</div>

<section id="category-grid">
<div class="container">
<!-- ========================================= SIDEBAR ========================================= -->
<div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
<!-- ========================================= PRODUCT FILTER ========================================= -->



<div class="widget">
<h1>Product Filters</h1>
<div class="body bordered">

<div class="category-filter">
<h2>Brands</h2>
<hr>
<ul>
<li><input checked="checked" class="le-checkbox" type="checkbox"  /> <label>Samsung</label> <span class="pull-right">(2)</span></li>
<li><input  class="le-checkbox" type="checkbox" /> <label>Dell</label> <span class="pull-right">(8)</span></li>
<li><input  class="le-checkbox" type="checkbox" /> <label>Toshiba</label> <span class="pull-right">(1)</span></li>
<li><input  class="le-checkbox" type="checkbox" /> <label>Apple</label> <span class="pull-right">(5)</span></li>
</ul>
</div><!-- /.category-filter -->

<div class="price-filter">
<h2>Price</h2>
<hr>
<div class="price-range-holder">

<input type="text" class="price-slider" value="" >

<span class="min-max">
Price: $89 - $2899
</span>
<span class="filter-button">
<a href="#">Filter</a>
</span>
</div>
</div><!-- /.price-filter -->

</div><!-- /.body -->
</div><!-- /.widget -->
<!-- ========================================= PRODUCT FILTER : END ========================================= -->



<!-- ========================================= LINKS ========================================= -->
<div class="widget">
<h1 class="border">information</h1>
<div class="body">
<ul class="le-links">
<li><a href="#">delivery</a></li>
<li><a href="#">secure payment</a></li>
<li><a href="#">our stores</a></li>
<li><a href="#">contact</a></li>
</ul><!-- /.le-links -->
</div><!-- /.body -->
</div><!-- /.widget -->
<!-- ========================================= LINKS : END ========================================= -->

<div class="widget">
<div class="simple-banner">
<a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-simple.jpg" /></a>
</div>
</div>

<!-- ========================================= FEATURED PRODUCTS ========================================= -->
<div class="widget">
<h1 class="border">Featured Products</h1>
<ul class="product-list">

<li class="sidebar-product-list-item">
<div class="row">
<div class="col-xs-4 col-sm-4 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
</a>
</div>
<div class="col-xs-8 col-sm-8 no-margin">
<a href="#">Netbook Acer </a>
<div class="price">
<div class="price-prev">$2000</div>
<div class="price-current">$1873</div>
</div>
</div>
</div>
</li><!-- /.sidebar-product-list-item -->

<li class="sidebar-product-list-item">
<div class="row">
<div class="col-xs-4 col-sm-4 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
</a>
</div>
<div class="col-xs-8 col-sm-8 no-margin">
<a href="#">PowerShot Elph 115 16MP Digital Camera</a>
<div class="price">
<div class="price-prev">$2000</div>
<div class="price-current">$1873</div>
</div>
</div>
</div>
</li><!-- /.sidebar-product-list-item -->

<li class="sidebar-product-list-item">
<div class="row">
<div class="col-xs-4 col-sm-4 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-03.jpg" />
</a>
</div>
<div class="col-xs-8 col-sm-8 no-margin">
<a href="#">PowerShot Elph 115 16MP Digital Camera</a>
<div class="price">
<div class="price-prev">$2000</div>
<div class="price-current">$1873</div>
</div>
</div>
</div>
</li><!-- /.sidebar-product-list-item -->

<li class="sidebar-product-list-item">
<div class="row">
<div class="col-xs-4 col-sm-4 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
</a>
</div>
<div class="col-xs-8 col-sm-8 no-margin">
<a href="#">Netbook Acer </a>
<div class="price">
<div class="price-prev">$2000</div>
<div class="price-current">$1873</div>
</div>
</div>
</div>
</li><!-- /.sidebar-product-list-item -->

<li class="sidebar-product-list-item">
<div class="row">
<div class="col-xs-4 col-sm-4 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
</a>
</div>
<div class="col-xs-8 col-sm-8 no-margin">
<a href="#">PowerShot Elph 115 16MP Digital Camera</a>
<div class="price">
<div class="price-prev">$2000</div>
<div class="price-current">$1873</div>
</div>
</div>
</div>
</li><!-- /.sidebar-product-list-item -->

</ul><!-- /.product-list -->
</div><!-- /.widget -->
<!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
</div>
<!-- ========================================= SIDEBAR : END ========================================= -->

<!-- ========================================= CONTENT ========================================= -->

<div class="col-xs-12 col-sm-9 no-margin wide sidebar">


<!--PRODUCT FOUND OR NOT HEADING DYNAMIC-->
   <?php getproduct_cat_pro(); ?>  

<section id="gaming">
<div class="grid-list-products">
<h2 class="section-title">Gaming</h2>

<div class="control-bar">
<div id="popularity-sort" class="le-select" >
<select data-placeholder="sort by popularity">
<option value="1">1-100 players</option>
<option value="2">101-200 players</option>
<option value="3">200+ players</option>
</select>
</div>

<div id="item-count" class="le-select">
<select>
<option value="1">24 per page</option>
<option value="2">48 per page</option>
<option value="3">32 per page</option>
</select>
</div>

<div class="grid-list-buttons">
<ul>
<li class="grid-list-button-item"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Grid</a></li>

<li class="grid-list-button-item"><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> List</a></li>

</ul>
</div>
</div><!-- /.control-bar -->

<div class="tab-content">
<div id="grid-view" class="products-grid fade tab-pane in active">

<div class="product-grid-holder">
<div class="row no-margin">

<?php 

    
   if(isset($_GET['pro_cat_get'])){
     $get_cat_id = $_GET['pro_cat_get']; 
       
       $show_query = "SELECT * FROM categories WHERE cat_id='$get_cat_id'";
       $result_cat = mysqli_query($connection,$show_query);
       $countresult = mysqli_fetch_array($result_cat);
       $cat_title = $countresult['cat_title'];
        $cat_desc = $countresult['cat_desc'];
       
$get_product = "SELECT * FROM products WHERE cat_id='$get_cat_id'"; 
       $get_product_result = mysqli_query($connection,$query);
      while($row = mysqli_fetch_array($get_product_result)){
       
          
          
        $product_id = $_row['product_id']; 
    
      	$product_cat_id = $_row['product_cat_id']; 
      $cat_id = $_row['cat_id'];
              $date = $_row['date']; 
     
      $product_title = $_row['product_title']; 
      $product_img1 = $_row['product_img1']; 
            $product_prize = $_row['product_prize']; 
            $product_desc = $_row['product_desc']; 
      $product_keyword = $_row['product_keyword'];   
  

    ?>


<div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
<div class="product-item">
<div class="ribbon red"><span>sale</span></div>
<div class="image">
<img alt="" src="admin/product_images/<?php echo $product_img1; ?>" data-echo="admin/product_images/<?php echo $product_img1; ?>" />
</div>
<div class="body">
<div class="label-discount green">-50% sale</div>
<div class="title">
<a href=""><?php echo $product_title; ?></a>
</div>
<div class="brand"><?php echo $product_keyword; ?></div>
</div>
<div class="prices">
<div class="price-prev">$1399.00</div>
<div class="price-current pull-right">RS <?php echo $product_prize; ?></div>
</div>
<div class="hover-area">
<div class="add-cart-button">
<a href="single-product.html" class="le-button">add to cart</a>
</div>
<div class="wish-compare">
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
<!--<a class="btn-add-to-compare" href="#">compare</a>-->
</div>
</div>
</div><!-- /.product-item -->
</div><!-- /.product-item-holder -->

<?php      }}  ?>



</div><!-- /.row -->
</div><!-- /.product-grid-holder -->



<br><br><br>
<div class="pagination-holder">
<div class="row">

<div class="col-xs-12 col-sm-6 text-left">
<ul class="pagination ">

</ul>
</div>

<div class="col-xs-12 col-sm-6">
<div class="result-counter">
Showing <span>1-9</span> of <span>11</span> results
</div>
</div>

</div><!-- /.row -->
</div><!-- /.pagination-holder -->
</div><!-- /.products-grid #grid-view -->



</div><!-- /.tab-content -->
</div><!-- /.grid-list-products -->

</section><!-- /#gaming -->
</div><!-- /.col -->
<!-- ========================================= CONTENT : END ========================================= -->
</div><!-- /.container -->
</section><!-- /#category-grid -->

<?php include "main-files/footer.php"; ?>   