<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting Page</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #258cd1;
    }
</style>

</head>
<body>
<form action="/submitpost" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="title">Title: </label>
    <input type="text" class="form-control" id="name"  placeholder="Enter Title" name="title">
</div>
  <div class="form-group">
    <label for="content">Content: </label>
    <input type="text" class="form-control" id="content" placeholder="Your content here" name="content">
  </div>
  
  <div class="form-group">
    <label for="image">Image upload: </label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
  <input type="submit" class="btn btn-primary"></input>
</form>
</body>
</html>