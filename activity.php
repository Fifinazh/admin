<?php
include 'admin/koneksi.php';
$queryAct = mysqli_query($koneksi, "SELECT * FROM activity ORDER BY id DESC LIMIT 3");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <?php include 'inc/nav.php' ?>
    <section id="activity" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h1>DOCUMENTATION OF ACTIVITY</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="d-flex flex-wrap justify-content-center">
                <?php while ($rowAct = mysqli_fetch_assoc($queryAct)): ?>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                  <div class="card" style="width: 25rem;">
                    <img src="admin/upload/<?php echo $rowAct['foto'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text"><?php echo $rowAct['ket_act'] ?></p>
                  </div>
                </div>
                <?php endwhile ?>
            </div>
          </div>
        </div>
    </section>
    <?php include 'inc/js.php' ?>
</body>

</html>