<?php
session_start();

include 'koneksi.php';

//jika button simpan di klik
if (isset($_POST['simpan'])) {
    $judul_home = $_POST['judul_home'];
    $isi_home = $_POST['isi_home'];
    $nomor_wa = $_POST['nomor_wa'];
    $wa_link = $_POST['wa_link'];


    $insert = mysqli_query($koneksi, "INSERT INTO home (judul_home, isi_home, nomor_wa, wa_link) VALUES ('$judul_home','$isi_home','$nomor_wa','$wa_link')");
    header("location:home.php?tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($koneksi, "SELECT * FROM home WHERE id='$id'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

//jika button edit di klik
if (isset($_POST['edit'])) {
    $judul_home = $_POST['judul_home'];
    $isi_home = $_POST['isi_home'];
    $nomor_wa = $_POST['nomor_wa'];
    $wa_link = $_POST['wa_link'];

    $update = mysqli_query($koneksi, "UPDATE home SET judul_home='$judul_home', isi_home='$isi_home', nomor_wa='$nomor_wa', wa_link='$wa_link' WHERE id='$id'");
    header("location:home.php?ubah=berhasil");
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Home Page</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="codedthemes">

    <?php include 'inc/header.php' ?>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <?php include 'inc/sidebar.php' ?>
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <?php include 'inc/topbar.php' ?>
            <!-- [Mobile Media Block end] -->

            <!-- dropdown start -->
            <?php include 'inc/nav-dropdown.php' ?>
            <!-- dropdown end -->
        </div>
    </header>
    <!-- [ Header ] end -->


    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Home Settings Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Other</a></li>
                                <li class="breadcrumb-item" aria-current="page">Sample Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Home</h5>
                        </div>
                        <div class="card-body">
                            <?php if (isset($_GET['hapus'])): ?>
                                <div class="alert alert-success" role="alert">
                                    Data berhasil dihapus
                                </div>
                            <?php endif ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <label for="" class="form-label">Judul Home Page</label>
                                        <input type="text" class="form-control" name="judul_home" placeholder="Masukkan Judul" required value="<?php echo isset($_GET['edit']) ? $rowEdit['judul_home'] : '' ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="form-label">Isi Home page</label>
                                        <textarea name="isi_home" id="" class="mySummernote form-control"><?php echo isset($_GET['edit']) ? $rowEdit['isi_home'] : '' ?></textarea>
                                    </div>
                                    <div class="col-sm-6 mt-3">
                                        <label for="" class="form-label">Nomor Whatsapp</label>
                                        <input type="text" class="form-control" name="nomor_wa" placeholder="Masukkan Nomor Whatsapp" required value="<?php echo isset($_GET['edit']) ? $rowEdit['nomor_wa'] : '' ?>">
                                    </div>
                                    <div class="col-sm-6 mt-3">
                                        <label for="" class="form-label">Link Whatsapp</label>
                                        <input type="url" class="form-control" name="wa_link" placeholder="Masukkan Link Whatsapp" required value="<?php echo isset($_GET['edit']) ? $rowEdit['wa_link'] : '' ?>">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include 'inc/footer-js.php' ?>


</body>

</html>