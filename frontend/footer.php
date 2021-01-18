<!-- footer start -->
<section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 each-col">
          <h6 class="heading">INFO</h5>
          <ul>
            <li> <a href="<?php echo ROOT_URL ?>about-us.php">About Us</a> </li>
            <li><a href="<?php echo ROOT_URL ?>privacy-policy.php">Privacy Policy</a></li>
            <li><a href="<?php echo ROOT_URL ?>cookie-policy.php">Cookie Policy</a></li>
            <li><a href="<?php echo ROOT_URL ?>terms-conditions.php">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-4 each-col">
          <h6 class="heading">LET US HELP YOU</h5>
          <ul>
            <li><a href="<?php echo ROOT_URL ?>how-to-use-our-site.php">How to Use Our Site</a></li>
            <li><a href="<?php echo ROOT_URL ?>contact-us.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-4 each-col">
          <h6 class="heading">OUR COMMUNITIES</h6>
          <div class="social-icon">
            <a href="#"> <i class="fab fa-facebook-square"></i> </a>
            <a href="#"> <i class="fab fa-twitter"></i> </a>
            <a href="#"> <i class="fab fa-youtube"></i> </a>
          </div>
          <p class="email">Email: support@ekhaneisob.com</p>
          <p class="phn">HELPLINE: 01828112233</p>
        </div>
      </div>
    </div>
  </section>
  <!-- footer end -->

  <!-- footer bottom start -->
  <p class="footer-bottom">Copyright &copy; 2020 EkhaneiSob.com - All Rights Reserved</p>
  <!-- footer bottom end -->

  <!-- js for bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <!-- custom js -->
  <script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("goToTopArrow").style.display = "block";
      }
      else {
        document.getElementById("goToTopArrow").style.display = "none";
      }
    }
  </script>