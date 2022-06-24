<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch in PHP</title>
</head>
<body>
    <form action="" method="post">
        <select name="color" id="">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
        </select>

        <input type="submit" value="Choose Color" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $color = $_POST['color'];

        switch($color){
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;

            case "green":
                echo "Your favorite color is green!";
                break;

            case "yellow":
                echo "Your favorite color is yellow!";
                break;

            default:
                echo "Please Choose a color";
                
        }
    }

    ?>
</body>
</html>