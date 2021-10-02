<?php

require_once('connect.php');
$id=$_GET['id'];
$query=mysqli_query($connect, "DELETE FROM products WHERE products.product_id='$id'");

header("Location: /crud_products/");

?>