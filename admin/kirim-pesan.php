<?php
session_start();
include 'koneksi.php';


$ids = $_GET['pesanId'];
$selectContact = mysqli_query($koneksi, "SELECT * FROM contact WHERE id = $ids");
$rowContact = mysqli_fetch_assoc($selectContact);

if (isset($_GET['pesanId'])) {
    $id = $_GET['pesanId'];
    $selectContact = mysqli_query($koneksi, "SELECT * FROM contact WHERE id = $id");
    $rowContact = mysqli_fetch_assoc($selectContact);
}


if (isset($_POST['kirim-bosss']) && isset($_GET['pesanId'])) {
    $id = $_GET['pesanId'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $balaspesan = $_POST['balaspesan'];

    $header = "From: fitrianurzh01@gmail.com" . "\r\n" .
        "Reply-To: fitrianurzh@gmail.com" . "\r\n" .
        "Content-Type: text/plain; charset=UTF8" . "\r\n" .
        "MIME-Version: 1.0" . "\r\n";

    if (mail($email, $subject, $balaspesan, $header)) {
        echo "Berhasil";
        header("Location: contact-admin.php?status=berhasil-terkirim");
        exit();
    } else {
        echo "Gagal";
        header("Location: kirim-pesan.php?status=gagal-terkirim");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Contact Page</title>
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
                                <h5 class="m-b-10">User Page</h5>
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
                            <h5>Balas Pesan</h5>
                        </div>
                        <div class="card-body">
                            <ul style="list-style-type: '-'">
                                <li>
                                    <pre>Name : <?php echo $rowContact['nama'] ?></pre>
                                </li>
                                <li>
                                    <pre>Email : <?php echo $rowContact['email'] ?></pre>
                                </li>
                                <li>
                                    <pre>Subject : <?php echo $rowContact['subject'] ?></pre>
                                </li>
                                <li>
                                    <pre>Message : <?php echo $rowContact['message'] ?></pre>
                                </li>
                            </ul>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mt-3">
                                    <input type="text" name="email" value="<?php echo $rowContact['email'] ?>">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label" for="">Subject</label>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label">Balas Pesan</label>
                                    <textarea class="form-control" name="balaspesan" cols="30" rows="10"></textarea>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary" name="kirim-bosss">Kirim Pesan</button>
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