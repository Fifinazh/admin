<?php
include 'admin/koneksi.php';

//data education
$queryEdu = mysqli_query($koneksi, "SELECT * FROM education ORDER BY id DESC LIMIT 3");
$queryExp = mysqli_query($koneksi, "SELECT * FROM experience ORDER BY id DESC LIMIT 3");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <?php include 'inc/nav.php' ?>
    <section id="resume" class="full-height px-lg-5">
        <div class="container">
            <div class="row pb-4" data-aos="fade-up">
                <div class="col-lg-8">
                    <h1>My Education & Experience</h1>
                </div>
            </div>

            <div class="row gy-5">
                <?php while ($rowEdu = mysqli_fetch_assoc($queryEdu)): ?>
                    <div class="col-lg-6">
                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">
                            Education Level
                        </h3>
                        <div class="row gy-4">
                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4><?php echo $rowEdu['last_edu'] ?></h4>
                                    <p class="text-brand mb-2">
                                        <?php echo $rowEdu['level_name'] ?>
                                    </p>
                                    <p class="mb-0">
                                        <?php echo $rowEdu['isi_edu'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>

                <div class="col-lg-6">
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">
                        Organizational Experience
                    </h3>
                    <div class="row gy-4">
                        <?php while ($rowExp = mysqli_fetch_assoc($queryExp)): ?>
                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4><?php echo $rowExp['nama_exp'] ?></h4>
                                    <p class="text-brand mb-2"><?php echo $rowExp['tempat_exp'] ?></p>
                                    <p class="mb-0">
                                        <?php echo $rowExp['kegiatan'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'inc/js.php' ?>
</body>

</html>