<section class="content" id="data promo">
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
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Masa Berlaku</th>
                                    <th>Show</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                $queri = mysqli_query($conn, "SELECT * FROM promo");
                                while ($data = mysqli_fetch_array($queri)) {
                                    $id = $data['id'];
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td class="text-center"><img src="../assets/<?php echo $data['image_url']; ?>" style="width:200px;"></td>
                                        <td class="font-weight-bold"><?php echo $data['tagline']; ?></td>
                                        <td><?php echo date("j F Y", $data['masaberlaku']); ?></td>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" onchange="onChangeCarouselStatus(this)" id="customCheck-<?php echo $id; ?>" <?php echo $data['status'] == 1 ? "checked" : ""; ?>>
                                                <label class="custom-control-label font-weight-normal" for="customCheck-<?php echo $id; ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="index.php?page=editpromo&&updateid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-warning text-white" name="update" id="update"><i class="fas fa-edit"> Edit</i></button></a>
                                            <a href="../assets/db/authentication.php?deletepromoid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-danger text-white" name="delete" id="delete" onclick="return confirm('are you sure to delete?')"><i class="fas fa-trash"> Delete</i></button></a>
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
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Masa Berlaku</th>
                                    <th>Show</th>
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

<script>
    function onChangeCarouselStatus(element) {
        var elementId = element.id;
        var isChecked = $("#" + elementId).prop('checked');
        var carouselStatus = isChecked ? 1 : 0;

        const elementIdStrArray = elementId.split("-");
        var carouselId = elementIdStrArray[1];

        $.get("promo/isshow.php?carouselId=" + carouselId + "&carouselStatus=" + carouselStatus, function(data, status) {
            // alert(data + " " + status);
        });

    }
</script>