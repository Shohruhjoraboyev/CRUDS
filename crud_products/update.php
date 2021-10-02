<?php

require_once('connect.php');
$id=$_GET['id'];
$products=mysqli_query($connect, "SELECT*FROM products WHERE products.product_id='$id'");
$products=mysqli_fetch_all($products);


//header("Location: /crud_products/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
<h2>Update</h2>
    <form action="vendor/update.php?id=<?=$id?>" method="post">
        <input type="text" name="name" value="<?=$products[0][1]?>"  required>
        <input type="text" name="category_id" value="<?=$products[0][2]?>" required>
        <input type="text" name="brand_id" value="<?=$products[0][3]?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>