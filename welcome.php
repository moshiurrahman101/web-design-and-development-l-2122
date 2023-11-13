<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=User">
  <title>User page</title>
  <style>
    .welcomebox{
      width: 500px;
      border: 1px dashed green;
      margin: 0 auto;
    }
    .welcomebox h1{
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="welcomebox">
    <h1>Welcome, <?php echo $_SESSION['username'];?></h1>
    <h3>Your Password is: <?php echo $_SESSION['password'];?></h3>
  </div>
</body>
</html>