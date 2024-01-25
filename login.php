<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div>
<form action="login1.php" method="post">
    <h4>LOGIN</h4>


  <div class="mb-3">
    <label class="form-label">User Name</label>
    <input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname']))?$_GET['uname']:""?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="pass">
  </div>

  <button type="submit" class="btn btn-primary">login</button>
  <a href="signup.php"> Signup</a>
</form>
</div>
    
</body>
</html>