<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
   <!-- DB Connection -->
   <?php include('assets/db/db-conn.php'); ?>
</head>

<body>
  <!-- nav -->
  <?php include('navbar.php'); ?>
  <i class="far fa-map-marked-alt"></i>

  <!--Home-->
  <?php include('carousel.php'); ?>

  <!-- PROMO -->
  <?php include('promo.php'); ?>

  <!-- Servis -->
  <?php include('servis.php'); ?>
  <!-- HARGA -->
  <?php //include('harga.php'); ?>
  
  <!-- informasi-->
  <?php include('informasi.php'); ?>

  <!-- PROFIL -->
  <?php include('profil.php'); ?>


  <!-- LOKASI -->
  <?php include('footer.php'); ?>

  <!-- link-footer -->
  <?php include('link-footer.php'); ?>
  
</body>

</html>