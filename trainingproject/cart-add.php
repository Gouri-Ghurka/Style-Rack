<?php
require "includes/common.php";

if(isset($_GET['id'])){
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];

$add_product_query="INSERT INTO users_products(user_id, product_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$add_product_result=mysqli_query($con,$add_product_query) or die(mysqli_error($con));
header('location:products.php');
}
?>