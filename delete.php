<?php
include 'connect.php';
if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query=mysqli_query($conn,"Delete from `products` where id=$delete_id") or
    die("Query failed");
    if($delete_query){
        echo "product deleted ";
         header('location:view_product.php');
    }else{
        echo "product not deleted";
        header('location:view_product.php');
    }
}
?>