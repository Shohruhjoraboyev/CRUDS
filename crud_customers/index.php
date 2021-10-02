<?php

require_once('connect.php');
$query=mysqli_query($connect, "SELECT*FROM customers");
$customers=mysqli_fetch_all($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Customers CRUD</title>
</head>
<body>
    <h2>Customers CRUD</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th colspan=2>Action</th>
        </tr>
        <?php
        foreach($customers as $customer){
        ?>
        <tr>
            <td><?=$customer[0]?></td>
            <td><?=$customer[1]?></td>
            <td><a href="update.php?id=<?=$customer[0]?>">Update</a></td>
            <td><a class="del" href="Delete.php?id=<?=$customer[0]?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>   
    <h2>Creation</h2>
    <form action="create.php" method="post">
        <input type="text" name="name" placeholder="Enter a customer name" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>