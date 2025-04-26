<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables in PHP</title>
    </head>
    <body>
        <h1>Variables in PHP</h1>

        <!-- define variable -->
        <?php 
            $name = "Jack"
        ?>

        <!-- acessing variable -->
        <p> => Welcome to <?php echo $name?>'s Blog!! </p>

        <!-- Deleting variable in PHP using 'unset(<var_name>)' function -->
        <?php 
            echo "
             => here we are deleting(or)destroying the '$ name' variable using unset() in php  <br>
             => throws an error while accessing the deleted variable (undefined variable - Error)  <br>
            ";
            // unset($name);   // here we are deleting(or)destroying the $name variable using unset() in php
            echo $name;  // throws an error while accessing the deleted variable (undefined Error)
        ?>

        <!-- data types in PHP -->
        <?php 
            echo "<br><br>
            => In php no need to mention the datatype explicitly --- PHP will automatically recognizes the datatype of the variable
            ";
            $department = 'CSE';
            $passedOutYear = 2022;
            $percent = 45.7;
            echo "<br><br> $name's Department is $department and $passedOutYear passed out. <br>";
            // NOTE: no need to mention the datatype explicitly --- PHP will automatically recognizes the datatype of the variable

            // to get the type of datatype use var_dump() function in PHP
            echo"<br><br>
            => var_dump() -- to get the type of datatype <br>
            ";
            echo "datatype of department is -->    ";
            var_dump($department);
            echo "<br>datatype of passed out year is -->    ";
            var_dump($passedOutYear);
            echo "<br>datatype of percent is -->    ";
            var_dump($percent);
        ?>
    </body>
</html>

