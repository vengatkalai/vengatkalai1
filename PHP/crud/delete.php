<?php 

include 'db.php';

$id=$_GET['id'];

//$id = base64_decode($_GET['id']);
    $sql = "DELETE FROM `table1` WHERE id=$id";

if(isset($_GET['id'])){
    
    if($db1->query($sql)){
        $msg = "Record deleted successfully";
    } else {
        $msg = "Error: " . $sql . "<br>" . $db1->error;
    }
    header("Location: list.php?mse=$msg");
}

?>