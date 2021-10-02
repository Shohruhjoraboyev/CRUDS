<?php
require_once('connect.php');
$id=$_GET['id'];

$query=mysqli_query($connect, "DELETE FROM `categories` WHERE `categories`.`Id` = '$id'");

header("Location: /crud_categories/")

?>