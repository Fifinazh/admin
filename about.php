<?php
include 'admin/koneksi.php';

$queryAbout= mysqli_query($koneksi, "SELECT * FROM about ORDER BY id DESC");
$rowAbout = mysqli_fetch_assoc($queryAbout);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <?php include 'inc/nav.php' ?>
    <section id="about" class="full-height px-lg-5">
        <div class="container">
            <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-5">
                    <h6 class="text-brand">Who am i ?</h6>
                    <h1>ABOUT ME</h1>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-md-6 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <div class="service p-4 bg-base rounded-4 shadow-effect ">
                        <p><?php echo $rowAbout['isi_about'] ?></p>
                    </div>
                </div>

                <div class="col-md-6 px-5" data-aos="fade-up" data-aos-delay="300">
                    <img src="admin/upload/<?php echo $rowAbout['foto'] ?>" alt="" class="img-about">
                </div>
            </div>
        </div>
    </section>
    <?php include 'inc/js.php' ?>
</body>

</html>