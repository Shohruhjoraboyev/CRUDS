<?php

require_once('../connect.php');
$id=$_GET['id'];
$name=$_POST['name'];
$category_id=$_POST['category_id'];
$brand_id=$_POST['brand_id'];
$query=mysqli_query($connect, "UPDATE products SET product_name='$name', category_id='$category_id', brand_id='$brand_id' WHERE products.product_id='$id'");

header("Location: ../")
?>