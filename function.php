<?php include "database/db.php"; ?>


<?php 

function getproduct_cat_pro(){
    global $connection;
    
   if(isset($_GET['pro_cat_get'])){
     
   $p_cat_id = $_GET['pro_cat_get'];
       
   $get_p_cat_query = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";    
     $result = mysqli_query($connection,$get_p_cat_query); 
       $row_p_cat = mysqli_fetch_array($result);
       $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];
       
       
       
       $get_product = "SELECT * FROM products WHERE product_Cat_id ='$p_cat_id'";
       $run_get_product = mysqli_query($connection,$get_product);
      $count=mysqli_num_rows($run_get_product );
       if($count==0){
        echo "<h1>No Product Found in This Categories</h1>";   
           
           
       }
       else{
           echo "
           <h1>$p_cat_title</h1>
           <p>$p_cat_desc</p>
           ";
       }
   
   } 
    
    
    
    
}



?>

