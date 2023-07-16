<?php require 'database_connection.php' ?>
<?php

$user_create = "Create table pitch_info(
    id int auto_increment primary key,
    pitch_name varchar(50) NOT NULL,
    location varchar(100) NOT NULL,
    description text NOT NULL,
    image varchar(255) NOT NULL,
    price int NOT NULL,
    pitch_type varchar(100) NOT NULL
)";

if(mysqli_query($con,$user_create)){
    echo 'pitch info table created successfully <br>';
}
else{
    echo 'Failed to create pitch info table';
}

?>