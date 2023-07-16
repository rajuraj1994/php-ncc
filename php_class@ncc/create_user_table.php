<?php  require 'db_connection.php'; ?>
<?php
$sql_create=" Create table user(
    id int auto_increment primary key,
    first_name varchar(30) not null,
    last_name varchar(30) not null,
    email varchar(50) unique not null,
    address varchar(50) not null,
    dob date not null,
    phone_no varchar(20) not null,
    gender  varchar(10) not null
)";

if(mysqli_query($con,$sql_create)){
    echo 'user table created successfully';
}
else{
    echo 'failed to create user table';
}

?>