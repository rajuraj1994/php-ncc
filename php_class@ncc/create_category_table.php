<?php require 'db_connection.php'; ?>

<?php 
$create="create table category(
    id int auto_increment primary key,
    category_name varchar(100) not null
)";

if(mysqli_query($con,$create)){
    echo 'category table created';
}
else{
    echo 'failed to create category table';
}
?>