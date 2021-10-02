<?php

require_once('connect.php');
$query=mysqli_query($connect, "SELECT*FROM products");
$products=mysqli_fetch_all($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Products CRUD</title>
</head>
<body>
    <h2>Products CRUD</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category ID</th>
            <th>Brand ID</th>
            <th colspan=2>Action</th>
        </tr>
        <?php
        foreach($products as $product){ ?>
            <tr>
                <td><?=$product[0]?></td>
                <td><?=$product[1]?></td>
                <td><?=$product[2]?></td>
                <td><?=$product[3]?></td>
                <td><a href="update.php?id=<?=$product[0]?>">Update</a></td>
                <td><a class="del" href="delete.php?id=<?=$product[0]?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h2>Create</h2>
    <form action="create.php" method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="category_id" placeholder="Category ID" required>
        <input type="text" name="brand_id" placeholder="Brand ID" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>