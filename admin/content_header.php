<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-capitalize font-weight-bold"><?php 
                if ($_GET['page'] == TRUE) {
                    echo $_GET['page'];
                } else {
                    echo 'Dashboard';
                }
                ?>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-capitalize active"><?php 
                if ($_GET['page'] == TRUE) {
                    echo $_GET['page'];
                } else {
                    echo 'Dashboard';
                }
                ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>