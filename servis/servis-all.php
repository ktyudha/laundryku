<?php
$sql = "SELECT * FROM servis";
$query = mysqli_query($conn, $sql);
$servis = [];

while ($data = mysqli_fetch_array($query)) {
    array_push($servis, $data);
}
?>

<div class="container">
    <div class="row justify-content-between mt-5">
        <div class="col-auto">
            <a href="../">
                <button type="button" class="btn bg-white border-0 text-uppercase fw-bold"><i class="fas fa-arrow-left"></i> servis</button>
            </a>
        </div>
        <div class="col-md-4 me-3">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </div>
    <div class="row mt-3">
        <?php

        for ($servisIndex = 0; $servisIndex < count($servis); $servisIndex++) {
            $data = $servis[$servisIndex];
        ?>
            <div class="col-md-3">
            <button type="button" class="border-0 bg-white text-dark" data-bs-target="#myModal-<?php echo $servisIndex; ?>" data-bs-toggle="modal">
              <div class="card border-0 my-3" onmouseover="onMouseOver(this)" onmouseout="onMouseOut(this)">
                <div class="mt-3 mx-3">
                  <img src="../assets/<?php echo $data['image_url']; ?>" class="card-img-top rounded" alt="...">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title fw-bold"><?php echo $data['tagline']; ?></h5>
                  <!-- <p class="card-text"><i class="fas fa-calendar-alt"></i> Berlaku hingga <?php echo date("j F Y", $data['masaberlaku']); ?></p> -->
                </div>
            </div>
          </button>
            </div>
        <?php
        } ?>
    </div>
    <?php
    for ($servisIndex = 0; $servisIndex < count($servis); $servisIndex++) {
        $data = $servis[$servisIndex];
    ?>

        <div class="modal" id="myModal-<?php echo $servisIndex; ?>">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <button type="button" class="btn bg-white border-0 text-uppercase fw-bold" data-bs-dismiss="modal"><i class="fas fa-arrow-left"></i> servis</button>
                        <div class="card border-0 my-3 me-3">
                            <div class="row">
                                <!-- IMAGE -->
                                <div class="col-md-5">
                                    <img src="../assets/<?php echo $data['image_url']; ?>" class="img-fluid rounded mt-2" alt="...">
                                </div>
                                <!-- body -->
                                <div class="col-md-7 my-auto ">
                                    <h3 class="fw-bold"><?php echo $data['tagline']; ?></h3>
                                    <p><?php echo $data['note']; ?></p>
                                    <a href="user/">
                                        <button class="btn btn-primary text-center fw-bold mt-3" type="submit">Pesan Sekarang</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
</div>


<script>
    function onMouseOver(element) {
        element.classList.add("shadow");
    }

    function onMouseOut(element) {
        element.classList.remove("shadow");
    }
</script>