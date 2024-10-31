<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <?php include 'inc/nav.php' ?>
    <section id="contact" class="full-height px-lg-5">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8 pb-4" data-aos="fade-up">
              <h6 class="text-brand">CONTACT</h6>
              <h1>Interested in working together? Let's talk</h1>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                <?php 
                    if(isset($_GET['status']) && $_GET['status'] == "success" ) {
                    ?>
                        <div class="alert alert-success" role="alert">
                            Data berhasil dikirim, mohon tunggu balasannya
                        </div>
                    <?php    
                    } elseif(isset($_GET['status']) && $_GET['status'] == "email-sudahada") {
                        ?>
                        <div class="alert alert-warning" role="alert">
                            Email sudah digunakan, anda hanya bisa mengirim pesan satu kali saja!
                        </div>
                        <?php
                    }
                    ?>

              <form  method="POST" action="contact-controller/insert-contact.php" class="row g-lg-3 gy-3">
                <div class="form-group col-md-6">
                  <input
                    name="nama"
                    type="text"
                    class="form-control"
                    placeholder="Enter your name"
                  />
                </div>
                <div class="form-group col-md-6">
                  <input
                    name="email"
                    type="email"
                    class="form-control"
                    placeholder="Enter your email"
                  />
                </div>
                <div class="form-group col-12">
                  <input
                    name="subject"
                    type="text"
                    class="form-control"
                    placeholder="Enter subject"
                  />
                </div>
                <div class="form-group col-12">
                  <textarea
                    name="messsage"
                    rows="4"
                    class="form-control"
                    placeholder="Enter your message"
                  ></textarea>
                </div>
                <div class="form-group col-12 d-grid">
                  <button name="simpan" type="submit" class="btn btn-brand">
                    Contact me
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
    <?php include 'inc/js.php' ?>
</body>

</html>