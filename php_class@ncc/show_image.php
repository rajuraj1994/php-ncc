<?php require 'db_connection.php'; ?>

<?php 
$select="select * from gallery order by id desc";
$run=mysqli_query($con,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-evenly">
    <?php
    while($row=mysqli_fetch_assoc($run)){
        ?>
        <div class="col-md-3">
            <img src="uploads/<?php echo $row['image'];?>" alt="" class="img-fluid">
        </div>
    <?php

    } 
    ?>

</div>
    </div>
</body>
</html>