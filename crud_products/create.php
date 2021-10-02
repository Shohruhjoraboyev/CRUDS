<?php

require_once('connect.php');

$name=$_POST['name'];
$category_id=$_POST['category_id'];
$brand_id=$_POST['brand_id'];
$query=mysqli_query($connect, "INSERT INTO products (product_name, category_id, brand_id) VALUES ('$name', '$category_id', '$brand_id')");

header("Location: /crud_products/");

?>