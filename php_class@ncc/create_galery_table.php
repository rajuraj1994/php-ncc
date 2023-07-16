<?php require 'db_connection.php';?>

<?php 
$create_gallery="Create table gallery(
    id int auto_increment primary key,
    image varchar(255) not null
)";
if(mysqli_query($con,$create_gallery)){
    echo 'gallery table created';
}
else{
    echo 'failed to create gallery table';
}
?>
