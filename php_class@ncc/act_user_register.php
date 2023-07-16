<?php require 'db_connection.php'; ?>

<?php 
if(isset($_POST['submit'])){
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];

    // insert query 
    $insert_data="Insert into user (first_name,last_name,email,address,dob,phone_no,gender) values('$first_name','$last_name','$email','$address','$dob','$phone','$gender')";
    // execute query
    if(mysqli_query($con,$insert_data)){
        echo 'data inserted';
    }
    else{
        echo 'failed to insert data';
    }

}
?>