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
<ul class="inline">
<!--
<li class="dropdown le-dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-list"></i> shop by department
</a>

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
</li>
-->


<?php
if(!isset($_GET['pro_cat_get'])){
  if(!isset($_GET['cat_get'])){
      
   echo "";   
      
  }  
   
}
else{
  
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




<!-- ========================================= CONTENT ========================================= -->

<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
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



<!--SHOW ALL PRODUCT WHEN CLICJK SHOP IN NAVBAR NOT A CATEGORY-->
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
           
           
    
           
 echo "
 
 
<div class='col-xs-12 col-sm-4 no-margin product-item-holder hover'>
<div class='product-item'>
<div class='ribbon red'><span>sale</span></div>
<div class='image'>
<img alt='' src='admin/product_images/$product_img1' ?>' <data-echo='admin/product_images/ $product_img1 ' />
</div>
<div class='body'>
<div class='label-discount green'>-50% sale</div>
<div class='title'>
<a href=''>$product_title</a>
</div>
<div class='brand'>$product_keyword</div>
</div>
<div class='prices'>
<div class='price-prev'>$1399.00</div>
<div class='price-current pull-right'>RS $product_prize</div>
</div>
<div class='hover-area'>
<div class='add-cart-button'>
<a href='single-product.html' class='le-button'>add to cart</a>
</div>
<div class='wish-compare'>
<a class='btn-add-to-wishlist' href='#'>add to wishlist</a>

</div>
</div>
</div>
</div>




 
 ";
    
           
  }
    
    ?>

</div>
</div>



<br><br><br>
<div class="pagination-holder">
<div class="row">

<div class="col-xs-12 col-sm-6 text-left">
<ul class="pagination ">
<?php
   
 $query = "SELECT * FROM products";
       $select_all = mysqli_query($connection,$query);
       $total_record = mysqli_num_rows($select_all);
       $total_pages=ceil($total_record/$per_page);
       
   echo "
   <li> <a href='shop.php?page=1'>".'first page'."</a> </li>
   
      ";
   
  for($i=1; $i<=$total_pages; $i++){
  
       
  echo "  
        <li> <a href='shop.php?page=".$i."'>".$i."</a> </li>
       
       ";

  }
  
  
        echo "  
        <li> <a href='shop.php?page=$total_pages'>".'Last page'."</a> </li>
       
       ";

  
   
   
   }} ?>




</ul>

 <?php product_found_or_not_when_click_shop();
   getcategory_Data_shop_page(); 
    ?>



</div>

<div class="col-xs-12 col-sm-6">
<div class="result-counter">
Showing <span>1-9</span> of <span>11</span> results
</div>
</div>

</div><!-- /.row -->
</div><!-- /.pagination-holder -->
</div><!-- /.products-grid #grid-view -->




<!--  //////////////////////////////LIST VIEW PRODUCT/////////////////////////////////////////// HERE////////////////////////////////////////////////////////////////////////////////////////-->

<div id="list-view" class="products-grid fade tab-pane ">
<div class="products-list">




<!--SHOW ALL PRODUCT WHEN CLICJK SHOP IN NAVBAR NOT A CATEGORY WHEN LIST VIEW-->
<?php 
    
  if(!isset($_GET['pro_cat_get'])){
   if(!isset($_GET['cat_get'])){
       
   $per_page1 = 6;
       if(isset($_GET['page1'])){
           
      $page1=$_GET['page1'];
     }
       
       else{
           $page1 =1;
       }
       
       $start_fromlist=($page1-1) * $per_page1;
       $get_product_list = "SELECT * FROM products ORDER BY 1 DESC LIMIT $start_fromlist, $per_page1 ";
       $run_product_list = mysqli_query($connection,$get_product_list);
       while($row = mysqli_fetch_array($run_product_list)){
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



<div class="product-item product-item-holder">
<div class="ribbon red"><span>sale</span></div>
<div class="ribbon blue"><span>new!</span></div>
<div class="row">
<div class="no-margin col-xs-12 col-sm-4 image-holder">
<div class="image">
<img alt="" src="admin/product_images/<?php echo $product_img1; ?>" data-echo="admin/product_images/<?php echo $product_img1; ?>" />
</div>
</div><!-- /.image-holder -->
<div class="no-margin col-xs-12 col-sm-5 body-holder">
<div class="body">
<div class="label-discount green">-50% sale</div>
<div class="title">
<a href="single-product.html"><?php echo $product_title; ?></a>
</div>
<div class="brand"><?php echo $product_keyword; ?></div>
<div class="excerpt">
<p><?php echo $product_desc; ?></p>
</div>
<div class="addto-compare">
<!--<a class="btn-add-to-compare" href="#">add to compare list</a>-->
</div>
</div>
</div><!-- /.body-holder -->
<div class="no-margin col-xs-12 col-sm-3 price-area">
<div class="right-clmn">
<div class="price-current">RS:<?php echo $product_prize; ?></div>
<div class="price-prev">$1399.00</div>
<div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
<a class="le-button" href="#">add to cart</a>
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
</div>
</div><!-- /.price-area -->
</div><!-- /.row -->
</div><!-- /.product-item -->


<?php } ?>


</div><!-- /.products-list -->

<div class="pagination-holder">
<div class="row">
<div class="col-xs-12 col-sm-6 text-left">
<ul class="pagination">


<?php
   
 $query = "SELECT * FROM products";
       $select_all_list = mysqli_query($connection,$query);
       $total_record_list = mysqli_num_rows($select_all_list);
       $total_pages_list=ceil($total_record_list/$per_page1);
       
   echo "
   <li> <a href='shop.php?page1=1'>".'first page'."</a> </li>
   
      ";
   
  for($i=1; $i<=$total_pages_list; $i++){
  
       
  echo "  
        <li> <a href='shop.php?page1=".$i."'>".$i."</a> </li>
       
       ";

  }
  
  
        echo "  
        <li> <a href='shop.php?page1=$total_pages_list'>".'Last page'."</a> </li>
       
       ";

  
   
   
   }} ?>















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