<!-- navbar top start -->
<section class="nav-top" id="goToNav">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3">
          <h3 class="brand-name text-md-left"> <a href="<?php echo ROOT_URL ?>index.php"><img src="assets/images/logo.png" alt=""></a> </h3>
        </div>
        <div class="col-md-6 search-nav">
          <form method="POST" action="all-products.php">
            <input class="search-input" placeholder="Search a product" type="text" name="search" id="">
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary category-btn" data-toggle="modal" data-target="#exampleModalCenter">
              Category
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Select Categories</h5>
                  </div>
                  <div class="modal-body">
                    <!-- <input type="checkbox" name="chk[]" id="allChk" value="all_cat" onclick="chkboxChk(1)" checked> All Categories <br> -->
                    <input type="checkbox" name="chk[]" id="eachChk1" value="chldal" onclick="chkboxChk(2)"> Groceries product <br>
                    <input type="checkbox" name="chk[]" id="eachChk2" value="epharma" onclick="chkboxChk(2)"> Medicine product <br>
                    <input type="checkbox" name="chk[]" id="eachChk8" value="cosmetic" onclick="chkboxChk(2)">Cosmetic Items<br>
                    <input type="checkbox" name="chk[]" id="eachChk3" value="book" onclick="chkboxChk(2)"> Books <br>
                    <input type="checkbox" name="chk[]" id="eachChk4" value="tshop" onclick="chkboxChk(2)"> Robotics product <br>
                    <input type="checkbox" name="chk[]" id="eachChk6" value="dress" onclick="chkboxChk(2)"> Mens/Womens Dresses <br>
                    <input type="checkbox" name="chk[]" id="eachChk7" value="electronics" onclick="chkboxChk(2)"> Electronics/Electrical <br>
                    <input type="checkbox" name="chk[]" id="eachChk5" value="other_cat" onclick="chkboxChk(2)"> Others product <br>
                  </div>
                </div>
              </div>
            </div>

            <button class="search-btn" type="submit">Search</button>
          </form>
        </div>
        <div class="col-md-3">
          <h6 class="phn-no">Helpline: 01828112233</h6>
        </div>
      </div>
    </div>
  </section>
  <!-- navbar top end -->

  <!-- navbar bottom start -->
  <section class="nav-bottom">
    <div class="container">
      <nav class="navbar navbar-expand-sm">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo ROOT_URL ?>index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL ?>about-us.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL ?>contact-us.php">Contact us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
  <!-- navbar bottom end -->

  <!-- bottom to top start -->
  <div class="go-top-arrow position-fixed" id="goToTopArrow">
    <a href="#goToNav"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- bottom to top end -->

  <script>
    // function chkboxChk(a) {
    //   value1 = document.getElementById("allChk");
    //   value2 = document.getElementById("eachChk1");
    //   value3 = document.getElementById("eachChk2");
    //   value4 = document.getElementById("eachChk3");
    //   value5 = document.getElementById("eachChk4");
    //   value6 = document.getElementById("eachChk5");
    //   value7 = document.getElementById("eachChk6");
    //   value8 = document.getElementById("eachChk7");
    //   if( a == 2 ) {
    //     value1.checked = false;
    //   }
    //   else if ( a == 1 ) {
    //     value2.checked = false;
    //     value3.checked = false;
    //     value4.checked = false;
    //     value5.checked = false;
    //     value6.checked = false;
    //     value7.checked = false;
    //     value8.checked = false;
    //   }
    // }
  </script>