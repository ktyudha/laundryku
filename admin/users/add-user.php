<section class="content" id="Add User">
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
                    <input type="file" class="form-control-file" name="image" id="image" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="username" required>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="password" required>
                  </div>
                  <div class="form-group mb-5">
                    <label>Level</label>
                    <select class="form-control" name="level">
                      <option value="superuser">Superuser</option>
                      <option value="user">User</option>
                    </select>
                  </div>
                  <!-- checkbox -->
                  <div class="form-group text-right">
                    <button class="btn btn-primary" type="submit" id="adduser" name="adduser">Simpan</button>
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