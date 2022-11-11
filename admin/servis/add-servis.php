<section class="content" id="Add Carousel">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Servis</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="../assets/db/authentication.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Data -->
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image">
                  </div>
                  <div class="form-group">
                    <label for="tagline">Judul</label>
                    <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Judul" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputDeskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="exampleInputdeskripsi" cols="30" rows="3" placeholder="deskripsi"></textarea>
                  </div>
                </div>

                <div class="col-sm-6">
                 
                  <label for="ckeditor">Notes</label>
                  <textarea id="summernote" name="note" rows="3"></textarea>
                  <div class="form-group text-right">
                    <button class="btn btn-primary" type="submit" id="addServis" name="addServis">Simpan</button>
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