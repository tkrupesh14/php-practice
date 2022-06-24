<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each loop in php</title>
</head>
<body>
    <?php
    $x = array(10,20,30,40,50);
    
    foreach ($x as $key=>$value){
        echo "The Value is: ".$value.",".$key."<br>";
    }
    ?>
</body>
</html>