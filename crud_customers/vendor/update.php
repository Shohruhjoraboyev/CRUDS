<?php
require_once('../connect.php');
$id=$_POST['id'];
$name=$_POST['name'];
mysqli_query($connect, "UPDATE customers SET name='$name' WHERE customers.id='$id'");

header("Location:  ../");
?>