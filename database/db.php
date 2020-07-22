<?php 

$connection = mysqli_connect('localhost','root','','shreecomputershop');

if(!$connection)
{
    die("QUERY FAILED" . mysqli_error($connection));
}



?>