
           
           
            <div id="products-tab" class="wow fadeInUp">
                <div class="container">
                    <div class="tab-holder">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" >
<!--                            <li class="active"><a href="#featured" data-toggle="tab">Product</a></li>-->
<!--
                            <li><a href="#new-arrivals" data-toggle="tab">new arrivals</a></li>
                            <li><a href="#top-sales" data-toggle="tab">top sales</a></li>
-->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="featured">
                                <div class="product-grid-holder">
                                   
                                   
                                   
        
 <?php 
$show_all = "SELECT * FROM products";
  $result_product = mysqli_query($connection,$show_all);              
   while($row = mysqli_fetch_assoc($result_product)){
       $product_id = $row['product_id'];
   $product_cat_id = $row['product_cat_id'];
            $product_title = $row['product_title'];
            $product_img1 = $row['product_img1'];
            $product_img2 = $row['product_img2'];
            $product_img3 = $row['product_img3'];
            $product_prize = $row['product_prize'];
        $product_desc = $row['product_desc'];
        $product_keyword = $row['product_keyword'];
                   
  ?>                                  
                                                              
 
       
       
       
       
<div class="col-sm-3 col-md-3 col-lg-3 no-margin product-item-holder hover main-boxes">


<div class="product-item">
<div class="ribbon red"><span>sale</span></div>
<div class="image">

<!--<img src="admin/product_images/<?php// echo $product_img2;  ?>" alt="">-->
<img class="main-content-img" alt="" src="admin/product_images/<?php echo $product_img1;  ?>" data-echo="admin/product_images/<?php echo $product_img1;  ?>" />
</div>



<div class="body">
<div class="label-discount green">-50% sale</div>
<div class="title">
<a href="single-product.html"><?php echo $product_title; ?></a>
</div>


<div class="brand">Sony</div>



</div>
<div class="prices">
<div class="price-prev" style="visibility:hidden;">$1399.00</div>
<div class="price-current pull-right">Rs:<?php echo $product_prize; ?></div>
</div>

<div class="hover-area">
<div class="add-cart-button">

 <a class="le-button" href="detailes.php?get_d=<?php echo $product_id; ?>"> add to cart</a>
<!--<a href="detailes.php?get_d=$product_id" class="le-button">add to cart</a>-->
</div>
<div class="wish-compare">
<a class="btn-add-to-wishlist" href="#">add to wishlist</a>
<!--<a class="btn-add-to-compare" href="#">compare</a>-->
</div>
</div>
</div>
</div>
                                   
 <?php } ?>                                   
                                    
                                    
<!--
                                    <div class="col-sm-3 col-md-3 col-lg-3 no-margin product-item-holder hover main-boxes">
                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-02.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">White lumia 9001</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
-->
                                    
                                    
                                    
                                    
<!--
                                    <div class="col-sm-3 col-md-3 col-lg-3 no-margin product-item-holder hover main-boxes">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
-->
                                    
                                    
                                    
<!--
                                    <div class="col-sm-3 col-md-3 col-lg-3 no-margin product-item-holder hover main-boxes">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">Netbook Acer TravelMate
                                                        B113-E-10072</a>
                                                </div>
                                                <div class="brand">acer</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
-->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
<!--                                    5th column-->

<!--
                                    <div class="col-sm-3 col-md-3 col-lg-3  no-margin product-item-holder hover main-boxes">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    
-->
                                    
                           <!--                                    6th column-->

<!--
                                    <div class="col-sm-3 col-md-3 col-lg-3  no-margin product-item-holder hover main-boxes">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>             
-->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
<!--
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>
-->

                            </div>
                            <div class="tab-pane" id="new-arrivals">
                                <div class="product-grid-holder">

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-02.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">White lumia 9001</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">Netbook Acer TravelMate
                                                        B113-E-10072</a>
                                                </div>
                                                <div class="brand">acer</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
<!--
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>
-->

                            </div>

                            <div class="tab-pane" id="top-sales">
                                <div class="product-grid-holder">

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">Netbook Acer TravelMate
                                                        B113-E-10072</a>
                                                </div>
                                                <div class="brand">acer</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-02.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">White lumia 9001</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            

            <!-- ========================================= BEST SELLERS ========================================= -->
            <section id="bestsellers" class="color-bg wow fadeInUp">
                <div class="container">
                    <h1 class="section-title">Best Sellers</h1>

                    <div class="product-grid-holder medium">
                        <div class="col-xs-12 col-md-7 no-margin">

                            <div class="row no-margin">
                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-05.jpg" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">beats studio headphones official one</a>
                                            </div>
                                            <div class="brand">beats</div>
                                        </div>
                                        <div class="prices">

                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-item-holder -->

                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-06.jpg" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">playstasion 4 with four games and pad</a>
                                            </div>
                                            <div class="brand">acer</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-item-holder -->

                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-07.jpg" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">EOS rebel t5i DSLR Camera with 18-55mm IS STM lens</a>
                                            </div>
                                            <div class="brand">canon</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-item-holder -->
                            </div><!-- /.row -->

                            <div class="row no-margin">

                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-08.jpg" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">fitbit zip wireless activity tracker - lime</a>
                                            </div>
                                            <div class="brand">fitbit zip</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-item-holder -->

                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-09.jpg" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">PowerShot elph 115 16MP digital camera</a>
                                            </div>
                                            <div class="brand">canon</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-item-holder -->

                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-10.jpg" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">netbook acer travelMate b113-E-10072</a>
                                            </div>
                                            <div class="brand">acer</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.product-item-holder -->

                            </div><!-- /.row -->
                        </div><!-- /.col -->
                        <div class="col-xs-12 col-md-5 no-margin">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-rel="prettyphoto" href="assets/images/products/product-gallery-01.jpg">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->

                                    <div class="single-product-gallery-item" id="slide2">
                                        <a data-rel="prettyphoto" href="assets/images/products/product-gallery-01.jpg">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->

                                    <div class="single-product-gallery-item" id="slide3">
                                        <a data-rel="prettyphoto" href="assets/images/products/product-gallery-01.jpg">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                </div><!-- /.single-product-slider -->

                                <div class="gallery-thumbs clearfix">
                                    <ul>
                                        <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider" data-slide="0" href="#slide1"><img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" /></a></li>
                                        <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="1" href="#slide2"><img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" /></a></li>
                                        <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="2" href="#slide3"><img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" /></a></li>
                                    </ul>
                                </div><!-- /.gallery-thumbs -->

                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">CPU intel core i5-4670k 3.4GHz BOX B82-12-122-41</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices text-right">
                                    <div class="price-current inline">$1199.00</div>
                                    <a href="cart.html" class="le-button big inline">add to cart</a>
                                </div>
                            </div><!-- /.product-item-holder -->
                        </div><!-- /.col -->

                    </div><!-- /.product-grid-holder -->
                </div><!-- /.container -->
            </section><!-- /#bestsellers -->
            <!-- ========================================= BEST SELLERS : END ========================================= -->

