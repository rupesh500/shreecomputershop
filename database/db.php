<?php 

$connection = mysqli_connect('localhost','root','','shreecomputershop');

if($connection)
    
{
echo "<h5 class='text-center'>we are connected</h5>";  
}
else{
    die("QUERY FAILED" . mysqli_error($connection));
}



?>