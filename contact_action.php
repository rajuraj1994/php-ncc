<?php 
require 'database_connection.php';
include 'show_message.php';
?>


<?php
if(isset($_POST['submit'])){
$full_name = $_POST['full_name'];
$email=$_POST['email'];
$msg=$_POST['message'];

$sql="INSERT INTO user_message (full_name,email,message) VALUES ( '$full_name','$email','$msg');";
mysqli_query($con,$sql);
header("Location:contact.php?message=success");
}  
?>