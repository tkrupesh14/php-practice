<?php
include "./create_db.php";

$sql = "INSERT INTO guest (firstname, lastname, email) VALUES ('Krupesh', 'Tank', 'krupeshtank@gmail.com')";
$run = mysqli_query($con, $sql);

if($run){
    echo "<script> alert('Data Inserted Successfully')</script>";
}else{
    echo "<script> alert('Something Wrong Occured')</script>";

}
?>