<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>
<?php include "../database/db.php"; ?>

<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->



    <?php include "admin_navbar.php"; ?>




    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>




        <?php include "admin-left-side-bar.php"; ?>





        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div id="flStackForm" class="col-lg-8 offset-lg-2 mt-5 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-8 col-md-8 col-sm-8 col-12">
                                    <h4>Insert Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">



                            <form action="" method="" enctype="multipart/form-data">

                                <div class="form-group mb-3">
                          
                                    <input type="text" name="product_title" placeholder="Product title" class="form-control">
                                </div>

                               
                               
                                <div class="form-group mb-3">
                                    <select name="product_cat" id="" class="form-control" placeholder="product categories">
                                        <option value="">Select a product Categories</option>
<?php 
         
  $select_product_query = "SELECT * FROM product_categories ";
   $result_product = mysqli_query($connection,$select_product_query); 
     while($row = mysqli_fetch_array($result_product)){
         
        $p_cat_id = $row['p_cat_id'];
         $p_cat_title = $row['p_cat_title'];
         
        echo "<option value='$p_cat_id' $p_cat_title > $p_cat_id) $p_cat_title</option>"; 
    
     }                                   
 ?>
                                   
                                   
                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>







                        </div>
                    </div>
                </div>

            </div>




            <?php include "footer.php"; ?>