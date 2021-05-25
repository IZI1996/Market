<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IZI MARKET </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/output-onlinepngtools (25).png" rel="icon">
  <link href="assets/img/output-onlinepngtools (25).png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Vendor CSS Files -->

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <a href="index.html"><img src="assets/img/output-onlinepngtools (25).png" alt="ho" srcset=""></a>
 
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">categorie</a></li>
          <li><a class="nav-link scrollto" href="ajouter.php">Product</a></li>
         
          <li><a class="nav-link scrollto ml-5" href="login.php">Deconexion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <br> <br>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">IZI MARKET</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">‘IZI MARKET’ is glad to furnish our visitors with a warm and welcoming shopping background in each network we serve.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#contact" class="btn-get-started scrollto">Get Product</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/undraw_online_groceries_a02y.svg"  width="400" height="400" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   <br>
   <br> <br>
   <br>
   <br> <br>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

<div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
            On a Tangier Summer day, in 2021, another sort of grocery store was made. Our organizers ended their life investment funds and put everything into their fantasy            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> a new interpretation of grocery shopping.</li>
              <li><i class="ri-check-double-line"></i>  bring back the old-world appeal of the neighborhood showcase and on March 5, they opened ‘Market Izi’ for business.
</li>
              <li><i class="ri-check-double-line"></i> We Inspire People to Make Everyday Eating Extraordinary</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
            market izi ’ was set up in the MOROCO more than 7 days  back and recorded on the simplonline Exchange in May 2021. We are the world’s biggest committed online grocery retailer with more than 20 dynamic clients shopping with us today. Our goal is to give our clients the best shopping background as far as service, range and value, which assembles a solid business and conveys long haul an incentive for our investors.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->



    <!-- ======= Counts Section ======= -->
  
    
    </section>
    <br>
   <br> <br>
   <br>
   <br> <br>
    <div class="section-title" data-aos="fade-up">
          <h2>category</h2>
        </div>
    <!-- End Contact Section -->
    

    <!-- ======= Categorie Section ======= -->
    <?php
$con=mysqli_connect("localhost","root","","market");

?>
<section id="services" class="services" >
<div class="container" >

<div class="row">
<?php

$quariy =mysqli_query($con,"select DISTINCT  category from product ");
while ( $row = mysqli_fetch_array($quariy) ) :

?>
    

   
          <div class="col-md-4 data align-items-stretch mb-5 mb-lg-5">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"></div>
              <h4 class="title"><a href="process.php?id=<?php echo $row['category']?>" ><?php echo $row['category']?></a></h4>
             

              <p class="description">watch prduct thise after </p>

    
          </div>
 


        </div>
        
    

    <?php
endwhile;
?>
</div>
  </div>
    </section>
    <!-- End Categorie Section  -->




  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
          </div>
          <div class="credits">
            
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>