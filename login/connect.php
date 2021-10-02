<?php

$connection=mysqli_connect('localhost','root','');
$slct_db=mysqli_select_db($connection,'practice1');
$query = mysqli_query($connection,$slct_db);


?>