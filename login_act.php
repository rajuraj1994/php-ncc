<?php 
require 'database/database_connection.php';
session_start();
 ?>

<?php

// check if login session is submitted or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $pwd = $_POST['password'];

    $login_attempts = isset($_COOKIE['login_attempts']) ? $_COOKIE['login_attempts'] : 0;
    $login_time = isset($_COOKIE['login_time']) ? $_COOKIE['login_time'] : 0;

    // if there have been 3 or more unsuccessful login attempts in the last 10 minutes, block login
    if ($login_attempts >= 3 && time() - $login_time < 600) {
        ?>
        <script>
            alert('Sorry, you have been blocked from logging in for 10 minutes. Please try again later.')
            window.open('login.php', "_self")
        </script>
        <?php
    } else {
        // retrive user data by email
        $choose = "select * from users where email = '$email'";
        $show = mysqli_query($con, $choose);
        $count = mysqli_num_rows($show);

        if ($count < 1) {
            ?>
            <script>
                alert('Sorry, the email you provided was not found in our system.')
                window.open('login.php', "_self")
            </script>
            <?php
        } else {
            $user = mysqli_fetch_assoc($show);

            // check for password match 
            if ($password === $user['password']) {

                $_SESSION['email'] = $user['email'];

                if (!empty($_POST['remember'])) {
                    setcookie('email', $email, time() + 86400);
                    setcookie('password', $pwd, time() + 86400);
                } else {
                    setcookie('email', '');
                    setcookie('password', '');
                }

                // reset login attempts and time
                setcookie('login_attempts', 0, time() - 3600);
                setcookie('login_time', 0, time() - 3600);

                header('location:home.php');
            } else {
                // increment login attempts and set login time
                $login_attempts++;
                setcookie('login_attempts', $login_attempts, time() + 600);
                if ($login_attempts >= 3) {
                    setcookie('login_time', time(), time() + 600);
                }

                ?>
                <script>
                    alert('Email or Password doesnot match')
                    window.open('login.php', "_self")
                </script>
                <?php
            }
        }
    }
}
?>