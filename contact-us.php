<?php include('config/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact - Ekhanei Sob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/main.css" />
    <!-- google-font css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,800|Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
  <?php include('frontend/navbar.php'); ?>

  <!-- contact us start -->
  <section class="contact-part">
    <div class="container">
      <h2 class="heading"> <span>Contact</span> </h2>
      <div class="support">
        <h4 class="title mb-4">Send us an Instant Message:</h4>
        

        <form method="POST" action="save-messages.php">
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Your Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Your Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="contact" class="col-sm-2 col-form-label">Contact Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Your contact number" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="message" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success px-4">Submit</button>
            </div>
          </div>
        </form>
      </div>

      <div class="support">
        <h4 class="title">For Support:</h4>
        <p>Email: support@ekhaneisob.com</p>
        <p>Web: https://help.ekhaneisob.com</p>
      </div>
      <div class="support">
        <h4 class="title">Businees Address:</h4>
        <p>Khagan, Ashulia, Savar, Dhaka.</p>
        <p>Phone: 01828112233 (10 AM - 6 PM)</p>
      </div>

     
    </div>
  </section>
  <!-- contact us end -->

  <?php include('frontend/footer.php'); ?>
  
</body>
</html>