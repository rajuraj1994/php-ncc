<?php require 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="col-md-10">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>lastName</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select="select * from user";
            $show=mysqli_query($con,$select); 
            while($row=mysqli_fetch_assoc($show)){
                ?>
                <tr>
                    <td> <?php echo $row['first_name']; ?></td>
                    <td> <?php echo $row['last_name']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td> <?php echo $row['gender']; ?></td>
                    <td> <?php echo $row['phone_no']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['dob']; ?></td>
                    <td>
                        <a href="edit_user.php?ID=<?php echo $row['id']; ?>" class="btn btn-primary"><i class='bx bx-edit'></i></a>
                        <a href="delete_user.php?ID=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this user?')"><i class='bx bx-trash'></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
        </div>
    </div>
    
</body>
</html>