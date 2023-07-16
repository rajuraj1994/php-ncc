<?php require 'db_connection.php'; ?>

<?php 
if(isset($_POST['submit'])){
    $category=$_POST['category'];

    // insert query 
    $insert="insert into category (category_name) values('$category')";
    if(mysqli_query($con,$insert)){
        echo 'category inserted';
    }
    else{
        echo 'failed to insert category';
    }
}
?>