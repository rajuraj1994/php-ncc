<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add category form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body data-bs-theme="light">
<div class="container">
    <select id="theme" onchange="change()">
        <option value="">Auto</option>
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
        <div class="d-flex justify-content-center">
            <div class="col-md-6 p-3 shadow mt-3">
            <h2 class="text-center text-muted">
                        Category Form
                    </h2>
                <form action="act_category.php" method="post">
                    <div class="mb-2">
                        <label for="category">Category Name</label>
                        <input type="text" name="category" id="category" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="submit" name="submit" value="Add" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function change(){
          const btn=document.getElementById('theme').value 
          if(btn=='light'){
            document.querySelector('body').setAttribute('data-bs-theme','light')
          } 
          else{
            document.querySelector('body').setAttribute('data-bs-theme','dark')
          }
        }
    </script>
</body>
</html>