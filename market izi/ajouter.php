<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IZI MARKET </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <title>data table</title>


      <!-- Favicons -->
  <link href="assets/img/output-onlinepngtools (25).png" rel="icon">
  <link href="assets/img/output-onlinepngtools (25).png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

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
  <link href="style.css" rel="stylesheet">  <!-- ======= Header ======= -->



     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">
</head>




<body>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <a href="index.html"><img src="assets/img/output-onlinepngtools (25).png" alt="ho" srcset=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>         
          <li><a class="nav-link scrollto" href="login.php">Deconexion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
 
<br>

<div class="container mt-5" >
<?php
$con=mysqli_connect("localhost","root","","market");
?>
<section id="contact" class="contact ">
      <div class="container">

        <div class="section-title" >
          <h2>New Product</h2>
        </div>

        <div class="row">

          <div class=" col-lg-8 col-md-12  offset-md-2"  >
            <form action="ajouter.php" method="post" >
              <div class="form-group">
                <input type="text" name="description" class="form-control mb-3" id="description" placeholder="Description" required>
              </div>
             
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="wording" id="wording" placeholder="wording" required>
              </div>
             
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="unit_price" id="unit_price" placeholder="unit_price" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="quantity_min" id="quantity_min" placeholder="quantity_min" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control mb-3" name="quantity_stock" id="quantity_stock" placeholder="quantity_stock" required>
              </div>
              
            
             
            
              <div class="form-group">
            
              <select  class="form-control mb-3" name="category">

              <option>---- Chose------ </option>
              <?php $quariy =mysqli_query($con,"select DISTINCT  category from product ");
               while ( $row = mysqli_fetch_array($quariy)){?>
                 <option><?php echo $row['category']?></option>
                 <?php }?>
                     </select>

              </div>
                  


              <br>

              <div>
            <button style='  padding: 4px 10px;' id="btn" class="btn-get-started scrollto" name="submit1">SAVE</button>
             </div>
            </form>
          </div>
        </div>
      </div>



      <?php
// ????????  ?????????????? 

   if(isset($_POST['submit1'])){
       $description=mysqli_real_escape_string($con,$_POST["description"]);
       $wording=mysqli_real_escape_string($con,$_POST["wording"]);
       $unit_price=mysqli_real_escape_string($con,$_POST["unit_price"]);
       $quantity_min=mysqli_real_escape_string($con,$_POST["quantity_min"]);
       $quantity_stock=mysqli_real_escape_string($con,$_POST["quantity_stock"]);
       $category=mysqli_real_escape_string($con,$_POST["category"]);
       
            $sql=("INSERT INTO product (description,wording,unit_price,quantity_min,quantity_stock,category)VALUES('$description','$wording','$unit_price','$quantity_min','$quantity_stock','$category')");
            $result=mysqli_query($con,$sql);
            if($result){
                echo'data save';
            }else {
                  echo'data not save'; 
             }
     
   }
?>
<br>
<br>
<br>
<br>









</body>
</html>