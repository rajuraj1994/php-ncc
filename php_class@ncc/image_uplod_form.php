<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image upload form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-6 p-3 shadow mt-3">
                <form action="act_image_upload.php" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="img">Image Upload</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>
                    <div class="mb-2">
                        <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>