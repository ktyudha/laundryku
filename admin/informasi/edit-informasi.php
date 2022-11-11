<?php
include('../../assets/db/db-conn.php');
$id = $_GET['updateid'];

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
} else {
    echo "<script>alert('Nomor ID Belum Dipilih');document.location='index.php';</script>";
}

$sql = "SELECT * FROM informasi WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$id   = $data['id'];
$tagline = $data['tagline'];
$deskripsi = $data['deskripsi'];
$image = $data['image_url'];

?>
<section class="content" id="Add Informasi">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Add Informasi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                  <!-- Data -->
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" value="<?php echo $image;?>">
                  </div>
                  <div class="form-group">
                    <label for="tagline">Judul</label>
                    <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Judul" value="<?php echo $data['tagline'];?>" required>
                  </div>
                  
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputDeskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="exampleInputdeskripsi" cols="30" rows="2" placeholder="deskripsi"><?php echo $data['deskripsi'];?></textarea>
                  </div>
                  <button class="btn btn-primary text-start" type="submit" id="updateInforamsi" name="updateInformasi">Update</button>
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
include ('../../assets/db/db-conn.php');
if (isset($_POST['updateInformasi'])) {
    $id   = $_POST['id'];
    $tagline = $_POST['tagline'];
    $deskripsi = $_POST['deskripsi'];

    $target_dir = "uploads/informasi/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_file = $target_dir . basename($image['name']);

        if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
            // $query_image ="SELECT * FROM informasi WHERE id = '$id';";
            
            // $sql = mysqli_query($conn, $query_image);
            // $data = mysqli_fetch_array($sql);
            
            // if (is_file($data['image_url'])) {
            //     unlink($data['image_url']);
            // } 
            
            $query_img = "UPDATE informasi SET tagline='$tagline', deskripsi ='$deskripsi', image_url ='$target_file' WHERE id='$id'";
            $sqlImage = mysqli_query($conn, $query_img);
            
            if ($sqlImage) {
                echo "<script>alert('Has been save');document.location='?page=data informasi';</script>";
                # code...
            }
        }
    }
    $query = "UPDATE informasi SET tagline='$tagline', deskripsi ='$deskripsi' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Has been save');document.location='?page=data informasi';</script>";
    } else {
        echo "<script>alert('Can't Save');document.location='?page=data informasi';</script>";
    }
}

?>