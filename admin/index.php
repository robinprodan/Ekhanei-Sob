<?php 

  session_start();

  if(isset($_SESSION['uname'])){

    echo "<script>location.href='messages.php'</script>";
  }
  // else {
  //   echo "<script>location.href='index.php'</script>";
  // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login - Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

 <section class="login-res-admin">
   <div class="full-login">
    <div class="logo">
      <h5>Login to Super Admin Account</h5>
    </div>
    <form action="login.php" method="POST">
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit" class="form-control submit-btn">Submit</button>
    </form>
   </div>
 </section>


  <!-- js for bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>