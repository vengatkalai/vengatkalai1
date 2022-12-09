<?php
session_start();
ob_start();

if(!isset($_SESSION['id'])){
    header("location:login.php");
}
include 'db.php';
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

<div class="wrapper">

<div class="btn">
<div class="image">
    <img src="<?php echo $_SESSION['image']?>" alt="" srcset="">
</div>

<h1>WELCOME &nbsp; <?php echo $_SESSION['name'];?></h1>
<h2>Email &nbsp; <?php echo $_SESSION['email'];?></h2>

<!-- <button style="height:30px; margin-top:25px;" name=""></button> -->
<a href="logout.php">LOGOUT</a>
</div>
</div>

    
</body>
</html>