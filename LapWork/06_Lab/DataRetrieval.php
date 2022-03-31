<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset = "UTF-8">
        <title> Data Retrieval </title>
    </head>
    <body>
<?php
$host_ip = '127.0.0.1';
$username = 'root'; //or the user we have created
$password = "";//root currently has no password and this is wrong
$database = "db_HeshamAltourki";

$conn = mysqli_connect($host_ip, $username, $password, $database);
if(!$conn){
    echo "Debugging errno: ".mysqli_connect_errno();
    echo "<br>";
    echo "Debugging error: ".mysqli_connect_error();
    exit;
    }
    
    $query = "INSERT INTO 'table_01'('col_02', 'col_03', 'col_04') VALUES ('1','test','test')";
    

    if (mysqli_query($conn, $query)) {
    echo "Data has been successfully inserted";
    
    }else {
    echo "Error: ".$query."<br>".mysqli_error($conn);
    }
                
    mysqli_close($conn);
    ?>
    </body>
    </html>    