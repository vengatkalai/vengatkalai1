<?php

session_start();
ob_start();

$_SESSION['msg']='';

include 'db.php';



if(isset($_POST['submit'])){
    //print_r($_POST);
   // print_r($_FILES);

   extract($_POST);

 
//    echo "<pre>";
//    print_r($_FILES);

//    echo "</pre>";

   

   if($password===$cpassword){

    $file=$_FILES['file']['tmp_name'];
    $fileName = "upload/".time().$_FILES['file']['name'];

    //file format check
    $fileExt = explode('.', $fileName);

   // print_r($fileExt);

    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf','tmp');

    if(in_array($fileActualExt, $allowed)){
        if(move_uploaded_file($file,$fileName)){

           // echo "File uploaded successfully";

          

            $sql="INSERT INTO `table`(`name`, `email`, `password`, `image`) VALUES ('$fname','$mail','$password','$fileName')";

            if($db->query($sql)){
            
                header("location:login.php");
            }else{
                $_SESSION['msg']= "insert error";
            }

        }
        else{
            $_SESSION['msg']= "There was an error uploading your file";
        }
    }
    else{
        $_SESSION['msg']= "You cannot upload files of this type";
    }        

}
else{
    $_SESSION['msg']= "password dos't match";
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


<form action="" method="post" style="margin-top:150px ; "enctype="multipart/form-data">
    <center>
    <h3 class="error"><?php echo $_SESSION['msg'];?></h3>
    <fieldset style="width:300px;">
        <h1>REGISTRATION PAGE</h1>
    <label >Your Name :</label><br>
    <input type="text" name="fname" placeholder="Full Name" id="uname"><br><br>
    <label >Mail Id :</label><br>
    <input type="email" name="mail" placeholder="Mail"><br><br>
    <label >Password:</label><br>
    <input type="password" name="password" placeholder="At least 8 characters"><br><br>
    <label >Confirm Password:</label><br>
    <input type="password" name="cpassword" ><br><br>
    <!-- <label >Upload Photo:</label><br> -->
    <input type="file" name="file" id="images"><br><br>

    <input type="submit" name="submit" value="submit">

    </fieldset>
    </center>
</form>
    
</body>
</html>