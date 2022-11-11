<?php
include('../../assets/db/db-conn.php');
$id = $_GET['updateid'];

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
} else {
    echo "<script>alert('Nomor Barang Belum Dipilih');document.location='index.php';</script>";
}

$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$id   = $data['id'];
$nama = $data['nama'];
$username = $data['username'];
$password = $data['pswd'];
// $passwordmd5 = md5($password);
$level = $data['level'];
$image = $data['image_url'];

?>
<section class="content" id="edituser">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Add User</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="../assets/db/authentication.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Data -->
                                    <div class="form-group mb-4">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control-file" name="image" id="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputNama">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama" value="<?php echo $nama; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername">Username</label>
                                        <input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="username" value="<?php echo $username; ?>" required>
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="password" value="<?php echo $password; ?>" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Level</label>
                                        <select class="form-control" name="level">
                                            <option value="superuser" <?php echo $level == "superuser" ? "selected" : ""; ?>>Superuser</option>
                                            <option value="user" <?php echo $level == "user" ? "selected" : ""; ?>>User</option>
                                        </select>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="form-group text-right">
                                        <button class="btn btn-primary" type="submit" id="updateuser" name="updateuser">Update</button>
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
if (isset($_POST['updateuser'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $target_dir = "uploads/servis/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_file = $target_dir . basename($image['name']);

        //   $check_tagline = mysqli_query($conn, "SELECT * FROM servis WHERE tagline ='$tagline'");
        //   $check_news = mysqli_num_rows($check_tagline);

        //   if ($check_news > 0) {
        //       echo "<script>alert('Tagline is Already');document.location='../../admin';</script>";
        //   } else {
        if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
            $query_img = "UPDATE users SET nama='$nama', username ='$username', pswd ='$password', level = '$level', image_url ='$target_file' WHERE id='$id'";

            if (mysqli_query($conn, $query_img)) {
                echo "<script>alert('Has been save');document.location='?page=data%20promo';</script>";
            } else {
                echo "<script>alert('Can't Save');document.location='?page=data%20promo';</script>";
            }
        }
    }
    $query = "UPDATE users SET nama='$nama', username ='$username', pswd ='$password', level = '$level' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Has been save');document.location='?page=data%20promo';</script>";
    } else {
        echo "<script>alert('Can't Save');document.location='?page=data%20promo';</script>";
    }
}

?>