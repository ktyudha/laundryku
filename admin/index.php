<?php
session_start();
error_reporting(0);
if ($_SESSION['username'] == null) {
  echo "<script>location.href='../signin/';</script>";
}

$_SESSION["nama"];
$_SESSION["username"];
$_SESSION["level"];
$_SESSION["pswd"];


$sql = "SELECT * FROM users ";

?>

<!DOCTYPE html>
<html>
  
  <head>
    <!-- Header -->
    <?php include('header.php'); ?>
    <!-- DB Connection -->
    <?php include('../assets/db/db-conn.php'); ?>
</head>

<body class="hold-transition sidebar-mini fixed layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      
      <!-- Brand Logo -->
      <?php include('logo.php'); ?>

      <!-- Sidebar -->
      <?php 
        if ($_SESSION['level']==="superuser") {
          include ('menu/superuser.php');
        } else {
          include ('menu/user.php');
        }
      ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php
      
      include ('content_header.php');

      if (isset($_GET['page'])) {
        if ($_GET['page']=='datatable') {
          include ('datatable.php');
        } else if ($_GET['page']=='bookform') {
          include ('bookform.php');
        } else if ($_GET['page']=='updateform') {
          include ('update.php');
        } else if ($_GET['page']=='editor') {
          include ('editor.php');
        } else if ($_GET['page']=='add carousel') {
          include ('carousel/add-carousel.php');
        } else if ($_GET['page']=='data carousel') {
          include ('carousel/data-carousel.php');
        } else if ($_GET['page']=='editcarousel') {
          include ('carousel/edit-carousel.php');
        } else if ($_GET['page']=='add promo') {
          include ('promo/add-promo.php');
        } else if ($_GET['page']=='data promo') {
          include ('promo/data-promo.php');
        } else if ($_GET['page']=='editpromo') {
          include ('promo/edit-promo.php');
        } else if ($_GET['page']=='editservis') {
          include ('servis/edit-servis.php');
        } else if ($_GET['page']=='add servis') {
          include ('servis/add-servis.php');
        } else if ($_GET['page']=='data servis') {
          include ('servis/data-servis.php');
        } else if ($_GET['page']=='edit profil') {
          include ('edit-profil.php');
        } else if ($_GET['page']=='add informasi') {
          include ('informasi/add-informasi.php');
        } else if ($_GET['page']=='data informasi') {
          include ('informasi/data-informasi.php');
        } else if ($_GET['page']=='updateinformasi') {
          include ('informasi/edit-informasi.php');
        } else if ($_GET['page']=='data user') {
          include ('users/data-user.php');
        } else if ($_GET['page']=='add user') {
          include ('users/add-user.php');
        } else if ($_GET['page']=='edituser') {
          include ('users/edit-user.php');
        } else {
          include ('datatable.php');
        }
      } else {
        include ('datatable.php');
      }
      ?>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>

    <!-- Main Footer -->
    <?php include('footer.php'); ?>
</body>

</html>