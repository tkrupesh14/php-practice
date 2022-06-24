<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers In PHP</title>
</head>
<body>
    <?php
    // to check integer number we can use is_int() function
    $x = 10;
    echo "is_int: ";
    echo var_dump(is_int($x))."<br>";

    // to check float number we can use is_float() function
    $y = 10.65;
    echo "is_float: ";
    echo var_dump(is_float($y))." <br>";
    
    // to check infinite number we can use is_float() function
    $z = 4.3e45;
    echo "is_infinite: ";
    echo var_dump($z)." <br>";
    
    // to check NaN number we can use is_NaN() function
    $a = acos(8);
    echo "is_NaN: ";
    echo var_dump(is_NaN($a))." <br>";
    
    // to check Numerical Strings we can use is_numeric() function
    $b = 8;
    echo "is_Numeric: ";
    echo var_dump(is_numeric($b))." <br>";
    $c = "8";
    echo "is_Numeric: ";
    echo var_dump(is_numeric($c))." <br>";
    $d = "8.8";
    echo "is_Numeric: ";
    echo var_dump(is_numeric($d))." <br>";
    $e = "Hello World!";
    echo "is_Numeric: ";
    echo var_dump(is_numeric($e))." <br>";


    ?>
</body>
</html>