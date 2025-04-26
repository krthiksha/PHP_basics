<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypes in PHP</title>
</head>
<body>
    <h1>DataTypes in PHP</h1>
    <?php
    /*
        various datatype in php:
            int
            float
            boolean
            string
            null
            array
            object
    */
    // Integer
    $number = 89;
    var_dump($number);
    echo " --- integer <br>";
    
    // string
    $name = "john";
    var_dump($name);
    echo " --- string <br>";
    
    // boolean
    $is_eligible = TRUE;
    var_dump($is_eligible);
    echo " --- boolean <br>";

    // float
    $percent = 34.6;
    var_dump($percent);
    echo " --- float <br>";

    // null
    $default_val = NULL;
    var_dump($default_val);
    echo " --- null <br>";


    // defining other values in PHP
    echo "<br>";
    // OCTAL value -- 8
    $a = 010;
    var_dump($a);
    echo " --- octal <br>";
    // Hexadecimal value -- 1500
    $b = 0x5dc;
    var_dump($b);
    echo " --- hexa decimal <br>";
    // scientific notation -- 690
    $c = 6.9E+2;
    var_dump($c);
    echo " --- scientific notation <br>";

    // Maximum values of datatype 
    echo "<br>";
    echo "Integer max value : ". PHP_INT_MAX;   //  .  --> is concatenation operator
    echo "<br>";
    echo "float max value : ". PHP_FLOAT_MAX;

    // Type Convertion in PHP 
    // converting float into integer
    echo "<br><br>";
    $speed = 88.4568;
    echo "speed before conversion: $speed  <br>";
    $newSpeed = (integer) $speed;
    echo "speed after conversion: $newSpeed  <br>";

    // converting integer into float
    echo "<br>";
    $age = 23;
    echo "age before conversion: $age  <br>";
    $newAge = (float) $age;
    echo "age after conversion: $newAge  <br>";
    /*  Important Note:
    Even though $newAge is a float (23.0 internally), when you echo it, **PHP hides .0**
    " if it's a whole number. (That's why it still displays 23instead of23.0`.) */
    printf("Age after conversion (showing as float value): %.1f<br>", $newAge);


    // Methods for datatypes in PHP
    echo "<br> check the string if yes --- 1 , no --- empty <br>";
    // to check the string 
    $str_1 = "welcome";
    echo "$str_1 is String: ".is_string($str_1) ."<br>";
    $str_2 = "23.44";
    echo "str($str_2) is String: ".is_string($str_2) ."<br>";
    $data_1 = 579.67;
    echo "$data_1 is String: ".is_string($data_1) ."<br>";
    // other methods to check other datatypes 
    /* 
        is_string()
        is_bool()
        is_int()
        is_float()
        is_null()
        is_numeric()
        is_array()
        is_object()
    */

    // to get the name of datatype -- use gettype() in php 
    echo "<br> type of 'welcome' :". gettype('welcome') ."<br>";
    echo "type of '34' :". gettype(34) ."<br>";
    echo "type of '456.22' :". gettype(456.22) ."<br>";
    echo "type of 'False' :". gettype(False) ."<br>";
    echo "type of 'null' :". gettype(null) ."<br>";
    echo "type of '[4,5,7]' :". gettype([4,5,7]) ."<br>";


    ?>
</body>
</html>