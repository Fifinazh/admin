<?php
include 'admin/koneksi.php';

$queryHome= mysqli_query($koneksi, "SELECT * FROM home ORDER BY id DESC");
$rowHome = mysqli_fetch_assoc($queryHome);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'inc/head.php' ?>
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
          <span class="h3 fw-bold d-block d-lg-none">Fitria Nur Azizah</span>
          <img
            src="./aset/images/my-profile.jpg"
            class="d-none d-lg-block rounded-circle"
            alt=""
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#resume">Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#activity">Activity</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">
      <!-- HOME -->
      <section id="home" class="full-height px-lg-5">
        <div class="container">
          <div class="row" data-aos="fade-down">
            <div class="col-lg-12 text-center">
              <h1 class="display-4 fw-bold">
                HI THERE!! I AM
                <span class="text-brand"><?php echo $rowHome['judul_home'] ?></span>
              </h1>
              <p class="lead">
                <?php echo $rowHome['isi_home'] ?>
              </p>
              <a href="#portfolio" class="btn btn-brand">Explore My Projects!</a>
              <a href="<?php echo $rowHome['wa_link'] ?>" class="link-custom"><?php echo $rowHome['nomor_wa'] ?></a>
            </div>
          </div>
        </div>
      </section>
      <!-- //HOME -->

      <!-- ABOUT -->
      <?php include 'about.php' ?>
      <!-- ABOUT -->

      <!-- RESUME -->
      <?php include 'resume.php' ?>
      <!-- RESUME -->

      <!-- PORTFOLIO -->
      <?php include 'portfolio.php' ?>
      <!-- POTFOLIO -->

      <!-- ACTIVITY -->
      <?php include 'activity.php' ?>
      <!-- ACTIVITY -->

      

      <!-- CONTACT -->
      <?php include 'contact.php' ?>
      <!-- //CONTACT -->

      <!-- FOOTER -->
      <!-- <footer class="py-5 px-lg-5">
        <div class="container">
          <div class="row gy-4 justify-content-between">
            <div class="col-auto">
              <p class="mb-0">
                Designed by <a href="#" class="fw-bold"></a> -->
              <!-- </p>
            </div>
            <div class="col-auto">
              <div class="social-icons">
                <a href="#"><i class="lab la-twitter"></i></a>
                <a href="#"><i class="lab la-instagram"></i></a>
                <a href="#"><i class="lab la-dribbble"></i></a>
                <a href="#"><i class="lab la-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer> -->
      <!-- //FOOTER -->
    </div>
    <!-- //CONTENT WRAPPER -->

    <?php include 'inc/js.php' ?>
  </body>
</html>
