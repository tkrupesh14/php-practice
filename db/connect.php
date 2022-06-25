<?php
$servername = "localhost";
$username = "root";
$password = "";

$con  = mysqli_connect($servername, $username, $password);

if($con->connect_error){
    echo ("Connection Failed: ". $con->connect_error);

}
else{
    echo("Connected Successfully");
}
?>