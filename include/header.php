<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <!-- bootstrap css external link -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- boxicons css link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>wscw</title>
</head>

<body>
    <!-- Navbar Start -->
    <header>
        <div>
            <a href="home.php"><img class="logo" src="./assets/images/logo.png" alt="Wild swimming and camping site"
                    width="80"></a>

        </div>
        <div class="phone-action">
            <span><i class='bx bx-phone'></i>+977-9745372456</span>
        </div>
        <div class="search-form" role ="search">
            <form action="search_pitch_result.php" method="post">
                <input type="search" name="search" id="search" placeholder="search here....." required>
            </form>
        </div>
        <div class="user">
        <?php 
        session_start();
        if(isset($_SESSION['email'])){
          ?>
          <a href="logout.php" class="btn btn-danger px-4 rounded-pill">Logout</a>
          <?php
        }
          else{ ?>
            <a href="login.php" class="btn btn-info px-4 rounded-pill">Login</a>
            <a href="register.php" class="btn btn-success px-4 rounded-pill">Signup</a>
            <?php 
          }
          ?>
        </div>

    </header>
    <!-- start of nav -->
    <nav>
        <ul class="navbar-menu">
            <li class="nav-item">
                <a class="nav-link" href="home.php"> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="information.php"> Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pitchtype.php">Pitch Types and Availability</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reviews.php"> Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="features.php"> Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"> Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="localattraction.php"> Local Attractions</a>
            </li>
        </ul>
    </nav>
    <!-- Navbar end -->


    <!-- search code start -->
    <?php require "./database/database_connection.php"?>
    <?php

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }