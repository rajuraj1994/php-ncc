<?php require 'db_connection.php'; ?>
<?php 
if(isset($_GET['ID'])){
    $id=$_GET['ID'];
    $show="select * from user where id='$id'";
    $data=mysqli_query($con,$show);
    $row=mysqli_fetch_assoc($data);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-6 p-3 shadow-lg">
            <form action="update_user.php" method="post" autocomplete="off">
                <h2 class="text-muted text-center">Edit User Form</h2>
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="mb-2">
                    <label for="firstname">FirstName</label>
                    <input type="text" name="fname" id="firstname" class="form-control" required value="<?php echo $row['first_name'];?>">
                </div>
                <div class="mb-2">
                    <label for="lastname">LastName</label>
                    <input type="text" name="lname" id="lastname" class="form-control" required value="<?php echo $row['last_name'];?>">
                </div>
                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required value="<?php echo $row['email'];?>">
                </div>
                <div class="mb-2">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required value="<?php echo $row['address'];?>">
                </div>
                <div class="mb-2">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" required value="<?php echo $row['dob'];?>">
                </div>
                <div class="mb-2">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" class="form-control" required value="<?php echo $row['phone_no'];?>">
                </div>
                <div class="mb-2">
                    <label for="gender">Gender</label> &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="male" checked> Male &nbsp;&nbsp;
                    <input type="radio" name="gender" value="female">Female &nbsp;&nbsp;
                    <input type="radio" name="gender" value="others"> Others
                </div>
                <div class="mb-2">
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                </div>


            </form>

        </div>
    </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
