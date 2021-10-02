<?php
require_once('connect.php');
$name=$_POST['name'];
$query=mysqli_query($connect,"INSERT INTO customers (name) VALUES ('$name')");
header("Location:  /crud_customers/");
?>