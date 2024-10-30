<?php
session_start();

include 'koneksi.php';

//jika button simpan di klik
if (isset($_POST['simpan'])) {
    $judul_project = $_POST['judul_project'];
    $ket_project = $_POST['ket_project'];


    //$_POST: form input name=''
    //$_GET: url ?param='nilai'
    //$_FILES: ngambil nilai dari input type file
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        //kita bikin tipe foto: png, jpg, jpeg
        $ext = array('png', 'jpg', 'jpeg', 'jfif');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        //JIKA EXTENSI FOTO TIDAK EXT YANG TERDAFTAR DI ARRAY EXT
        if (!in_array($extFoto, $ext)) {
            echo "Maaf, foto tidak dapat diupload karena format tidak sesuai";
            die;
        } else {
            //pindahkan gambar dari tmp folder ke folder yg sudah kita buat
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);

            $insert = mysqli_query($koneksi, "INSERT INTO portfolio (judul_project, ket_project, foto) VALUES ('$judul_project','$ket_project','$nama_foto')");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO portfolio (judul_project, ket_project) VALUES ('$judul_project','$ket_project')");
    }


    header("location:portfolio.php?tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id='$id'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

//jika button edit di klik
if (isset($_POST['edit'])) {
    $judul_project = $_POST['judul_project'];
    $ket_project = $_POST['ket_project'];

    // jika user ingin memasukkan gambar
    if (!empty($_FILES['foto']['name'])) {
        $nama_foto = $_FILES['foto']['name'];
        $ukuran_foto = $_FILES['foto']['size'];

        //kita bikin tipe foto: png, jpg, jpeg
        $ext = array('png', 'jpg', 'jpeg', 'jfif');
        $extFoto = pathinfo($nama_foto, PATHINFO_EXTENSION);

        if (!in_array($extFoto, $ext)) {
            echo "Maaf, foto tidak dapat diupload karena format tidak sesuai";
            die;
        } else {
            unlink('upload/' . $rowEdit['foto']);
            move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $nama_foto);
            // coding ubah/update disini
            $update = mysqli_query($koneksi, "UPDATE portfolio SET judul_project='$judul_project', ket_project='$ket_project', foto='$nama_foto' WHERE id='$id'");
            header("location:portfolio.php?ubah=berhasil");
        }
    } else {
        //kondisi kalau user tidak ingin memasukkan gambar
        $update = mysqli_query($koneksi, "UPDATE portfolio SET judul_project='$judul_project', ket_project='$ket_project' WHERE id='$id'");
        header("location:portfolio.php?ubah=berhasil");
    }
}
?>

?>

<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>About Page</title>
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
                                <h5 class="m-b-10">About Page</h5>
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
                            <h5><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Portfolio</h5>
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
                                        <label for="" class="form-label">Judul Project</label>
                                        <input type="text" class="form-control" name="judul_project" placeholder="Masukkan Judul Project" required value="<?php echo isset($_GET['edit']) ? $rowEdit['judul_project'] : '' ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="form-label">Keterangan Project</label>
                                        <textarea name="ket_project" id="" class="mySummernote form-control"><?php echo isset($_GET['edit']) ? $rowEdit['ket_project'] : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-12">
                                        <label for="" class="form-label">Foto</label>
                                        <input type="file" name="foto">
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