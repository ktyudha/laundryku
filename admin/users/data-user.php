<section class="content" id="data user">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Member</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no=1;
                                $queri = mysqli_query($conn, "SELECT * FROM users");
                                while ($data = mysqli_fetch_array($queri)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['level']; ?></td>
                                    <td>
                                        <a href="index.php?page=edituser&&updateid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-warning text-white" name="update" id="update"><i class="fas fa-edit"> Edit</i></button></a>
                                        <a href="../assets/db/authentication.php?userdelid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-danger text-white" name="delete" id="delete" onclick="return confirm('are you sure to delete?')"><i class="fas fa-trash"> Delete</i></button></a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
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