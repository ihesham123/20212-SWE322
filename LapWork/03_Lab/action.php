
<?php
     //require 'Cal_php.php';

    $value_1 = $_GET["first value"];
    $value_2 = $_GET["second value"];
    $value_3 = $_GET["sign"];

       if ($value_3 == "+"){
           echo $value_1 + $value_2;

           
       } else if ($value_3 == "-"){
        echo $value_1 - $value_2;
           
       } else if ($value_3 == "*") {
        echo $value_1 * $value_2;

       } else if ($value_3 == "/") {
        echo $value_1 / $value_2;

       }


?>