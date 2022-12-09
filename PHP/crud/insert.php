<?php
include 'db.php';

// <form action="" method="post">
//     <input type="text" name="qname" placeholder="name">
//     <input type="text" name="qphone" placeholder="phone">
//     <input type="text" name="qpass" placeholder="password">
//     <input type="date" name="dob" placeholder="dob">
//     <input type="submit" name="submit" value="submit">
// </form>


?>

<form action="" method="post">
    <input type="text" name="qname" placeholder="name"><br>
    <input type="text" name="qphone" placeholder="phone"><br>
    <input type="text" name="qpass" placeholder="password"><br>
    <input type="date" name="dob" placeholder="dob"><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit'])){
   // print_r($_POST);
    extract($_POST);
    //print_r($_POST);

    $rrrr =md5('$qpass');
  $sql=  "INSERT INTO `table1`( `name`, `phone`, `password`, `dob`) VALUES ('$qname','$qphone','$rrrr','$dob')";

  if($db1->query($sql)){
    echo "success";
  }
  else{
    echo "erorr";
  }
}


?>