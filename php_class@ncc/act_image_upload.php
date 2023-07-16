<?php require 'db_connection.php'; ?>

<?php 
if(isset($_POST['submit'])){
    echo '<pre>';
    print_r($_FILES['img']);
    echo '</pre>';
    $img_name=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];

    // declare allowed file type
    $allowed=array('jpg','JPG','png','PNG','jpeg','JPEG','jfif','JFIF','gif','GIF');
    // read file extension 
    $ext=pathinfo($img_name,PATHINFO_EXTENSION);
    // specify where to upload image  with new name 
    $newName=sha1(time()).'.'.$ext;
    $folder_name='uploads/'.$newName;
    //file size 
    $file_size=$_FILES['img']['size'];
    // check file type  
    if(!in_array($ext,$allowed)){
        echo 'only image file are accepted';
    }
    else if($file_size>3000000){
        echo 'file must be less than or equal to 3 mb';
    }
    else{

    // insert query 
    $insert="Insert into gallery(image) values ('$newName')";
    if(mysqli_query($con,$insert)){

        // upload image to destination 
        if(move_uploaded_file($tmp_name,$folder_name)){
            echo 'image uploaded';

        }
        else{
            echo 'failed to upload image';
        }
    }
}
}

?>