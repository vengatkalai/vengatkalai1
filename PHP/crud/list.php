<?php 
include 'db.php';


?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Dob</th>
        <th>Action</th>
        <th>Action</th>
    </tr>


<?php 
$pp="SELECT * FROM `table1`";

$qq=$db1->query($pp);

//print_r($qq);



if($qq->num_rows>0){
     


    while($row=$qq->fetch_assoc()){
        echo "<tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[phone]</td>
        <td>$row[dob]</td>
        <td><a href='edit.php?id=$row[id]'>Edit </a></td>
        <td><a href='delete.php?id=$row[id]'>Delete</a></td>
        </tr>";

    }
}

?>
</table>

<?php
if(isset($_GET['mse'])){

    echo $_GET['mse'];
}
?>