<?php require 'database_connection.php' ?>

<?php

$user_create = "Create table counter(
    id int auto_increment primary key,
    counter int not null default 50
                    
)";

if(mysqli_query($con,$user_create)){
    echo 'Visitors table created successfully <br>';
}
else{
    echo 'Failed to create visitors table';
}

?>