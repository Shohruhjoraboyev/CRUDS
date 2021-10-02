<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    
    require('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if ($result) {
            $msg="Registered";
        }else {
            $msg="Error";
        }
    }
    
    ?>
    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
        <?php 
           if (isset($msg)) { echo "<div class=\"massage\" > $msg </div>";} 
        ?>

            <input type="text" name="username" class="form-conrol" placeholder="Username" required>
            <input type="email" name="email" class="form-conrol" placeholder="Email" required>
            <input type="password" name="password" class="form-conrol" placeholder="Password" required>
            <button class="register_btn">Register</button>
            <button class="login"><a href="login.php">LogIn</a></button>
        </form>
    </div>
</body>
</html>