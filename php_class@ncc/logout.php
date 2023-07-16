<?php require('db_connection.php'); ?>

<?php 
if(isset($_SESSION['email'])){
    session_destroy();
    header('Location:login.php');
}
?>
