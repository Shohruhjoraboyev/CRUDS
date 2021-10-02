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
    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Log In</h2>
            <input type="text" name="username" class="form-conrol" placeholder="Username" required>
            <input type="password" name="password" class="form-conrol" placeholder="Password" required>
            <button class="register_btn">LogIn</button>
            <button class="login"><a href="index.php">Register</a></button>
        </form>
    </div>

    <?php
  
    session_start();
    require('connect.php');

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
    
        $query = "SELECT*FROM users WHERE username='$username' AND password='$password' ";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection)) ;
        $count=mysqli_num_rows($result);
        if ($count==1) {
            $_SESSION['username']=$username;
        }else {
            echo "Error";
        }
        if(isset( $_SESSION['username'])){
            $username=$_SESSION['username'];
            echo "Hello, ". $username;
            echo "You logged in!";
           
        }
    }
    
    ?>
</body>
</html>