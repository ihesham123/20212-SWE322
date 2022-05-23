<?php
    require_once('../php/header.php');
    include('../config/db_config.php');

    // values from the user input in the form
    $full_name =  $_POST['full_name'];
    $email = $_POST['email'];
    $user_pword =  password_hash($_POST['user_pword'], PASSWORD_DEFAULT);

    // find user with matching email and verify
    $query = "SELECT * from user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    // check connection and perform query to check if email already exist or not
    if(mysqli_num_rows($result) == 0){
        add_user($conn, $full_name, $email, $user_pword);
    }else {
        echo "<h1>Email already registered</h1>"; 
        echo "<h3>Go to the <a href='../www/login.php'>Login</a> page to sign in</h3>";
        echo "<h3> Or <a href='../www/reg.php'> Register </a> with different Email<h3>";
    }
    
    // insert into table "user"
    function add_user($conn, $un, $em, $pw){
        $stmt = $conn->prepare('INSERT INTO user (full_name, email, user_pword) VALUES(?,?,?)');
        $stmt->bind_param('sss', $un, $em, $pw);
        $stmt->execute();
        echo "<h1>Registered Successfully</h1>"; 
        echo "<h3>Go to the <a href='../www/login.php'>Login</a> page to sign in </h3>";
        $stmt->close();
    }

    // Close connection
    mysqli_close($conn);
?>