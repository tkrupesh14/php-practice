<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-practice";

$con  = mysqli_connect($servername, $username, $password, $dbname);

if($con->connect_error){
    echo ("Connection Failed: ". $con->connect_error);

}
else{
    echo("Connected Successfully");
}
?>