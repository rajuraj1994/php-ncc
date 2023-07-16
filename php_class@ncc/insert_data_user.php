<?php require 'db_connection.php'; ?>

<?php 
$insert="Insert into user (first_name,last_name,email,address,dob,phone_no,gender) values ('arjun','khatri','arjun@gmail.com','bhaktapur','2000-10-10','+9779823456778','male')";
if(mysqli_query($con,$insert)){
    echo 'data inserted';
}
else{
    echo 'failed to store data';
}

?>