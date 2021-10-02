<?php
require_once('connect.php');
$id=$_GET['id'];
$query=mysqli_query($connect,"SELECT*FROM categories where categories.id='$id'");
$name=mysqli_fetch_all($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Updating</title>
</head>
<body>
<h2>Updating</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?=$name[0][0]?>">
        <input type="text" name="name" value="<?=$name[0][1]?>" required>
        <button type="submit">Update</button>
    </form>
    
</body>
</html>