<section class="pelayanan mt-5" id="pelayanan">
      <h1 class="text-center fw-bold">Proses</h1>
      <div class="container">
        <div class="owl-carousel owl-theme">

        <?php 
        $sql = "SELECT * FROM servis";
        $query = mysqli_query($conn, $sql);
        
        while ($data = mysqli_fetch_array($query)) {
          ?>
          <div class="item">
            <img src="assets/<?php echo $data['image_url']; ?>" alt="">
          </div>
          <?php } ?>
        </div>
      </div>
    </section>