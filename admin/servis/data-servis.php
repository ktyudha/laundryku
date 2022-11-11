<section class="content" id="data servis">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                $queri = mysqli_query($conn, "SELECT * FROM servis");
                                while ($data = mysqli_fetch_array($queri)) {
                                    $id = $data['id'];
                                ?>
                                    <tr class="text-center">
                                        <td><?php echo $no; ?></td>
                                        <td class="text-center"><img src="../assets/<?php echo $data['image_url']; ?>" style="width:200px;"></td>
                                        <td class="font-weight-bold"><?php echo $data['tagline']; ?></td>
                                        <td><?php echo $data['deskripsi']; ?></td>
                                        <td>
                                            <a href="index.php?page=editservis&&updateid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-warning text-white" name="update" id="update"><i class="fas fa-edit"> Edit</i></button></a>
                                            <a href="../assets/db/authentication.php?deleteservisid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-danger text-white" name="delete" id="delete" onclick="return confirm('are you sure to delete?')"><i class="fas fa-trash"> Delete</i></button></a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>