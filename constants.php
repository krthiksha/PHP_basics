<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <h1>Constants using define() function in php</h1>
    <?php
        echo "Normal variable <br>";
        $as = 33;
        echo "before change : " . $as ."<br>";
        $as = 88;
        echo "after change : ". $as ."<br>";

        echo "<br>Constant variable <br>";
        define ("LANGUAGE","PHP");
        echo "before change : " . LANGUAGE ."<br>";
        // $LANGUAGE = "PY";
        define ("LANGUAGE","PY");
        echo "after change : ". LANGUAGE ."<br>";

        echo "<br>Constant variable <br>";
        define ("VERSION","7.4.30");
        echo "PHP VERSION : " . VERSION ."<br>";
       

    ?>
</body>
</html>