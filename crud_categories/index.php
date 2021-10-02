<?php
require_once('connect.php');

$query=mysqli_query($connect,"SELECT*FROM categories");
$categories=mysqli_fetch_all($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD categories</title>
</head>
<body>
    <h2>CRUD Categories</h2>
    <table> 
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th colspan=2>Action</th>
        </tr>
        <?php
        foreach($categories as $category){
        ?>
        <tr>
            <td><?=$category[0]?></td>
            <td><?=$category[1]?></td>
            <td><a href="update.php?id=<?=$category[0]?>">Edit</a></td>
            <td><a class="delete" href="delete.php?id=<?=$category[0]?>">Del.</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <h2>Creation</h2>
    <form action="create.php" method="post">
        <input type="text" name="name" placeholder="Enter a category name" required>
        <button type="submit">Create</button>
    </form>

</body>
</html>