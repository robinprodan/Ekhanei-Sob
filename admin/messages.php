<?php 
  session_start();

  if(isset($_SESSION['uname'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'ekhanei-sob');

    if(mysqli_connect_errno()) {
      echo 'Failed to connect to MySQL'. mysqli_connect_errno();
    }

    $query = 'SELECT * FROM contact';

    $result = mysqli_query($conn, $query);

    $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);
  }

  else {
    echo "<script>location.href='index.php'</script>";
  }

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ekhanei-Sob Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <!-- nav section -->
  <section>
    <nav class="navbar navbar-expand navbar-fixed-top navTop">
      <a class="navbar-brand" href="index.html">
        Ekhanei-Sob
      </a>
      <button class="navbar-toggler" onclick="toggleHide()">
          <i class="fas fa-bars"></i>
      </button>
      <a class="brndHide" href="index.html">Ekhanei-Sob</a>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item navIcon dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-alt"></i>
          </a>
          <div class="dropdown-menu profileDrop" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="logout.php">Logout</a>    
          </div>      
        </li>
      </ul>
    </nav>
  </section>

  <!-- side menu -->
  <aside class="sideMenu" id="sideMnu">
    <div class="sideTop">
      <div class="text">
        <p class="name">Super Admin</p>
      </div>
    </div>
    <div class="sideBottom">
      <ul>
        <li>
          <a class="aActive" href="">
              <i class="fas fa-chart-pie"></i>
            <span>See Messages</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

   <!-- app content -->
   <main class="appContent" id="appcontnt">
    <div class="table-responsive bg-white">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach($messages as $message) : ?>
            <tr>
              <td> <?php echo $message['name']; ?> </td>
              <td> <?php echo $message['email']; ?> </td>
              <td> <?php echo $message['subject']; ?> </td>
              <td> <?php echo $message['message']; ?> </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>

  <!-- toggle sidebar -->
  <script>
    function toggleHide() {
      var a = document.getElementById("sideMnu");
      if(a.style.width === "230px") {
        document.getElementById("sideMnu").style = "width: 0px;";
        document.getElementById("appcontnt").style = "margin-left: 0px;";
      }
      else {
        document.getElementById("sideMnu").style = "width: 230px;";
        document.getElementById("appcontnt").style = "margin-left: 0px;";
      }
    }
  </script>
  
  <!-- required js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>