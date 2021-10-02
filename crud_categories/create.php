<?php

require_once('connect.php');
$name=$_POST['name'];
$query=mysqli_query($connect, "INSERT INTO categories (name) VALUES ('$name')");
header("Location: /crud_categories/");

?>