<section class="content" id="datatable">
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
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Paket</th>
                                    <th>Jenis</th>
                                    <th>Berat</th>
                                    <th>Catatan</th>
                                    <th>Tgl Pesan</th>
                                    <th>Tgl Ambil</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no=1;
                                $queri = mysqli_query($conn, "SELECT * FROM orderan");
                                while ($data = mysqli_fetch_array($queri)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['paket']; ?></td>
                                    <td><?php echo $data['jenis']; ?></td>
                                    <td><?php echo $data['berat']; ?></td>
                                    <td><?php echo $data['catatan']; ?></td>
                                    <td><?php echo date("j F Y", $data['tgl_pesan']) ?></td>
                                    <td><?php echo date("j F Y", $data['tgl_ambil']); ?></td>
                                    <td>
                                        <a href="index.php?page=updateform&&updateid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-warning text-white" name="update" id="update"><i class="fas fa-edit"> Edit</i></button></a>
                                        <a href="../assets/db/authentication.php?deleteid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-danger text-white" name="delete" id="delete" onclick="return confirm('are you sure to delete?')"><i class="fas fa-trash"> Delete</i></button></a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Paket</th>
                                    <th>Jenis</th>
                                    <th>Berat</th>
                                    <th>Catatan</th>
                                    <th>Tgl Pesan</th>
                                    <th>Tgl Ambil</th>
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