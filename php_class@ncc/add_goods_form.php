<?php require('db_connection.php'); ?>
<?php
$select="select * from category";
$show=mysqli_query($con,$select); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add goods form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center mt-3">
            <div class="col-md-6 p-3 shadow">
                <form action="act_add_goods.php" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="gname">Goods Name</label>
                        <input type="text" name="gname" id="gname" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="stock">Stock quantity</label>
                        <input type="number" name="stock" id="stock" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="mdate">Manufacture Date</label>
                        <input type="date" name="mdate" id="mdate" required class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="edate">Expiry Date</label>
                        <input type="date" name="edate" id="edate" required class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="rating">Rating</label>
                        <input type="number" name="rating" id="rating" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            <?php 
                            while($row=mysqli_fetch_assoc($show)){
                                ?>
                                <option value="<?php echo $row['id'];?>">
                                <?php echo $row['category_name']; ?>
                            </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="img">Image</label>
                        <input type="file" name="image" id="img" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="submit" name="submit" value="Add" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>

    </div>
</body>
</html>