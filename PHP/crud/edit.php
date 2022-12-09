<?php

include 'db.php';

$id=$_GET['id'];

$sql="SELECT `name`, `phone`, `password`, `dob` FROM `table1` WHERE id=$id";
$con=$db1->query($sql);
//print_r ($con);
$store=$con->fetch_assoc();

?>
<form action="" method="post">
    <input type="text" name="uname" value="<?php echo $store['name'];?>">
    <input type="text" name="uphone" value="<?php echo $store['phone'];?>">
    <input type="date" name="udob" value="<?php echo $store['dob'];?>">
    
    <input type="submit" name="submit" value="submit">
    
</form>

<?php
if(isset($_POST['submit'])){
    
   // print_r ($_POST);

   extract ($_POST);

   $sql="UPDATE `table1` SET `name`='$uname',`phone`='$uphone',`dob`='$udob' WHERE id=$id";

   // $result=$db1->query($sql);
   if($db1->query($sql)){

    // echo "update success";
    $msg="update success";
   }
   else{
    //echo "update erorr";
    $msg="update erorr";
   }

   header("location:list.php?mse=$msg");
}



?>
