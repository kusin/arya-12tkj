<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set title this website -->
    <title>SMK Triguna Utama</title>

    <!-- custom vanilla-css for template website -->
    <link rel="stylesheet" href="assets/vanilla-css/css/style.css">

    <!-- custom vanilla-css for navbar -->
    <link rel="stylesheet" href="assets/vanilla-css/css/navbar.css">

    <!-- custom vanilla-css for component website -->
    <link rel="stylesheet" href="assets/vanilla-css/css/component.css">

    <!-- custom vanilla-css for font website -->
    <link rel="stylesheet" href="assets/vanilla-css/css/font.css">

    <!-- custom fontawesome for icon-icon website -->
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="assets/fontawesome/css/solid.css">
</head>

<body>
    <!-- --------------------------------------------------- -->
    <!-- /.wrapper ----------------------------------------- -->
    <!-- --------------------------------------------------- -->
    <div class="wrapper" id="wrapper">

        <!-- --------------------------------------------------- -->
        <!-- /.header ------------------------------------------ -->
        <!-- --------------------------------------------------- -->
        <div class="header" id="header">
            <h1 class="h-header">SMK Triguna Utama Syarif Hidayatullah</h1>
        </div>
        <!-- ./header -->

        <!-- --------------------------------------------------- -->
        <!-- /.navbar ------------------------------------------ -->
        <!-- --------------------------------------------------- -->
        <div class="navbar" id="navbar">
            <nav>
                <a class="a-nav" href="?page=home"><i class="fa-solid fa-home"></i> Home</a>
                <a class="a-nav" href="?page=profil"><i class="fa-solid fa-book"></i> Profil</a>
                <a class="a-nav" href="?page=data-jurusan"><i class="fa-solid fa-graduation-cap"></i> Jurusan</a>
                <a class="a-nav" href="?page=data-guru"><i class="fa-solid fa-user-graduate"></i> Data Guru</a>
                <a class="a-nav" href="?page=data-siswa"><i class="fa-solid fa-user-group"></i> Data Siswa</a>
                <a class="a-nav" href="?page=galeri-foto"><i class="fa-solid fa-image"></i> Galeri Foto</a>
                <a class="a-nav" href="?page=galeri-video"><i class="fa-solid fa-film"></i> Galeri Video</a>
                <a class="a-nav" href="#"><i class="fa-solid fa-envelope"></i> Kontak Kami</a>
            </nav>
        </div>
        <!-- ./navbar -->

        <!-- --------------------------------------------------- -->
        <!-- /.content ----------------------------------------- -->
        <!-- --------------------------------------------------- -->
            <div class="content" id="content">
                <div class="content-left" id="content-left">
                    <?php include "content-left.php"; ?>
                </div>
                <!-- ./content-left -->
                <div class="content-right" id="content-right">
                    <?php include "content-right.php"; ?>
                </div>
                <!-- ./content-right -->
            </div>
            <!-- ./content -->

        <!-- --------------------------------------------------- -->
        <!-- /.footer ------------------------------------------ -->
        <!-- --------------------------------------------------- -->
        <div class="footer" id="footer">
            <p>Copyright 2022 all rights reserved by Aryajaya Alamsyah, S.Kom</p>
        </div>
        <!-- ./footer -->

    </div>
    <!-- ./wrapper -->

    <!-- custom JS fontawesome for icon-icon website -->
    <script src="assets/fontawesome/js/fontawesome.js"></script>
    <script src="assets/fontawesome/js/brands.js"></script>
    <script src="assets/fontawesome/js/solid.js"></script>
</body>

</html>
