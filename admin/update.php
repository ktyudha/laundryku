<?php
include('../assets/db/db-conn.php');
$id = $_GET['updateid'];

if (isset($_GET['updateid'])) {
  $id = $_GET['updateid'];
} else {
  echo "<script>alert('Nomor Barang Belum Dipilih');document.location='index.php';</script>";
}

$sql = "SELECT * FROM orderan WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$id     = $data['id'];
$nama = $data['nama'];
$paket = $data['paket'];
$jenis = $data['jenis'];
$berat = $data['berat'];
$catatan = $data['catatan'];
$tgl_pesan = strtotime(date('Y-m-d H:i:s'));
$tgl_ambil = $data['tgl_ambil'];
?>

<section class="content" id="updateform">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Custom Elements</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Data -->
                  <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama" value="<?php echo $data['nama']; ?>" required>
                  </div>
                  <label for="exampleInputPaket">Paket</label>
                  <!-- radio -->
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" name="paket" value="Cuci basah">
                      <label for="customRadio1" class="custom-control-label">Cuci Basah</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio2" name="paket" value="Cuci kering" checked>
                      <label for="customRadio2" class="custom-control-label">Cuci Kering</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio3" name="paket" value="Setrika">
                      <label for="customRadio3" class="custom-control-label">Setrika</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio4" name="paket" value="Cuci + Setrika">
                      <label for="customRadio4" class="custom-control-label">Cuci + Setrika</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCatatan">Catatan</label>
                    <textarea class="form-control" name="catatan" id="exampleInputCatatan" cols="30" rows="3" placeholder="Catatan"><?php echo $data['catatan']; ?></textarea>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputBerat">Berat</label>
                    <input type="text" class="form-control" id="exampleInputBerat" name="berat" placeholder="Berat" value="<?php echo $data['berat']; ?>" required>
                  </div>
                  <!-- checkbox -->
                  <label for="exampleInputJenis">Jenis</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio11" name="jenis" value="Pakaian" checked>
                          <label for="customRadio11" class="custom-control-label">Pakaian</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio12" name="jenis" value="Bed Cover">
                          <label for="customRadio12" class="custom-control-label">Bed Cover</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio13" name="jenis" value="Seprei">
                          <label for="customRadio13" class="custom-control-label">Seprei</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio14" name="jenis" value="Selimut">
                          <label for="customRadio14" class="custom-control-label">Selimut</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio15" name="jenis" value="Karpet">
                          <label for="customRadio15" class="custom-control-label">Karpet</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio16" name="jenis" value="Dll">
                          <label for="customRadio16" class="custom-control-label">Jenis lain</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTglAmbil">Tanggal Ambil</label>
                    <input type="date" class="form-control" id="exampleInputTglAmbil" name="tgl_ambil" placeholder="Tanggal Ambil" value="<?php echo $data['tgl_ambil']; ?>">
                  </div>
                  <div class="form-group text-right">
                    <!-- <a href="../index.php?page=datatable"> -->
                    <button class="btn btn-dark" type="submit" id="back" name="back">Back</button>
                    <button class="btn btn-warning" type="submit" id="update" name="update"><i class="fas fa-edit"></i> Update</button>
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

if (isset($_POST['update'])) {

  $nama = $_POST['nama'];
  $paket = $_POST['paket'];
  $jenis = $_POST['jenis'];
  $berat = $_POST['berat'];
  $catatan = $_POST['catatan'];
  $tgl_pesan = strtotime(date('Y-m-d H:i:s'));
  $tgl_ambil = strtotime($_POST['tgl_ambil']);

  $sql = "UPDATE orderan SET nama='$nama', paket='$paket', jenis='$jenis', berat='$berat', catatan='$catatan', tgl_pesan='$tgl_pesan', tgl_ambil='$tgl_ambil' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
      echo "<script>alert('Has been update');document.location='../admin';</script>";
  } else {
      echo "<script>alert('Can't Update');document.location='index.php';</script>";
  }
}

?>