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
          <h2 class="intro-title mb-4">Astro Cinemas</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Astro Cinemas</li>
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
            <img src="assets/img/astroCinemas/image1.png" class="img-fluid" alt="">
            <img src="assets/img/astroCinemas/image2.png" class="img-fluid" alt="">
            <img src="assets/img/astroCinemas/image3.png" class="img-fluid" alt="">
            <img src="assets/img/astroCinemas/image4.png" class="img-fluid" alt="">
            
            
           
        
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web Development</li>
              
              <li><strong>Project date</strong>: April, 2020</li>
              <li><strong>Project URL</strong>: <a href="https://github.com/ajaygalagali/onlineMovieTicketBooking">Github</a></li>
              
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>AstroCinemas - Online movie ticket booking </h2>
          <p>
          This is a Web based project, where we used HTML, CSS and Bootstrap framework to develop Front-End, PHP and MySQL to develop Back-End.<br>
          Objective of project is create a website where multiple users can book different movies' tickets.</p>
          <p>Features - <br>
              &emsp;Client Side:<br>
              &emsp;&emsp;• Sign Up/Log In<br>
              &emsp;&emsp;• Book tickets<br>
              &emsp;&emsp;• Choose between multiple movies<br>
              &emsp;&emsp;• Choose between multiple shows<br>
              &emsp;&emsp;• Give feedback on service<br>
              &emsp;&emsp;• Read feedback given by other users<br>
              &emsp;&emsp;• Location of theater<br>
              &emsp;&emsp;• List of user’s past bookings<br>
              &emsp;&emsp;• Make virtual payment<br>
              &emsp;&emsp;• Apply promocode<br>
              &emsp;&emsp;• Cancel tickets<br>
              &emsp;Admin Side:<br>
              &emsp;&emsp;• Change movie</p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include('footer.php'); ?>

</body>

</html>