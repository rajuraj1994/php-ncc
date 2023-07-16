<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center mt-4">
            <div class="col-5 p-3 shadow-lg">
                <h2 class="text-center text-muted">
                    Login Form
                </h2>
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email'];} ?>" required>
                    <div class="my-2">
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>" required>
                    </div>
                   <div class="mb-2">
                    <input type="checkbox" name="remember" class="form-check-input"> &nbsp;Rememeber Me
                   </div>
                    <div class="mb-2">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>

<?php require 'db_connection.php' ?>

<?php
// start the sesssion
// session_start();

// check if login form is submitted 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = sha1($_POST['pwd']);
    $pwd=$_POST['pwd'];

    // retrive user data by email 
    $select = "select * from register_user where email='$email'";
    $show = mysqli_query($con, $select);
    $count = mysqli_num_rows($show);
    if ($count < 1) {
        echo 'sorry the email you provided not found in our system';
    } else {
        $user = mysqli_fetch_assoc($show);

        // check for password match 
        if ($password === $user['password']) {
            $_SESSION['email']=$user['email'];
            if(!empty($_POST['remember'])){
                setcookie('email',$email,time()+86400);
                setcookie('password',$pwd,time()+86400);
            }
            else{
                setcookie('email','');
                setcookie('password','');
            }
            header('Location:dashboard.php');
        } else {
            echo 'email or password doesnot match <br>';
        }
    }
}

?>