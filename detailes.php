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

<!-- ============================================================= HEADER : END ==================== ========================================= -->

<div id="top-mega-nav">
<div class="container">
<nav>



<?php
if(!isset($_GET['pro_cat_get'])){
if(!isset($_GET['cat_get'])){

echo "";   

}  

}
else{

}    

?>


<!-- ========================================= BREADCRUMB : END ========================================= -->
</div>

<section id="category-grid">
<div class="container">
<!-- ========================================= SIDEBAR ========================================= -->
<div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">




<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown">
<div class="head"><i class="fa fa-list"></i>Product Categories</div>
<nav class="yamm megamenu-horizontal" role="navigation">
<ul class="nav">
<li> <a href="shop.php?pro_cat_get=1">MOTHERBORD </a> </li>  


<li> <a href="shop.php?pro_cat_get=2">MOUSE </a> </li>  


<li> <a href="shop.php?pro_cat_get=3">ANTIVIRUS </a> </li>  


<li> <a href="shop.php?pro_cat_get=4">ROUTERS </a> </li>  


<li> <a href="shop.php?pro_cat_get=5">HDD </a> </li>  


<li> <a href="shop.php?pro_cat_get=6">WIFI_DONGLES </a> </li>  


<li> <a href="shop.php?pro_cat_get=7">KEYBORDS </a> </li>  


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


<li> <a href="shop.php?cat_get=1">Mobile </a> </li>  



<li> <a href="shop.php?cat_get=2">laptops </a> </li>  



<li> <a href="shop.php?cat_get=3">TV </a> </li>  



<li> <a href="shop.php?cat_get=4">AC </a> </li>  


</ul><!-- /.nav -->
</nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->

<br><br>


</div>


<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">



<?php add_to_cart(); ?>
<!--************************8888888MAIN CONTENT IN DETAILS PAGE**************************8-->
<!--///////////////////////////////////////////////////////////////////////////////////////-->

<!-- GET DETAIL THEN SHOW HERE SEPCIFIC PRODUCT DETAIL-->

<?php 

if(isset($_GET['get_d'])){

 $get_id = $_GET['get_d'];

 $show_product = "SELECT * FROM products WHERE product_id='$get_id'"; 
$run_products_query=mysqli_query($connection,$show_product);

 while($row = mysqli_fetch_array($run_products_query)){
 $product_id = $row['product_id'];  
$product_cat_id = $row['product_cat_id']; 

$date = $row['date']; 
 $product_title = $row['product_title']; 
 $product_img1 = $row['product_img1']; 
$product_img2 = $row['product_img2'];
$product_img3 = $row['product_img3'];

$product_prize = $row['product_prize']; 
$product_desc = $row['product_desc']; 
$product_keyword = $row['product_keyword']; 

?>

<div id="single-product" class="row">


<div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
<div class="product-item-holder size-big single-product-gallery small-gallery">





<div id="owl-single-product" class="owl-carousel">

<div class="single-product-gallery-item" id="slide1">
<a data-rel="prettyphoto" href="admin/product_images/<?php echo $product_img1; ?>">
<img class="img-responsive" alt="" src="admin/product_images/<?php echo $product_img1; ?>" data-echo="admin/product_images/<?php echo $product_img1; ?>" />
</a>
</div>

<!-- /.single-product-gallery-item -->
<div class="single-product-gallery-item" id="slide2">
<a data-rel="prettyphoto" href="admin/product_images/<?php echo $product_img2; ?>">
<img class="img-responsive" alt="" src="admin/product_images/<?php echo $product_img2; ?>" data-echo="admin/product_images/<?php echo $product_img2; ?>" />
</a>
</div>
<!-- /.single-product-gallery-item -->
<div class="single-product-gallery-item" id="slide3">
<a data-rel="prettyphoto" href="admin/product_images/<?php echo $product_img3; ?>">
<img class="img-responsive" alt="" src="admin/product_images/<?php echo $product_img3; ?>" data-echo="admin/product_images/<?php echo $product_img3; ?>" />
</a>
</div>


<!-- /.single-product-gallery-item -->
</div>
<!-- /.single-product-slider -->
<div class="single-product-gallery-thumbs gallery-thumbs">
<div id="owl-single-product-thumbnails" class="owl-carousel">
<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
<img width="67" alt="" src="admin/product_images/<?php echo $product_img1; ?>" data-echo="admin/product_images/<?php echo $product_img1; ?>" />
</a>


<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide2">
<img width="67" alt="" src="admin/product_images/<?php echo $product_img2; ?>" data-echo="admin/product_images/<?php echo $product_img2; ?>" />
</a>


<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="2" href="#slide3">
<img width="67" alt="" src="admin/product_images/<?php echo $product_img3; ?>" data-echo="admin/product_images/<?php echo $product_img3; ?>" />
</a>
</div>
<!-- /#owl-single-product-thumbnails -->
<div class="nav-holder left hidden-xs">
<a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
</div>
<!-- /.nav-holder -->
<div class="nav-holder right hidden-xs">
<a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
</div>
<!-- /.nav-holder -->
</div>
<!-- /.gallery-thumbs -->
</div>
<!-- /.single-product-gallery -->
</div>

<!-- /.gallery-holder -->
<div class="no-margin col-xs-12 col-sm-7 body-holder">
<div class="body">
<div class="star-holder inline">
<div class="star" data-score="4"></div>
</div>
<div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>
<div class="title"><a href="#"><?php echo $product_title;  ?></a></div>
<div class="brand"><?php echo $product_keyword; ?></div>
<div class="social-row">
<span class="st_facebook_hcount"></span>
<span class="st_twitter_hcount"></span>
<span class="st_pinterest_hcount"></span>
</div>

<div class="buttons-holder">
<br>
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
<a class="btn-add-to-compare" href="#">add to compare list</a>
</div>
<div class="excerpt">
<p><?php echo $product_desc; ?></p>
</div>
<div class="prices">
<div class="price-current">RS: <?php echo $product_prize; ?></div>
<!--<div class="price-prev">$2199.00</div>-->
</div>

<form action="detailes.php?add_cart=<?php echo $product_id; ?> " method="post">
<div class="qnt-holder">
<div class="le-quantity">

<select name="product_qty" id="" class="form-control">
  <option value="">1</option>  
   <option value="">2</option>  
    <option value="">3</option>  
    <option value="">4</option>  
    <option value="">5</option>  

</select>


</div>
<!--<a id="addto-cart" href="index.php?add_cart=<?php// echo $product_id; ?>" class="le-button huge">add to cart</a>-->

<button class="le-button huge" name="submit" type="sybmit">add to cart</button>


</div>
</form>

<!-- /.qnt-holder -->
</div>
<!-- /.body -->
</div>





<!-- /.body-holder -->
</div>


<?php }} ?>		












<!-- /.row #single-product -->
<!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
<div class="no-container">


<?php
    if(isset($_GET['get_d'])){
        
     $get_desc_id = $_GET['get_d'];
    $get_desc_query = "SELECT * FROM products WHERE product_id='$get_desc_id'"; 
$run_desc_query=mysqli_query($connection,$get_desc_query);

   $result_desc = mysqli_fetch_array($run_desc_query);
   $product_id = $result_desc['product_id'];  
   $product_cat_id = $result_desc['product_cat_id'];      
   $date = $result_desc['date']; 
   $product_title = $result_desc['product_title'];
   $product_prize = $result_desc['product_prize']; 
   $product_desc = $result_desc['product_desc']; 
   $product_keyword = $result_desc['product_keyword'];    
        
 $product_cat_desc = "SELECT * FROM product_categories WHERE p_cat_id='$product_cat_id'";  
   $run_cat = mysqli_query($connection,$product_cat_desc);     
     $row_p_cat = mysqli_fetch_array($run_cat);
        $p_cat_id = $row_p_cat['p_cat_id'];
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

    }
    
    ?>



<div class="tab-holder">
<ul class="nav nav-tabs simple" >
<li class="active"><a href="#description" data-toggle="tab">Description</a></li>
<li><a href="#additional-info" data-toggle="tab">Additional Information</a></li>
<li><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
</ul>
<!-- /.nav-tabs -->
<div class="tab-content">
<div class="tab-pane active" id="description">
<p><?php echo $product_desc; ?></p>
<div class="meta-row">
<div class="inline">
<label>Product ID:<a href="shop.php?pro_cat_get=<?php echo $p_cat_id; ?>">&nbsp;<?php echo $p_cat_id; ?></a></label>



</div>
<!-- /.inline -->
<span class="seperator">/</span>
<div class="inline">
<label>categories:</label>
    <span><a href="shop.php?pro_cat_get=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></span>
<!--
<span><a href="#">gaming</a>,</span>
<span><a href="#">desktop PC</a></span>
-->
</div>
<!-- /.inline -->
<span class="seperator">/</span>
<div class="inline">
<label>tag:</label>
<span><a href="#"><?php echo $product_keyword; ?></a>,</span>
<!--
<span><a href="#">gaming</a>,</span>
<span><a href="#">strong</a></span>
-->
</div>
<!-- /.inline -->
</div>
<!-- /.meta-row -->
</div>
<!-- /.tab-pane #description -->
<div class="tab-pane" id="additional-info">
<ul class="tabled-data">
<li>
<label>weight</label>
<div class="value">7.25 kg</div>
</li>
<li>
<label>dimensions</label>
<div class="value">90x60x90 cm</div>
</li>
<li>
<label>size</label>
<div class="value">one size fits all</div>
</li>
<li>
<label>color</label>
<div class="value">white</div>
</li>
<li>
<label>guarantee</label>
<div class="value">5 years</div>
</li>
</ul>
<!-- /.tabled-data -->
<div class="meta-row">
<div class="inline">
<label>Product ID:<a href="shop.php?pro_cat_get=<?php echo $p_cat_id; ?>">&nbsp;<?php echo $p_cat_id; ?></a></label>
<!--<span>54687621</span>-->
</div>
<!-- /.inline -->
<span class="seperator">/</span>
<div class="inline">


<label>categories:</label>
    <span><a href="shop.php?pro_cat_get=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></span>


</div>
<!-- /.inline -->
<span class="seperator">/</span>
<div class="inline">
<label>tag:</label>
<span><a href="#"><?php echo $product_keyword; ?></a>,</span>
</div>
<!-- /.inline -->
</div>
<!-- /.meta-row -->
</div>
<!-- /.tab-pane #additional-info -->
<div class="tab-pane" id="reviews">
<div class="comments">
<div class="comment-item">
<div class="row no-margin">
<div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
<div class="avatar">
    <img alt="avatar" src="assets/images/default-avatar.jpg">
</div>
<!-- /.avatar -->
</div>
<!-- /.col -->
<div class="col-xs-12 col-lg-11 col-sm-10 ">
<div class="comment-body">
    <div class="meta-info">
        <div class="author inline">
            <a href="#" class="bold">John Smith</a>
        </div>
        <div class="star-holder inline">
            <div class="star" data-score="4"></div>
        </div>
        <div class="date inline pull-right">
            12.07.2013
        </div>
    </div>
    <!-- /.meta-info -->
    <p class="comment-text">
        Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
    </p>
    <!-- /.comment-text -->
</div>
<!-- /.comment-body -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.comment-item -->
<div class="comment-item">
<div class="row no-margin">
<div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
<div class="avatar">
    <img alt="avatar" src="assets/images/default-avatar.jpg">
</div>
<!-- /.avatar -->
</div>
<!-- /.col -->
<div class="col-xs-12 col-lg-11 col-sm-10 ">
<div class="comment-body">
    <div class="meta-info">
        <div class="author inline">
            <a href="#" class="bold">Jane Smith</a>
        </div>
        <div class="star-holder inline">
            <div class="star" data-score="5"></div>
        </div>
        <div class="date inline pull-right">
            12.07.2013
        </div>
    </div>
    <!-- /.meta-info -->
    <p class="comment-text">
        Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
    </p>
    <!-- /.comment-text -->
</div>
<!-- /.comment-body -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.comment-item -->
<div class="comment-item">
<div class="row no-margin">
<div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
<div class="avatar">
    <img alt="avatar" src="assets/images/default-avatar.jpg">
</div>
<!-- /.avatar -->
</div>
<!-- /.col -->
<div class="col-xs-12 col-lg-11 col-sm-10 ">
<div class="comment-body">
    <div class="meta-info">
        <div class="author inline">
            <a href="#" class="bold">John Doe</a>
        </div>
        <div class="star-holder inline">
            <div class="star" data-score="3"></div>
        </div>
        <div class="date inline pull-right">
            12.07.2013
        </div>
    </div>
    <!-- /.meta-info -->
    <p class="comment-text">
        Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
    </p>
    <!-- /.comment-text -->
</div>
<!-- /.comment-body -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.comment-item -->
</div>
<!-- /.comments -->
<div class="add-review row">
<div class="col-sm-8 col-xs-12">
<div class="new-review-form">
<h2>Add review</h2>
<form id="contact-form" class="contact-form" method="post" >
<div class="row field-row">
    <div class="col-xs-12 col-sm-6">
        <label>name*</label>
        <input class="le-input" >
    </div>
    <div class="col-xs-12 col-sm-6">
        <label>email*</label>
        <input class="le-input" >
    </div>
</div>
<!-- /.field-row -->
<div class="field-row star-row">
    <label>your rating</label>
    <div class="star-holder">
        <div class="star big" data-score="0"></div>
    </div>
</div>
<!-- /.field-row -->
<div class="field-row">
    <label>your review</label>
    <textarea rows="8" class="le-input"></textarea>
</div>
<!-- /.field-row -->
<div class="buttons-holder">
    <button type="submit" class="le-button huge">submit</button>
</div>
<!-- /.buttons-holder -->
</form>
<!-- /.contact-form -->
</div>
<!-- /.new-review-form -->
</div>
<!-- /.col -->
</div>
<!-- /.add-review -->
</div>
<!-- /.tab-pane #reviews -->
</div>
<!-- /.tab-content -->
</div>
<!-- /.tab-holder -->






</div>
<!-- /.container -->
</section>
<!-- /#single-product-tab -->

























<!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->
<!-- ========================================= RECENTLY VIEWED ========================================= -->

<!-- /#recently-reviewd -->
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->
</div>



<!--REPLACE CONTENT END-->




</div><!-- /.container -->
</section><!-- /#category-grid -->

<?php include "main-files/footer.php"; ?>   