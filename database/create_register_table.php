<?php require 'database_connection.php' ?>
<?php

$user_create = "Create table users(
    id int auto_increment primary key,
    full_name varchar(24) not null,
    email varchar(50) unique not null,
    password varchar(255) not null
)";

if(mysqli_query($con,$user_create)){
    echo 'user table created successfully <br>';
}
else{
    echo 'Failed to create register_user table';
}

?>