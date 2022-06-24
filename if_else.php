<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If...Else in PHP</title>
</head>
<body>
    <?php
        $date = date("H");
        if($date < 20){
            echo "Good Day <br>";
        }else{
            echo "Good Night <br>";
        }


        if($date <10){
            echo "Good Morning! <br>";

        }elseif ($date <20) {
            echo "Good Day! <br>";
        }else{
            echo "Good Night! <br>";
        }
    ?>
</body>
</html>