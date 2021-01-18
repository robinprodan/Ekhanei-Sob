<?php 

  session_start();

  $uname = "admin@gmail.com";
  $pass = "admin";

  if(isset($_SESSION['uname'])){

    echo "<script>location.href='messages.php'</script>";
  }
  else {
    if($_POST['email']==$uname && $_POST['password']==$pass) {

      $_SESSION['uname']=$uname;

      echo "<script>location.href='messages.php'</script>";
    }

    else {
      echo "<script>alert('username or pass incorrect')</script>";

      echo "<script>location.href='index.php'</script>";
    }
  }
?>