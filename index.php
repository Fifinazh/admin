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
      <section id="portfolio" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">WORK</h6>
              <h1>My Recent Projects</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-6" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="./aset/images/IPDC Landing Page.png"
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
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
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
            </div>

            <div class="col-md-6" data-aos="fade-up">
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
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
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
            </div>
          </div>
        </div>
      </section>

      <!-- REVIEWS -->
      <section id="activity" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">REVIEWS</h6>
              <h1>What our subscribers say</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-4" data-aos="fade-up">
              <div class="review shadow-effect bg-base p-4 rounded-4">
                <div class="text-brand h5">
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                </div>
                <p class="my-3">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel
                  quae facilis fugiat molestias ab illum excepturi, qui optio
                  modi asperiores, delectus maiores!
                </p>
                <div class="person">
                  <h5 class="mb-0">Jon Doe</h5>
                  <p class="mb-0">Twitter</p>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="review shadow-effect bg-base p-4 rounded-4">
                <div class="text-brand h5">
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                </div>
                <p class="my-3">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel
                  quae facilis fugiat molestias ab illum excepturi, qui optio
                  modi asperiores, delectus maiores!
                </p>
                <div class="person">
                  <h5 class="mb-0">Jon Doe</h5>
                  <p class="mb-0">Twitter</p>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="review shadow-effect bg-base p-4 rounded-4">
                <div class="text-brand h5">
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                </div>
                <p class="my-3">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel
                  quae facilis fugiat molestias ab illum excepturi, qui optio
                  modi asperiores, delectus maiores!
                </p>
                <div class="person">
                  <h5 class="mb-0">Jon Doe</h5>
                  <p class="mb-0">Twitter</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //REVIEWS -->

      <!-- BLOG -->
      <section id="blog" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">BLOG</h6>
              <h1>My BLog Posts</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-4" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="./assets/images/blog-post-1.jpg"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <p class="text-brand mb-2">20 Dec, 2022</p>
                  <h5 class="mb-4">
                    Design a creative landing page using Bootstrap 5
                  </h5>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="./assets/images/blog-post-2.jpg"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <p class="text-brand mb-2">20 Dec, 2022</p>
                  <h5 class="mb-4">
                    Design a creative landing page using Bootstrap 5
                  </h5>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="./assets/images/blog-post-3.jpg"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <p class="text-brand mb-2">20 Dec, 2022</p>
                  <h5 class="mb-4">
                    Design a creative landing page using Bootstrap 5
                  </h5>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //BLOG -->

      <!-- CONTACT -->
      <section id="contact" class="full-height px-lg-5">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8 pb-4" data-aos="fade-up">
              <h6 class="text-brand">CONTACT</h6>
              <h1>Interested in working together? Let's talk</h1>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
              <form action="#" class="row g-lg-3 gy-3">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your name"
                  />
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter your email"
                  />
                </div>
                <div class="form-group col-12">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter subject"
                  />
                </div>
                <div class="form-group col-12">
                  <textarea
                    name=""
                    rows="4"
                    class="form-control"
                    placeholder="Enter your message"
                  ></textarea>
                </div>
                <div class="form-group col-12 d-grid">
                  <button type="submit" class="btn btn-brand">
                    Contact me
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- //CONTACT -->

      <!-- FOOTER -->
      <footer class="py-5 px-lg-5">
        <div class="container">
          <div class="row gy-4 justify-content-between">
            <div class="col-auto">
              <p class="mb-0">
                <!-- Designed by <a href="#" class="fw-bold"></a> -->
              </p>
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
      </footer>
      <!-- //FOOTER -->
    </div>
    <!-- //CONTENT WRAPPER -->

    <?php include 'inc/js.php' ?>
  </body>
</html>
