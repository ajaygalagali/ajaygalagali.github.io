<!DOCTYPE html>
<html lang="en">

<?php 
  include('header.php');
?>

<body id="page-top">

 <?php 
 include('navBarWork.php');
  ?>

  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Rokka App</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">RokkaApp</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/rokkaApp/banner1.2.jpg" class="img-fluid" alt="">
            <img src="assets/img/rokkaApp/image2.png" class="img-fluid" alt="">
            <img src="assets/img/rokkaApp/image3.png" class="img-fluid" alt="">
            
           
        
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Android Studio</li>
              
              <li><strong>Project date</strong>: May, 2020</li>
              <li><strong>Project URL</strong>: <a href="https://github.com/ajaygalagali/RokkaApp_MoneyLog_android_app">Github</a></li>
              
            </ul>
            <a href='https://play.google.com/store/apps/details?id=com.astro.rokka&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='Get it on Google Play' height="80px" src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a>

          </div>

        </div>

        <div class="portfolio-description">
          <h2>Rokka - Money tracker for farmers and shopkeepers </h2>
          <p>
          Keep track of wages paid to workers, money lent/borrowed and expenses. <br>
          Writing in a notebook is old in this era, digitizing your record keeping method using a real-time app.</p>
          <p>Features :<br>
            - Labour wages manager <br>
            - Keep record of money lent or borrowed<br>
            - Keep record of expenses</p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include('footer.php'); ?>

</body>

</html>