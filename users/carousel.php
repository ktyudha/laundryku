            <?php
            $status = 1;
            $sql = "SELECT * FROM carosel WHERE status ='$status'";
            $query = mysqli_query($conn, $sql);

            $carousel = [];

            while ($data = mysqli_fetch_array($query)) {
              array_push($carousel, $data);
            }


            ?>
            <br>
            <br>
            <section class="home" id="home">
              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <?php
                  for ($carouselIndex = 0; $carouselIndex < count($carousel); $carouselIndex++) {
                    $data = $carousel[$carouselIndex];
                  ?>
                    <div class="carousel-item <?php echo $carouselIndex == 0 ? "active" : ""; ?>" id="carousel-<?php echo $carouselIndex; ?>" data-bs-interval="2000">
                      <img src="../assets/<?php echo $data['image_url'] ?>" class="d-block w-100" alt="...">
                    </div>
                  <?php
                  }
                  ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              </div>
            </section>