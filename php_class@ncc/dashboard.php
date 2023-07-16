<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<?php require('db_connection.php'); ?>

<?php
// session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $select = "select * from register_user where email='$email'";
    $show = mysqli_query($con, $select);
    $user = mysqli_fetch_assoc($show);
    ?>
    <h1>
        Name: <?php echo $user['first_name'].'&nbsp;'.$user['last_name']; ?>
    </h1>
    <h1>
        Email: <?php echo $user['email'];?>
    </h1>
    <h1>
        Gender: <?php echo $user['gender'];?>
    </h1>
    <h1>
        Birth Date: <?php echo $user['dob'];?>
    </h1>
    <h1>
        Phone Number: <?php echo $user['phone_no'];?>
    </h1>
    <h1>
        Address: <?php echo $user['address'];?>
    </h1>
    <?php
}
else{
    header('Location:login.php');
}
?>

<a href="logout.php" class="btn btn-danger px-3 rounded-pill">Logout</a>

<?php require 'visitor_counter.php';?>
<?php 
$count_select="Select * from counter";
$show=mysqli_query($con,$count_select);
$data=mysqli_fetch_assoc($show);
?>
<h1?><?php echo $data['count_visitor'];?> </h1>
