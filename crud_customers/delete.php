<?php
require_once('connect.php');
$id=$_GET['id'];
$query=mysqli_query($connect, "DELETE FROM customers WHERE customers.id='$id'");

header("Location:  /crud_customers/");
?>