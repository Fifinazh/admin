<?php
include 'admin/koneksi.php';
$queryPort = mysqli_query($koneksi, "SELECT * FROM portfolio ORDER BY id DESC LIMIT 4");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <?php include 'inc/nav.php' ?>
<section id="portfolio" class="full-height px-lg-5">
        <div class="container">
            <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                    <h6 class="text-brand">WORK</h6>
                    <h1>My Recent Projects</h1>
                </div>
            </div>

            <div class="row gy-4">
                <?php while ($rowPort = mysqli_fetch_assoc($queryPort)): ?>
                <div class="col-md-6" data-aos="fade-up">
                    <div class="card-custom rounded-4 bg-base shadow-effect">
                        <div class="card-custom-image rounded-4">
                            <img
                                class="rounded-4"
                                src="admin/upload/<?php echo $rowPort['foto'] ?>"
                                alt=""
                            />
                        </div>
                        <div class="card-custom-content p-4">
                            <h4><?php echo $rowPort['judul_project'] ?></h4>
                            <p>
                            <?php echo $rowPort['ket_project'] ?>
                            </p>
                            <!-- <a href="#" class="link-custom">Read More</a> -->
                        </div>
                    </div>
                </div>
                <?php endwhile ?>
            </div>

            <!-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="./aset/images/project-2.png"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <h4>Startup Landing Page</h4>
                  <p>
                    Innovation that exceeds expectations. Astra is a true
                    template equiqed with all the elements you could ever need
                    to put together
                  </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-md-6" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="./assets/images/project-3.png"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <h4>Startup Landing Page</h4>
                  <p>
                    Innovation that exceeds expectations. Astra is a true
                    template equiqed with all the elements you could ever need
                    to put together
                  </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="./assets/images/project-4.png"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <h4>Startup Landing Page</h4>
                  <p>
                    Innovation that exceeds expectations. Astra is a true
                    template equiqed with all the elements you could ever need
                    to put together
                  </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div> -->
           
        </div>
      </section>
    <?php include 'inc/js.php' ?>
</body>

</html>