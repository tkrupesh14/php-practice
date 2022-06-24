<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions In PHP</title>
</head>
<body>
    <?php
    function my_func(){
        echo "Hello World! <br>";
    }
    my_func();

    function name($name){
       
        return "your name is ".$name."<br>";
    }
    echo name("John Tank");
    echo name("Harshit Deny");
    echo name("Alexa Vithlani");
    ?>
</body>
</html>