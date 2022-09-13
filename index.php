<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>File-Upload</title>
</head>
<body>
    <div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="image">Choose an Image</label>
    <input type="file" class="form-control" name="image" id="image">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Upload image</button>
  <!--<input type="submit" name="sunmit" value="upload image">-->
</form>
    </div>
    
    
</body>
</html>