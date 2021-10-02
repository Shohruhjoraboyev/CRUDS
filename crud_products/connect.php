<?php

$connect=mysqli_connect('localhost', 'root', '', 'practice1');
if(!$connect){
    echo "Error connection";
}