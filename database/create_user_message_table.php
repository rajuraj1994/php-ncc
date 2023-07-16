<?php require 'database_connection.php' ?>
<?php

$user_create = "Create table user_message(
    id int auto_increment primary key,
    full_name varchar(24) not null,
    email varchar(50) not null,
    message text not null
)";

if(mysqli_query($con,$user_create)){
    echo 'user_message table created successfully <br>';
}
else{
    echo 'Failed to create user_message table';
}

?>