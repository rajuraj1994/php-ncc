<?php  require('db_connection.php'); ?>

<?php
$sql_create=" create table visitors(
    id int auto_increment primary key,
    counter int not null default 100
)";
if(mysqli_query($con,$sql_create)){
    echo 'visitors table created successfully';
}
else{
    echo 'failed to create visitors table';
}
?>