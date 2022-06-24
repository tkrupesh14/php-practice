<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants in PHP</title>
</head>
<body>
    <?php
        define("Hello", "Hello World!");
        echo Hello. "<br>";

        define("body", [
            "html", 
            "css",
            "javascript"
        ]);
        echo body[1]. "<br>";

        function my_func(){
            echo Hello;
        }

        my_func()
    ?>
</body>
</html>