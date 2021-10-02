<?php
require_once('../connect.php');
$id=$_POST['id'];
$name=$_POST['name'];

$query=mysqli_query($connect, "UPDATE `categories` SET `name`='$name' WHERE `categories`.`id`='$id'");

header("Location: /crud_categories/")

?>