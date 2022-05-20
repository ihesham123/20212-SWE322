<?php require_once('../php/header.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
</head>
<body>
<?php
    include('../config/db_config.php');

    if (isset($_SESSION['id'])) {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $id = $_SESSION['id'];

        echo "<h1>Welcome back $name.</h1><br>
                <h3>Your Email address is: $email <br>
                Your id number is: $id </h3>";

    }else {
        echo "<h3>Please <a href=../www/Login.php>Login</a>.</h3>";
        echo "<h3> Or <a href='../www/reg.php'> Register </a><h3>";
    }
    // close connection
    mysqli_close($conn);
?>
</body>
</html>
