<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>file upload</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="upload">

    </form>
    <pre>
<?php 
if(isset($_POST['submit'])){
    //print_r($_POST);
   // print_r($_FILES);

    $file=$_FILES['file']['tmp_name'];
    $fileName = "upload/".time().$_FILES['file']['name'];

    //file format check
    $fileExt = explode('.', $fileName);

   // print_r($fileExt);

    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if(move_uploaded_file($file,$fileName)){
            echo "File uploaded successfully";
        }else{
            echo "There was an error uploading your file";
        }
    }else{
        echo "You cannot upload files of this type";
    }        

}

?>
</pre>

</body>
</html>