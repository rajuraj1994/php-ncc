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
    $id=$_POST['id'];

    // update query 
    $update="Update user set first_name='$first_name',last_name='$last_name',email='$email',address='$address',dob='$dob',phone_no='$phone',gender='$gender' where id='$id'";

    if(mysqli_query($con,$update)){
        echo 'user data updated';
    }
    else{
        echo 'failed to update user data';
    }
}
?>