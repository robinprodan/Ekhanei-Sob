<?php 
  include('config/config.php'); 
  include('simple_html_dom.php');

  // get data from search result
  $search_key = $_POST['search'];
  $chkbox = $_POST['chk'];
  $cldl_search_key = $_POST['search'];

  // loop for replace space
  for( $i = 0; $i < strlen($search_key); $i++ ) {
    if( $search_key[$i] == " " ) {
      $search_key[$i] = "+";
      $cldl_search_key = str_replace(" ","%20","$cldl_search_key");
    }
  }

  // condition for category select
  $k = 0;
  While($k < sizeof($chkbox))
  {
    // epharma
    if( $chkbox[$k] == "null") {
      $epharma_html = file_get_html('https://epharma.com.bd/products?type=1&text='.$search_key.'');
      $epharma_list = $epharma_html->find('#grid-list-view',0);
      $epharma_name = $epharma_list->find('.product-name');
      $epharma_price = $epharma_list->find('.product-price');
      $epharma_link = $epharma_list->find('a');
      $epharma_img = $epharma_list->find('img');
    }
    // chaldal
    if( $chkbox[$k] == "chldal") {
      $clDal_html = file_get_html('https://chaldal.com/search/'.$cldl_search_key.'');
      $clDal_list = $clDal_html->find('div[class="productPane"]',0);
      $clDal_name = $clDal_list->find('.name');
      $clDal_price = $clDal_list->find('.price');
      $clDal_img = $clDal_list->find('img');
      $clDal_link = $clDal_list->find('.btnShowDetails');
    }
    // techshop
    if( $chkbox[$k] == "tshop") {
      $tshop_html = file_get_html('https://www.techshopbd.com/search-results?page=1&search[type]=Product&search[q]='.$search_key.'');
      $tshop_list = $tshop_html->find('.products',0);
      $tshop_name = $tshop_list->find('.product_title');
      $tshop_price = $tshop_list->find('.product_price');
      $tshop_link = $tshop_list->find('.product_title');
      $tshop_img = $tshop_list->find('.thumbnail');
    }
    // eboighor
    if( $chkbox[$k] == "book") {
      $eboi_html = file_get_html('https://eboighar.com/search?term='.$search_key.'');
      $eboi_list = $eboi_html->find('.row',3);
      $eboi_name = $eboi_list->find('h3');
      // $eboi_price = $eboi_list->find('.des');
      $eboi_link = $eboi_list->find('a');
      $eboi_img = $eboi_list->find('img');

      for ($i = 0; $i < sizeof($eboi_link); $i++) {
        $eboi_price[$i] = $eboi_link[$i]->find('h5', 0);
      }
      // for ($i = 0; $i < sizeof($eboi_price); $i++) {
      //   if ( $eboi_price[$i]->find('font[class="price"]') != null ) {
      //     $eboi_price2[] = $eboi_price[$i]->find('font[class="price"]', 0);
      //   }
      //   else {
      //     $eboi_price2[] = $eboi_price[$i]->find('span[class="price"]', 0);
      //   }
      // }
    }
    // jadroo
    if( $chkbox[$k] == "other_cat" || $chkbox[$k] == "dress" || $chkbox[$k] == "electronics" || $chkbox[$k] == "cosmetic" || $chkbox[$k] == "epharma" ) {
      $jadroo_html = file_get_html('https://www.jadroo.com/search/products?search='.$search_key.'');
      $jadroo_list = $jadroo_html->find('.shop-products',0);
      $jadroo_name = $jadroo_list->find('.name');
      $jadroo_price = $jadroo_list->find('.price');
      $jadroo_img = $jadroo_list->find('img');
      for ($i = 0; $i < sizeof($jadroo_name); $i++) {
        $jadroo_link[] = $jadroo_name[$i]->find('a', 0);
      }
    }
    // othoba
    if( $chkbox[$k] == "other_cat" || $chkbox[$k] == "book" || $chkbox[$k] == "dress"  || $chkbox[$k] == "electronics" || $chkbox[$k] == "cosmetic"  ) {
      $othoba_html = file_get_html('https://www.othoba.com/src?q='.$cldl_search_key.'&pageSize=60');
      $othoba_list = $othoba_html->find('.category-page',0);
      $othoba_name = $othoba_list->find('.product-title');
      $othoba_price = $othoba_list->find('.actual-price');
      $othoba_img = $othoba_list->find('img');
      $othoba_link = $othoba_list->find('.btn-details');
    }
    // efair
    if( $a == 10  /*$chkbox[$k] == "other_cat" || $chkbox[$k] == "electronics"*/ ) {
      $efair_html = file_get_html('https://electronicsfairbd.com/index.php?route=product/search&search='.$cldl_search_key.'&limit=25');
      $efair_list = $efair_html->find('.row',27);
      $efair_name = $efair_list->find('h4');
      $efair_price = $efair_list->find('.price-new');
      $efair_img = $efair_list->find('.product-image-container');

      for ($i = 0; $i < sizeof($efair_name); $i++) {
        $efair_img2[] = $efair_img[$i]->find('img',0);
        $efair_link[] = $efair_name[$i]->find('a',0);
      }
    }
    // shoppersbd
    $sprbd_ok = 0;
    if( $chkbox[$k] == "other_cat" || $chkbox[$k] == "dress"  || $chkbox[$k] == "electronics" || $chkbox[$k] == "cosmetic" ) {
      $shoppersbd_html = file_get_html('https://www.shoppersbd.com/catalogsearch/result/?q='.$search_key.'');
      $shoppersbd_list = $shoppersbd_html->find('.products-grid',0);
      if( $shoppersbd_html->find('.products-grid') != null ) {
        $sprbd_ok = 1;
        $shoppersbd_name = $shoppersbd_list->find('.product-name');
        $shoppersbd_price = $shoppersbd_list->find('.price-box');
        $shoppersbd_img = $shoppersbd_list->find('img');
        $shoppersbd_link = $shoppersbd_list->find('.product-image');
  
        for ($i = 0; $i < sizeof($shoppersbd_name); $i++) {
          $shoppersbd_price2[] = $shoppersbd_price[$i]->find('.price', 0);
        }
      }
    }
    $k++;
  }
  
  // chaldal loop
  // for ( $i = 0, $j = 0; $i < sizeof($list_name); $i++, $j+=2 ){
  //   echo $list_name[$i]->plaintext;
  //   echo "<br>";
  //   echo $list_price[$i]->plaintext;
  //   echo "<br>";
  //   echo $list_img[$i]->attr['src'];
  //   echo "<br>";
  //   echo $product_link[$j]->attr['href'];
  //   echo "<br>";
  // }

  // epharma loop
  // for ( $i = 0, $j = 0; $i < sizeof($epharma_name); $i++, $j+=3 ){
  //   echo $epharma_name[$i]->plaintext; echo "<br>";
  //   echo $epharma_price[$i]->plaintext; echo "<br>";
  //   echo $epharma_link[$j]->attr['href']; echo "<br>";
  //   echo $epharma_img[$i]->attr['src'];
  //   echo "<br>";
  // }

  // techshop loop
  // for ( $i = 0; $i < sizeof($list_name); $i++ ){
  //   echo $list_name[$i]->plaintext;
  //   echo $list_price[$i]->plaintext;
  //   echo $list_link[$i]->attr['href'];
  //   echo $list_img[$i]->attr['src'];
  //   echo "<br>";
  // }

  // eboighor loop
//   for ( $i = 0; $i < sizeof($eboi_price); $i++ ){
//     echo $eboi_name[$i]->plaintext; echo "<br>";
//     echo $eboi_price2[$i]->plaintext; echo "<br>";
//     echo $eboi_link[$i]->attr['href']; echo "<br>";
//     if( $eboi_img[$i]->attr['src'] == "https://static.eboighar.com/thumbimages/mid_thumb_books/" ) {
//       echo $eboi_img[$i] = "https://eboighar.com/frontend/assets/images/default/140/no-image.png"; echo "<br>";
//     }
//     else {
//       echo $eboi_img[$i]->attr['src']; echo "<br>";
//     }

//     echo "<br>";echo "<br>";
// }

  // jadroo loop
  // for ( $i = 0, $j = 0; $i < sizeof($jadroo_name); $i++, $j+=3 ){
  //   echo $jadroo_name[$i]->plaintext;
  //   echo $jadroo_price[$i]->plaintext;
  //   echo $jadroo_link[$j]->attr['href'];
  //   echo $jadroo_img[$i]->attr['src'];
  //   echo "<br>";
  // }

  // othoba loop 
  // for ( $i = 0; $i < sizeof($othoba_name); $i++ ){
  //   echo $othoba_name[$i]->plaintext;
  //   echo $othoba_price[$i]->plaintext;
  //   echo $othoba_link[$i]->attr['href'];
  //   echo $othoba_img[$i]->attr['src'];
  // }

  // efair
  // for ( $i = 0, $j = 0; $i < sizeof($efair_name); $i++, $j+=2 ){
  //   echo $efair_name[$i]->plaintext;
  //   echo $efair_price[$i]->plaintext;
  //   echo $efair_link[$j]->attr['href'];
  //   echo $efair_img[$i]->attr['src'];
  // }

  // shoppersbd
  // for ( $i = 0, $j = 0; $i < sizeof($shoppersbd_name)-1; $i++ ) {
      
  //   echo $shoppersbd_name[$i]->plaintext;
  //   echo $shoppersbd_price2[$i]->plaintext;
  //   echo $shoppersbd_link[$i]->attr['href'];
  //   echo $shoppersbd_img[$j]->attr['src'];

  //   if ($j < sizeof($shoppersbd_img)) {
  //     if($shoppersbd_img[$j+1]->attr['src'] == "https://www.shoppersbd.com/media/em_productlabels/image/soldout_7.png") {
  //       $j+=2;
  //     }
  //     else {
  //       $j++;
  //     }
  //   }
  // }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products - Ekhanei Sob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    <!-- google-font css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,800|Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
  <?php include('frontend/navbar.php'); ?>

  <!-- products start -->
  <section class="products-all">
    <div class="container">
      <div class="row">

        <!-- chaldal -->
        <?php 
        $k = 0;
        While($k < sizeof($chkbox))
        {
          if( $chkbox[$k] == "chldal") {
            for ( $i = 0, $j = 0; $i < sizeof($clDal_name); $i++, $j+=2 ){ ?>

              <div class="col-md-3 col-sm-6 product-each">
                <img src="<?php echo $clDal_img[$i]->attr['src']; ?>" alt="">
                <p class="name"><?php echo $clDal_name[$i]->plaintext; ?></p>
                <p class="price"><?php echo $clDal_price[$i]->plaintext; ?></p>
                <!-- <p class="">Available on "chaldal.com"</p> -->
                <button class="buy-btn"> <a href="https://chaldal.com<?php echo $clDal_link[$j]->attr['href']; ?>" target="_blank">BUY IT</a> </button>
              </div>
  
            <?php } 
        }
          $k++;
        } ?>

        <!-- techshop -->
        <?php 
        $k = 0;
        While($k < sizeof($chkbox))
        {
          if( $chkbox[$k] == "tshop") {
            if (sizeof($tshop_name) > 0) {
              for ( $i = 0; $i < sizeof($tshop_name); $i++ ){ ?>

                <div class="col-md-3 col-sm-6 product-each">
                  <img src="https://www.techshopbd.com/<?php echo $tshop_img[$i]->attr['src']; ?>" alt="">
                  <p class="name"><?php echo $tshop_name[$i]->plaintext; ?></p>
                  <p class="price"><?php echo $tshop_price[$i]->plaintext; ?></p>
                  <!-- <p class="">Available on "techshop.com"</p> -->
                  <button class="buy-btn"> <a href="https://www.techshopbd.com/<?php echo $tshop_link[$i]->attr['href']; ?>" target="_blank">BUY IT</a> </button>
                </div>
    
              <?php } 
            }
            else /*if ( $chkbox[$k] != "all_cat" )*/ {
              echo "<h3>Nothing found! Please try another way</h3>";
            }
        }
          $k++;
        } ?>

        <!-- eboighor -->
        <?php 
        $k = 0;
        While($k < sizeof($chkbox))
        {
          if( $chkbox[$k] == "book") {
            if (sizeof($eboi_name) > 0) {
              for ( $i = 0; $i < sizeof($eboi_name); $i++ ){ ?>

                <div class="col-md-3 col-sm-6 product-each">
                  <img src="https://eboighar.com/frontend/assets/images/default/140/no-image.png" alt="">
                  <p class="name"><?php echo $eboi_name[$i]->plaintext; ?></p>
                  <p class="price"><?php echo $eboi_price[$i]; ?></p>
                  <p class="">Available on "eboighor.com"</p>
                  <button class="buy-btn"> <a href="<?php echo $eboi_link[$i]->attr['href']; ?>" target="_blank">BUY IT</a> </button>
                </div>
    
              <?php } 
            }
            else {
              echo "<h3>Nothing found! Please try another way</h3>";
            }
        }
          $k++;
        } ?>

        <!-- jadroo -->
        <?php 
        $k = 0;
        While($k < sizeof($chkbox))
        {
          if( $chkbox[$k] == "other_cat" || $chkbox[$k] == "dress" || $chkbox[$k] == "electronics" || $chkbox[$k] == "cosmetic" || $chkbox[$k] == "epharma") {
            for ( $i = 0; $i < sizeof($jadroo_name); $i++ ) { ?>

              <div class="col-md-3 col-sm-6 product-each">
                <img src="<?php echo $jadroo_img[$i]->attr['src']; ?>" alt="">
                <p class="name"><?php echo $jadroo_name[$i]->plaintext; ?></p>
                <p class="price"><?php echo $jadroo_price[$i]->plaintext; ?></p>
                <p class="">Available on "jadroo.com"</p>
                <button class="buy-btn"> <a href="<?php echo $jadroo_link[$i]->attr['href']; ?>" target="_blank">BUY IT</a> </button>
              </div>
  
            <?php } 
        }
          $k++;
        } ?>

        <!-- efair -->
        <?php 
        $k = 0;
        While($k < sizeof($chkbox))
        {
          if( a == 10 /*$chkbox[$k] == "other_cat" || $chkbox[$k] == "electronics"*/ ) {
            for ( $i = 0, $j = 0; $i < sizeof($efair_name); $i++, $j+=2 ) { ?>

              <div class="col-md-3 col-sm-6 product-each">
                <img src="<?php echo $efair_img2[$i]->attr['data-src']; ?>" alt="">
                <p class="name"><?php echo $efair_name[$i]->plaintext; ?></p>
                <p class="price"><?php echo $efair_price[$i]->plaintext; ?></p>
                <button class="buy-btn"> <a href="<?php echo $efair_link[$i]->attr['href']; ?>" target="_blank">BUY IT</a> </button>
              </div>
  
            <?php } 
        }
          $k++;
        } ?>

        <!-- shoppersbd -->
        <?php 
        if ( $sprbd_ok == 1 ) {
          $k = 0;
          While($k < sizeof($chkbox))
          {
            if( $chkbox[$k] == "other_cat" || $chkbox[$k] == "dress" || $chkbox[$k] == "electronics" || $chkbox[$k] == "cosmetic" ) {
              for ( $i = 0, $j = 0; $i < sizeof($shoppersbd_name)-1; $i++ ) { ?>
  
                <div class="col-md-3 col-sm-6 product-each">
                <?php 
                  if ( $j == 0 && $shoppersbd_img[$j]->attr['src'] == "https://www.shoppersbd.com/media/em_productlabels/image/soldout_7.png" ) {
                    $j++;  ?>
                  <img src="<?php echo $shoppersbd_img[$j]->attr['src']; ?>" alt="">
                <?php
                  }
                  else { ?>
                    <img src="<?php echo $shoppersbd_img[$j]->attr['src']; ?>" alt="">
                    <?php }
                ?>

                  <p class="name"><?php echo $shoppersbd_name[$i]->plaintext; ?></p>
                  <p class="price"><?php echo $shoppersbd_price2[$i]->plaintext; ?></p>
                  <p class="">Available on "shoppersbd.com"</p>
                  <button class="buy-btn"> <a href="<?php echo $shoppersbd_link[$i]->attr['href']; ?>" target="_blank">BUY IT</a> </button>
                </div>
    
            <?php
              if ($j < sizeof($shoppersbd_img)) {
                if($shoppersbd_img[$j+1]->attr['src'] == "https://www.shoppersbd.com/media/em_productlabels/image/soldout_7.png") {
                  $j+=2;
                }
                else {
                  $j++;
                }  
            } 
          }
            $k++;
          }
        }
        }
        ?>

        <!-- othoba -->
        <?php 
        $k = 0;
        While($k < sizeof($chkbox))
        {
          if( $chkbox[$k] == "other_cat" || $chkbox[$k] == "book" || $chkbox[$k] == "dress" || $chkbox[$k] == "electronics" || $chkbox[$k] == "cosmetic" ) {
            for ( $i = 0; $i < sizeof($othoba_name); $i++ ) { ?>

              <div class="col-md-3 col-sm-6 product-each">
                <img src="https://www.othoba.com<?php echo $othoba_img[$i]->attr['src']; ?>" alt="">
                <p class="name"><?php echo $othoba_name[$i]->plaintext; ?></p>
                <p class="price"><?php echo $othoba_price[$i]->plaintext; ?></p>
                <p class="">Available on "Othoba.com"</p>
                <button class="buy-btn"> <a href="https://www.othoba.com<?php echo $othoba_link[$i]->attr['href']; ?>" target="_blank">BUY IT</a> </button>
              </div>
  
            <?php } 
        }
          $k++;
        } ?>

        <!-- if no category select -->
        <?php 
          if( sizeof($chkbox) == 0 ) { ?>

            <h3>Please Select a Product Category</h3>

            <?php 
          }
        ?>

      </div>
    </div>
  </section>
  <!-- products end -->

  <?php include('frontend/footer.php'); ?>

</body>
</html>