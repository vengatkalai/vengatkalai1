<?php
include 'db.php';

session_start();
ob_start();
$msg='';

if(isset($_POST['submit'])){

extract($_POST);

$sql="SELECT * FROM `table` WHERE email='$email' and password='$password'";

//echo $sql;

$result=$db->query($sql);

if($result->num_rows>0){

    $row=$result->fetch_assoc();
    $un=strtoupper($row['name']);
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$un;
    $_SESSION['image']=$row['image'];
    $_SESSION['email']=$row['email'];

     header("location:home.php");
}else{

    $msg="email or password Error";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<form action="" method="post" style="margin-top:150px ;">
    <center>
    <h3 class="error"><?php echo $msg;?></h3>
    <fieldset style="width:300px;">
        <h1>LOGIN PAGE</h1>
    <label >Mail Id:</label><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <label >Password:</label><br>
    <input type="password" name="password" placeholder="Enter your Password "><br><br>

    <input type="submit" name="submit" ><br><br>
    <span ><a href="reg.php">New User? Register Here</a></span>

    </fieldset>
    </center>

</form>
    
</body>
</html>