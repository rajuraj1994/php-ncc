<?php require 'db_connection.php';?>

<?php 
if(isset($_GET['ID'])){
    $id=$_GET['ID'];

    // delete query 
    $delete="Delete from user where id='$id'";
    if(mysqli_query($con,$delete)){
        echo 'user deleted';
    }
    else{
        echo 'failed to delete user';
    }

}
?>