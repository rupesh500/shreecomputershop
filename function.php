<?php include "database/db.php"; ?>


<?php 

function product_found_or_not_when_click_shop(){  
global $connection;
if(isset($_GET['pro_cat_get'])){ 

$p_cat_id = $_GET['pro_cat_get'];

$get_p_cat_query = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";    
$result = mysqli_query($connection,$get_p_cat_query); 
$row_p_cat = mysqli_fetch_array($result);
$p_cat_title = $row_p_cat['p_cat_title'];
$p_cat_desc = $row_p_cat['p_cat_desc'];
$get_product = "SELECT * FROM products WHERE product_cat_id ='$p_cat_id'";
$run_get_product = mysqli_query($connection,$get_product);
$count=mysqli_num_rows($run_get_product );
if($count==0)
{
echo "<h1>No Product Found in This Categories</h1>";   

}
else{

echo "
<h1>$p_cat_title</h1>
<p  style='padding: 0px 10px 0px 10px;'>$p_cat_desc</p>
<br>
";
}
    
while($row_products = mysqli_fetch_array($run_get_product)){
  $product_id = $row_products['product_id'];  
    $product_cat_id = $row_products['product_cat_id']; 
    $cat_id = $row_products['cat_id']; 
    $date = $row_products['date']; 
    $product_title = $row_products['product_title']; 
    $product_img1 = $row_products['product_img1']; 
    $product_img2 = $row_products['product_img2'];
    $product_img3 = $row_products['product_img3'];
    
    $product_prize = $row_products['product_prize']; 
    $product_desc = $row_products['product_desc']; 
     $product_keyword = $row_products['product_keyword']; 
    
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
    
    
  

} 

}




//GET CATEGORIES DATA TO SHOP AND SHOW

function getcategory_Data_shop_page(){
    global $connection;
    
  if(isset($_GET['cat_get'])){
 $cat_id = $_GET['cat_get'];    
 
   $category_query = "SELECT * FROM categories WHERE cat_id='$cat_id'";
      $category_result = mysqli_query($connection,$category_query);
      $rowcat=mysqli_fetch_array($category_result);
      $cat_title =$rowcat['cat_title'];
       $cat_desc =$rowcat['cat_desc']; 
     $select_product_query = "SELECT * FROM products WHERE cat_id='$cat_id'"; 
      $run_products=mysqli_query($connection,$select_product_query);
      $count = mysqli_num_rows($run_products);
    
  if($count==0)
{
echo "<h1>No Product Found in This Categories</h1>";   

}
else{

echo "
<h1>$cat_title</h1>
<p  style='padding: 0px 10px 0px 10px;'>$cat_desc</p>
<br>
";
}
    
while($row_productsc = mysqli_fetch_array($run_products)){
  $product_id = $row_productsc['product_id'];  
    $product_cat_id = $row_productsc['product_cat_id']; 
    $cat_id = $row_productsc['cat_id']; 
    $date = $row_productsc['date']; 
    $product_title = $row_productsc['product_title']; 
    $product_img1 = $row_productsc['product_img1']; 
    $product_img2 = $row_productsc['product_img2'];
    $product_img3 = $row_productsc['product_img3'];
    
    $product_prize = $row_productsc['product_prize']; 
    $product_desc = $row_productsc['product_desc']; 
     $product_keyword = $row_productsc['product_keyword']; 
    
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


} 

}    
      


?>

