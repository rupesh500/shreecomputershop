<?php include "database/db.php"; ?>


<?php 

//function getproduct_cat_pro(){
//    global $connection;
//    
//   if(isset($_GET['pro_cat_get'])){
//     
//   $p_cat_id = $_GET['pro_cat_get'];
//       
//   $get_p_cat_query = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";    
//     $result = mysqli_query($connection,$get_p_cat_query); 
//       $row_p_cat = mysqli_fetch_array($result);
//       $p_cat_title = $row_p_cat['p_cat_title'];
//        $p_cat_desc = $row_p_cat['p_cat_desc'];
//       
//       
//       
//       $get_product = "SELECT * FROM products WHERE product_Cat_id ='$p_cat_id'";
//       $run_get_product = mysqli_query($connection,$get_product);
//      $count=mysqli_num_rows($run_get_product );
//       if($count==0){
//        echo "<h1>No Product Found in This Categories</h1>";   
//           
//           
//       }
//       else{
//           echo "
//           <h1>$p_cat_title</h1>
//           <p>$p_cat_desc</p>
//           ";
//       }
//   
//   } 
//    
//    
//    
//    
//}

//QUERY FOR SHOW PRODUCT WHEN CLICKJ CATEGORI THEN SHO THIS PRODUCT IN SHOP PAGE ALL POST THIS CATEGORIES ID 

//function fetch_category_shop(){
//    global $connection;
//    
//   if(isset($_GET['pro_cat_get'])){
//     $get_cat_id = $_GET['pro_cat_get']; 
//       
//       $show_query = "SELECT * FROM categories WHERE cat_id='$get_cat_id'";
//       $result_cat = mysqli_query($connection,$show_query);
//       $countresult = mysqli_fetch_array($result_cat);
//       $cat_title = $countresult['cat_title'];
//        $cat_desc = $countresult['cat_desc'];
//       
//$get_product = "SELECT * FROM products WHERE cat_id='$get_cat_id'"; 
//       $get_product_result = mysqli_query($connection,$query);
//      while($row = mysqli_fetch_array($get_product_result)){
//       
//          
//          
//        $product_id = $_row['product_id']; 
//    
//      	$product_cat_id = $_row['product_cat_id']; 
//      $cat_id = $_row['cat_id'];
//              $date = $_row['date']; 
//     
//      $product_title = $_row['product_title']; 
//      $product_img1 = $_row['product_img1']; 
//            $product_prize = $_row['product_prize']; 
//            $product_desc = $_row['product_desc']; 
//      $product_keyword = $_row['product_keyword'];   
//  
//          
//      }
//       
//       
//       
//       
//   } 
//    
//}






?>

