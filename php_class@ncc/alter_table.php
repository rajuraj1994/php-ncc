<?php require('db_connection.php'); ?>

<?php 
$alter="alter table goods add column image varchar(255)";
if(mysqli_query($con,$alter)){
    echo 'goods table altered';
}
else{
    echo 'failed to add column in goods table';
}

?>