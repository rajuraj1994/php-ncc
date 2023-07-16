<?php require('db_connection.php'); ?>

<?php 
if(isset($_POST['submit'])){
    $name=$_POST['gname'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $desc=$_POST['desc'];
    $mdate=$_POST['mdate'];
    $edate=$_POST['edate'];
    $rating=$_POST['rating'];
    $category=$_POST['category'];
    $img_name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];

    // declare allowed file type
    $allowed=array('jpg','JPG','png','PNG','jpeg','JPEG','jfif','JFIF','gif','GIF');
    // read file extension 
    $ext=pathinfo($img_name,PATHINFO_EXTENSION);
    // specify where to upload image  with new name 
    $newName=sha1(time()).'.'.$ext;
    $folder_name='uploads/goods/'.$newName;
    //file size 
    $file_size=$_FILES['image']['size'];

     // check file type  
     if(!in_array($ext,$allowed)){
        echo 'only image file are accepted';
    }
    //limit file size
    else if($file_size>3000000){
        echo 'file must be less than or equal to 3 mb';
    }
    else{ 
        // insert query 
        $insert="insert into goods (goods_name,price,count_in_stock,description,manufacture_date,expiry_date,category_id,rating,image) values('$name','$price','$stock','$desc','$mdate','$edate','$category','$rating','$newName')";
        if(mysqli_query($con,$insert)){
            move_uploaded_file($tmp_name,$folder_name);
            echo 'goods added';
        }
        else{
            echo 'something went wrong while adding new goods';
        }
    }
}
?>