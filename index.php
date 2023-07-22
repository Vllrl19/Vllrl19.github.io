<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="icon" href="images/favi.png">
     <link rel="stylesheet" href="bodys.css">
     <title>Login Form </title>
</head>
<body>
     <div class="form-container">
     <form action="login.php" method="post">
          <h2>LOGIN</h2>
          <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          
          <input type="text" name="uname" placeholder="Username:" class="box">
          <input type="password" name="password" placeholder="Password:" class="box">
          <input type="submit" name="submit" placeholder="signup" class="btn">
          <p>don't have an account? <a href="signup.php">signup now</a> </p>
     </form>
</div>
</body>
</html>