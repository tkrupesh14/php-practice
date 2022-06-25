<table border="1">
<thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
</thead>
<?php
include "./create_db.php";

$sql = "SELECT * FROM guest";
$run = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($run)){
    ?>

    <tr>
        <td><?= $row["id"]?></td>
        <td><?= $row["firstname"]?></td>
        <td><?= $row["lastname"]?></td>
        <td><?= $row["email"]?></td>
    </tr>
    
    <?php
}
?>
</table>

<!-- select data using where -->
<table border="1">
<thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
</thead>
<?php

$sql = "SELECT * FROM guest WHERE id = 1";
$run = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($run)){
    ?>

    <tr>
        <td><?= $row["id"]?></td>
        <td><?= $row["firstname"]?></td>
        <td><?= $row["lastname"]?></td>
        <td><?= $row["email"]?></td>
    </tr>
    
    <?php
}
?>
</table>