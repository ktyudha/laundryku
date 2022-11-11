<?php 
include ('../../assets/db/db-conn.php');
$id = $_GET['updateid'];

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
} else {
    echo "<script>alert('Nomor Barang Belum Dipilih');document.location='index.php';</script>";
}

    $sql = "SELECT * FROM carosel WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $id     = $data ['id'];
    $tagline = $data['tagline'];
    $deskripsi = $data['deskripsi'];
    $image_url = $data['image_url'];

?>
<section class="content" id="editcarousel">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Edit Carousel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Data -->
                  <div class="form-group">
                    <label for="tagline">Judul</label>
                    <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Judul" value="<?php echo $tagline; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" value="<?php echo $image_url; ?>">
                  </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" type="text" id="deskripsi" rows="5" placeholder="deskripsi" required><?php echo $tagline; ?></textarea>
                    </div>
                 
                  <!-- checkbox -->
                  <div class="form-group text-right">
                    <button class="btn btn-primary" type="submit" id="updatecarousel" name="updatecarousel">Update</button>
                  </div>
                </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

<?php
if (isset($_POST['updatecarousel'])) {
  $tagline = $_POST['tagline'];
  $deskripsi = $_POST['deskripsi'];

  $target_dir = "uploads/servis/";
  if (isset($_FILES['image'])) {
      $image = $_FILES['image'];
      $target_file = $target_dir . basename($image['name']);

      // $check_tagline = mysqli_query($conn, "SELECT * FROM servis WHERE tagline ='$tagline'");
      // $check_news = mysqli_num_rows($check_tagline);

      // if ($check_news > 0) {
      //     echo "<script>alert('Tagline is Already');document.location='../../admin';</script>";
      // } else {
      if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
          $query_img = "UPDATE carosel SET tagline='$tagline', deskripsi ='$deskripsi', image_url ='$target_file' WHERE id='$id'";;

          if (mysqli_query($conn, $query_img)) {
              echo "<script>alert('Has been save');document.location='?page=data%20carousel';</script>";
          } else {
              echo "<script>alert('Can't Save');document.location='?page=data%20carousel';</script>";
          }
      }
  }
  $query = "UPDATE carosel SET tagline='$tagline', deskripsi ='$deskripsi' WHERE id='$id'";

  if (mysqli_query($conn, $query)) {
      echo "<script>alert('Has been save');document.location='?page=data%20carousel';</script>";
  } else {
      echo "<script>alert('Can't Save');document.location='?page=data%20carousel';</script>";
  }
}
?>