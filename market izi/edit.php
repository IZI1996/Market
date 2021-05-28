
<?php
$con=mysqli_connect("localhost","root","","market");

?>
<?php 

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM product
    WHERE reference='$id'");
    $data = mysqli_fetch_array($record);
}
?>
<?php
if (isset($_POST['update'])) {
  $word = $_POST['wording'];
    $des = $_POST['description'];
    $prix = $_POST['unit_price']; 
    $qtmn =$_POST['quantity_min']; 
    $qtst =$_POST['quantity_stock']; 
    $cat =$_POST['category']; 

   $updat="UPDATE product SET description='$des', wording='$word' , unit_price='$prix',quantity_min='$qtmn',  quantity_stock='$qtst', category='$cat' WHERE reference='$id'";
	$dataa=mysqli_query($con,$updat);
    if($dataa)
    {
      header("location:Afficher.php");


    }else
    echo "error";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Application</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: Vesperr - v4.2.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


<section id="contact" class="contact ">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Edit Product</h2>
        </div>

        <div class="row">

          <div class=" col-lg-8 col-md-12  offset-md-2"  data-aos="fade-up" data-aos-delay="300">
            <form  action="" method="post" >
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3" style="color:#3498db">Description</label>
                <input type="text" name="description" class="form-control" id="description"  value="<?php echo      $data ['description']; ?>">
              </div>
              <br>
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3" style="color:#3498db">Wording</label>
                <input type="text" class="form-control" name="wording" id="wording" value="<?php echo      $data ['wording']; ?>">
              </div>
              <br>
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3" style="color:#3498db">Unit price</label>
                <input type="text" class="form-control" name="unit_price" id="unit_price" value="<?php echo      $data['unit_price']; ?>">
              </div>
              
            
              <br>
            
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3" style="color:#3498db">Quantity min</label>
              <input name="quantity_min" value="<?php echo      $data ['quantity_min']; ?>" class="form-control">

              </div>
              <br>
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3" style="color:#3498db">Quantity stock</label>
              <input name="quantity_stock" value="<?php echo      $data ['quantity_stock']; ?>" class="form-control">

              </div>
              <br>
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3" style="color:#3498db">Category</label>
              <input name="category" value="<?php echo      $data ['category']; ?>" class="form-control">

              </div>
              <br>


              <button id="btn" class="btn-get-started scrollto"  type="submit" name="update" >update</button>

              <br>
            
              
        
            </form>
          </div>

        </div>

      </div>





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

