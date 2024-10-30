<?php
session_start();

include 'koneksi.php';

// Jalankan query
$queryContact = mysqli_query($koneksi, "SELECT * FROM contact WHERE deleted_at IS NULL");

// Periksa apakah query berhasil dijalankan
if (!$queryContact) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Jika parameter ?delete ada
if (isset($_GET['delete'])) {
    $id = $_GET['delete']; // Mengambil nilai parameter

    // Pastikan id yang diterima valid untuk menghindari SQL Injection
    $id = mysqli_real_escape_string($koneksi, $id);

    // Jalankan query delete
    $delete = mysqli_query($koneksi, "DELETE FROM contact WHERE id ='$id'");

    // Periksa apakah query delete berhasil
    if ($delete) {
        header("location:contact.php?hapus=berhasil");
        exit(); // Hentikan eksekusi setelah redirect
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>User Page</title>
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
                                <h5 class="m-b-10">Contact Settings Page</h5>
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
                            <h5>Data User</h5>
                        </div>
                        <div class="card-body">
                            <?php if (isset($_GET['hapus'])): ?>
                                <div class="alert alert-danger" role="alert">
                                    Data berhasil dihapus
                                </div>
                            <?php endif ?>
                            <div align="right" class="mb-3">
                                <a href="kirim-pesan.php" class="btn btn-primary">Tambah</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Pesan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $rowContacts = [];
                                    if ($queryContact) {
                                        $rowContacts = mysqli_fetch_all($queryContact, MYSQLI_ASSOC);
                                    }
                                    $no = 1;
                                    foreach ($rowContacts as $rowContact) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $rowContact['nama'] ?></td>
                                            <td><?php echo $rowContact['email'] ?></td>
                                            <td><?php echo $rowContact['subject'] ?></td>
                                            <td><?php echo $rowContact['message'] ?></td>
                                            <td>
                                                <a href="kirim-pesan.php?pesanId=<?php echo $rowContact['id'] ?>" class="btn btn-success btn-sm">
                                                    <span>Balas Pesan</span>
                                                </a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini??')" href="kirim-pesan.php?delete=<?php echo $rowContact['id'] ?>" class="btn btn-danger btn-sm">
                                                    <span class="tf-icon bx bx-trash"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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