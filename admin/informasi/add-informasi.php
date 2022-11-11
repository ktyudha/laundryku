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
            <form action="../assets/db/authentication.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                  <!-- Data -->
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image">
                  </div>
                  <div class="form-group">
                    <label for="tagline">Judul</label>
                    <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Judul" required>
                  </div>
                  
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputDeskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="exampleInputdeskripsi" cols="30" rows="2" placeholder="deskripsi"></textarea>
                  </div>
                  <button class="btn btn-primary text-start" type="submit" id="addInforamsi" name="addInformasi">Simpan</button>
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