<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form validation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .formValid{
      width: 500px;
      margin: 0 auto;
      border: 1px solid #f2f2f2;
    }
  </style>
</head>
<body>
  <div class="formValid">
    <h1>php form validation</h1>
    <form action="formValidation.php" method="post">
      <label for="">username</label>
      <input type="text" name="username" class="form-control">
      
      <label for="">password</label>
      <input type="password" name="password" class="form-control mb-5">
      <input type="submit" name="submit" value="Login" class="btn btn-primary">
    </form>
  </div>
</body>
</html>