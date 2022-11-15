<br>
<br>
<section class="Tempat mt-5" id="tempat">
 
      <div class="owl-informasi owl-carousel owl-theme owl-lazy my-0">
        <?php
        $sql = "SELECT * FROM informasi ORDER BY id DESC";
        $query = mysqli_query($conn, $sql);

        $promo = [];

        while ($data = mysqli_fetch_array($query)) {
          array_push($promo, $data);
        }

        for ($promoIndex = 0; $promoIndex < 5; $promoIndex++) {
          $data = $promo[$promoIndex];
        ?>
          
            <div class="item my-0">
                  <img src="../assets/<?php echo $data['image_url']; ?>" class="mx-0 my-0 img-fluid" alt="...">
            </div>
        <?php
        }
        ?>

      </div>
 
</section>
