<!DOCTYPE html>
<?php include "database/db.php"; ?>
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

<!-- ========================================= CATEGORY TREE ========================================= -->
<div class="widget accordion-widget category-accordions">
<h1 class="border">Category Tree</h1>
<div class="accordion">
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
laptops &amp; computers
</a>
</div>
<div id="collapseOne" class="accordion-body collapse in">
<div class="accordion-inner">
<ul>
<li>
<div class="accordion-heading">
<a href="#collapseSub1" data-toggle="collapse">laptop</a>
</div>
<div id="collapseSub1" class="accordion-body collapse in">
<ul>
<li><a href="#">Two Level Accordion</a></li>
</ul>
</div><!-- /.accordion-body -->
</li>
<li>
<div class="accordion-heading">
<a href="#collapseSub2" data-toggle="collapse">tablet</a>
</div>
<div id="collapseSub2" class="accordion-body collapse in">
<ul>
<li>
<div class="accordion-heading">
<a href="#collapseSub3" data-toggle="collapse">Three Level Accordion</a>
</div>
<div id="collapseSub3" class="accordion-body collapse in">
<ul>
<li><a href="#">PDA</a></li>
<li><a href="#">notebook</a></li>
<li><a href="#">mini notebook</a></li>
</ul>
</div><!-- /.accordion-body -->
</li>
</ul>
</div>
</li>
<li><a href="#">PDA</a></li>
<li><a href="#">notebook</a></li>
<li><a href="#">mini notebook</a></li>
</ul>
</div><!-- /.accordion-inner -->
</div>
</div><!-- /.accordion-group -->

<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseTwo">
desktop PC
</a>
</div>
<div id="collapseTwo" class="accordion-body collapse">
<div class="accordion-inner">
<ul>
<li><a href="#">gaming</a></li>
<li><a href="#">office</a></li>
<li><a href="#">kids</a></li>
<li><a href="#">for women</a></li>
</ul>
</div>
</div>
</div><!-- /.accordion-group -->


<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle collapsed" data-toggle="collapse"  href="#collapse3">
laptops
</a>
</div>
<div id="collapse3" class="accordion-body collapse">
<div class="accordion-inner">
<ul>
<li><a href="#">light weight</a></li>
<li><a href="#">wide monitor</a></li>
<li><a href="#">ultra laptop</a></li>
</ul>
</div>
</div>
</div><!-- /.accordion-group -->


<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle collapsed" data-toggle="collapse"  href="#collapse4">
notebooks
</a>
</div>
<div id="collapse4" class="accordion-body collapse">
<div class="accordion-inner">
<ul>
<li><a href="#">light weight</a></li>
<li><a href="#">wide monitor</a></li>
<li><a href="#">ultra laptop</a></li>
</ul>
</div>
</div>
</div><!-- /.accordion-group -->

</div><!-- /.accordion -->
</div><!-- /.category-accordions -->
<!-- ========================================= CATEGORY TREE : END ========================================= -->

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
<li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Grid</a></li>

<li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> List</a></li>

</ul>
</div>
</div><!-- /.control-bar -->

<div class="tab-content">
<div id="grid-view" class="products-grid fade tab-pane in active">

<div class="product-grid-holder">
<div class="row no-margin">




<?php 
    
  if(!isset($_GET['pro_cat_get'])){
   if(!isset($_GET['cat_get'])){
       
   $per_page = 6;
       if(isset($_GET['page'])){
           
      $page=$_GET['page'];
     }
       
       else{
           $page =1;
       }
       
       $start_from=($page-1) * $per_page;
       $get_product = "SELECT * FROM products ORDER BY 1 DESC LIMIT $start_from, $per_page ";
       $run_product = mysqli_query($connection,$get_product);
       while($row = mysqli_fetch_array($run_product)){
           $product_id = $row['product_id'];
            $product_cat_id = $row['product_cat_id'];
            $cat_id = $row['cat_id'];
            $date = $row['date'];
            $product_title = $row['product_title'];
            $product_img1 = $row['product_img1'];
            $product_img2 = $row['product_img2'];
            $product_img3 = $row['product_img3'];
            $product_prize = $row['product_prize'];
            $product_desc = $row['product_desc'];
            $product_keyword = $row['product_keyword'];
           
 
 
    
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





<?php } ?>




</div><!-- /.row -->
</div><!-- /.product-grid-holder -->

<div class="pagination-holder">
<div class="row">

<div class="col-xs-12 col-sm-6 text-left">
<ul class="pagination ">
<?php }} ?>

<!--
<li class="current"><a  href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">next</a></li>
-->
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

<div id="list-view" class="products-grid fade tab-pane ">
<div class="products-list">

<div class="product-item product-item-holder">
<div class="ribbon red"><span>sale</span></div>
<div class="ribbon blue"><span>new!</span></div>
<div class="row">
<div class="no-margin col-xs-12 col-sm-4 image-holder">
<div class="image">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
</div>
</div><!-- /.image-holder -->
<div class="no-margin col-xs-12 col-sm-5 body-holder">
<div class="body">
<div class="label-discount green">-50% sale</div>
<div class="title">
<a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
</div>
<div class="brand">sony</div>
<div class="excerpt">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
</div>
<div class="addto-compare">
<a class="btn-add-to-compare" href="#">add to compare list</a>
</div>
</div>
</div><!-- /.body-holder -->
<div class="no-margin col-xs-12 col-sm-3 price-area">
<div class="right-clmn">
<div class="price-current">$1199.00</div>
<div class="price-prev">$1399.00</div>
<div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
<a class="le-button" href="#">add to cart</a>
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
</div>
</div><!-- /.price-area -->
</div><!-- /.row -->
</div><!-- /.product-item -->


<div class="product-item product-item-holder">
<div class="ribbon green"><span>bestseller</span></div>
<div class="row">
<div class="no-margin col-xs-12 col-sm-4 image-holder">
<div class="image">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-02.jpg" />
</div>
</div><!-- /.image-holder -->
<div class="no-margin col-xs-12 col-sm-5 body-holder">
<div class="body">
<div class="label-discount clear"></div>
<div class="title">
<a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
</div>
<div class="brand">sony</div>
<div class="excerpt">
<div class="star-holder">
<div class="star" data-score="4"></div>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
</div>
<div class="addto-compare">
<a class="btn-add-to-compare" href="#">add to compare list</a>
</div>
</div>
</div><!-- /.body-holder -->
<div class="no-margin col-xs-12 col-sm-3 price-area">
<div class="right-clmn">
<div class="price-current">$1199.00</div>
<div class="price-prev">$1399.00</div>
<div class="availability"><label>availability:</label><span class="not-available">out of stock</span></div>
<a class="le-button disabled" href="#">add to cart</a>
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
</div>
</div><!-- /.price-area -->
</div><!-- /.row -->
</div><!-- /.product-item -->


<div class="product-item product-item-holder">
<div class="ribbon red"><span>sell</span></div>
<div class="row">
<div class="no-margin col-xs-12 col-sm-4 image-holder">
<div class="image">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
</div>
</div><!-- /.image-holder -->
<div class="no-margin col-xs-12 col-sm-5 body-holder">
<div class="body">
<div class="label-discount clear"></div>
<div class="title">
<a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
</div>
<div class="brand">sony</div>
<div class="excerpt">
<div class="star-holder">
<div class="star" data-score="2"></div>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
</div>
<div class="addto-compare">
<a class="btn-add-to-compare" href="#">add to compare list</a>
</div>
</div>
</div><!-- /.body-holder -->
<div class="no-margin col-xs-12 col-sm-3 price-area">
<div class="right-clmn">
<div class="price-current">$1199.00</div>
<div class="price-prev">$1399.00</div>
<div class="availability"><label>availability:</label><span class="available">in stock</span></div>
<a class="le-button" href="#">add to cart</a>
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
</div>
</div><!-- /.price-area -->
</div><!-- /.row -->
</div><!-- /.product-item -->

<div class="product-item product-item-holder">
<div class="row">
<div class="no-margin col-xs-12 col-sm-4 image-holder">
<div class="image">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
</div>
</div><!-- /.image-holder -->
<div class="no-margin col-xs-12 col-sm-5 body-holder">
<div class="body">
<div class="label-discount green">-50% sale</div>
<div class="title">
<a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
</div>
<div class="brand">sony</div>
<div class="excerpt">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
</div>
<div class="addto-compare">
<a class="btn-add-to-compare" href="#">add to compare list</a>
</div>
</div>
</div><!-- /.body-holder -->
<div class="no-margin col-xs-12 col-sm-3 price-area">
<div class="right-clmn">
<div class="price-current">$1199.00</div>
<div class="price-prev">$1399.00</div>
<div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
<a class="le-button" href="#">add to cart</a>
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
</div>
</div><!-- /.price-area -->
</div><!-- /.row -->
</div><!-- /.product-item -->

<div class="product-item product-item-holder">
<div class="ribbon green"><span>bestseller</span></div>
<div class="row">
<div class="no-margin col-xs-12 col-sm-4 image-holder">
<div class="image">
<img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-05.jpg" />
</div>
</div><!-- /.image-holder -->
<div class="no-margin col-xs-12 col-sm-5 body-holder">
<div class="body">
<div class="label-discount clear"></div>
<div class="title">
<a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
</div>
<div class="brand">sony</div>
<div class="excerpt">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
</div>
<div class="addto-compare">
<a class="btn-add-to-compare" href="#">add to compare list</a>
</div>
</div>
</div><!-- /.body-holder -->
<div class="no-margin col-xs-12 col-sm-3 price-area">
<div class="right-clmn">
<div class="price-current">$1199.00</div>
<div class="price-prev">$1399.00</div>
<div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
<a class="le-button" href="#">add to cart</a>
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
</div>
</div><!-- /.price-area -->
</div><!-- /.row -->
</div><!-- /.product-item -->

</div><!-- /.products-list -->

<div class="pagination-holder">
<div class="row">
<div class="col-xs-12 col-sm-6 text-left">
<ul class="pagination">
<li class="current"><a  href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">next</a></li>
</ul><!-- /.pagination -->
</div>
<div class="col-xs-12 col-sm-6">
<div class="result-counter">
Showing <span>1-9</span> of <span>11</span> results
</div><!-- /.result-counter -->
</div>
</div><!-- /.row -->
</div><!-- /.pagination-holder -->

</div><!-- /.products-grid #list-view -->

</div><!-- /.tab-content -->
</div><!-- /.grid-list-products -->

</section><!-- /#gaming -->
</div><!-- /.col -->
<!-- ========================================= CONTENT : END ========================================= -->
</div><!-- /.container -->
</section><!-- /#category-grid -->

<?php include "main-files/footer.php"; ?>   