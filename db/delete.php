<?php
include "./create_db.php";

$sql = "DELETE from guest where id = 2";
$run = mysqli_query($con, $sql);

if($run){
    echo "<script> alert('Data deleted Successfully')</script>";
}else{
    echo "<script> alert('Something Wrong Occured')</script>";

}
?>