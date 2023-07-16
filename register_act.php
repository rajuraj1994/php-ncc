<?php require 'database/database_connection.php' ?>

<?php 
// $_(any_variable) is global variable 

if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    // check if email or username already exist
    $sql = "SELECT * FROM users where email='$email'";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        ?>
        <script>
            alert('email is already taken')
            window.open('register.php', "_self")
        </script>
        <?php
    } else {

    // insert query 
    $insert_data = "insert into users (full_name,email,password) values (
        '$full_name','$email','$password'
    )";

    // execute query 
    if(mysqli_query($con,$insert_data)){
        echo 'data inserted into the user table';
    }
    else{
        echo 'failed to insert data';
    }
}
}
?>