<?php
include "./create_db.php";

$sql = "UPDATE guest SET lastname='vithlani' where id = 1";
$run = mysqli_query($con, $sql);

if($run){
    echo "<script> alert('Data updated Successfully')</script>";
}else{
    echo "<script> alert('Something Wrong Occured')</script>";

}
?>