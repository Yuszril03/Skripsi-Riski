<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Detail Mitra Wisata</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dists/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <?= view('Administrator/Template-Admin/Header') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= view('Administrator/Template-Admin/Sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <button class="btn" onclick="location.href=`<?= base_url() ?>/Mitra-Wisata`" title="Kembali"><i class="fa fa-angle-left fa-2x"></i></button>
                                Detail Wisata
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Mitra Wisata</li>
                                <li class="breadcrumb-item active">Detail Wisata</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="card card-outline card-warning" style="border-radius: 15px;">
                        <div class="card-body">
                            <img id="fotoWisata" src="https://firebasestorage.googleapis.com/v0/b/traveland-429a6.appspot.com/o/images-customer%2Fno-image.png?alt=media&token=87603e1a-2c32-488c-81a6-ad35ce8619a4" width="300" alt="">
                            <h4 class="mt-2 font-weight-bold" id="namaWisataa">Nama Wisata</h4>
                            <div class="d-flex flex-row">
                                <div class="pr-1">
                                    <p style="font-size: 14px;" class="text-muted">
                                        Rating
                                        <span class="text-warning">(4.5)</span>
                                    </p>
                                </div>
                                <div class="pr-1">|</div>
                                <div>
                                    <p style="font-size: 14px;" class="text-muted">
                                        Komentar
                                        <span class="text-primary">(10)</span>
                                    </p>
                                </div>
                            </div>

                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-person text-primary"></i> Data Personal
                            </div>
                            <div class="row">
                                <div class="col-lg col-12">
                                    <p>
                                        <b>Nama Mitra</b><br>
                                        <span id="namaMitra">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Email Mitra</b><br>
                                        <span id="emailMitra">Tidak ada</span>
                                    </p>
                                </div>
                                <div class="col-lg col-12">
                                    <p>
                                        <b>Telefon Mitra</b><br>
                                        <span id="nomorMitra">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Status Mitra</b><br>
                                        <span id="statusMitra">Tidak ada</span>
                                    </p>
                                </div>
                                <div class="col-lg col-12">
                                    <p>
                                        <b>Tanggal Buat Mitra</b><br>
                                        <span id="tanggalBaruMitra">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Tanggal Diperbarui Mitra</b><br>
                                        <span id="tanggalupdateMitra">Tidak ada</span>
                                    </p>
                                </div>
                            </div>

                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-card-text text-primary"></i> Data Detail Wisata
                            </div>

                            <p>
                                <i class="fa fa-map-pin"></i>
                                <span id="alamatWisata">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock

                                </span>
                            </p>

                            <p> <b>Deskripsi</b>
                                <br>
                                <span id="deskripsiWisata">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                </span>
                            </p>

                            <p> <b>Harga Tiket</b></p>
                            <ul>
                                <li>Tiket Anak-Anak : Rp. <span id="hargaAnak"></span></li>
                                <li>Tiket Dewasa : Rp. <span id="hargaDewasa"></span></li>
                            </ul>

                            <div class="row">
                                <div class="col-lg col-12">
                                    <p>
                                        <b>Status Wisata</b><br>
                                        <span id="statusWisata">Tidak ada</span>
                                    </p>
                                </div>
                                <div class="col-lg col-12">
                                    <p>
                                        <b>Tanggal Buat Wisata</b><br>
                                        <span id="tanggalbuatWisata">Tidak ada</span>
                                    </p>
                                </div>
                                <div class="col">
                                    <p>
                                        <b>Tanggal Diperbarui Wisata</b><br>
                                        <span id="tanggalupdateWisata">Tidak ada</span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= view('Administrator/Template-Admin/Footer') ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/AdminLTE/dists/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/AdminLTE/dists/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>/AdminLTE/dists/js/pages/dashboard.js"></script>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-app.js";
        import {
            getDatabase,
            ref,
            onValue,
            set,
            update
        } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-database.js";
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCBM7EKr0XU_nbfbX9vAliU9gPBTlgBhNw",
            authDomain: "traveland-429a6.firebaseapp.com",
            databaseURL: "https://traveland-429a6-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "traveland-429a6",
            storageBucket: "traveland-429a6.appspot.com",
            messagingSenderId: "569185605053",
            appId: "1:569185605053:web:b8bfa6b71ff890fe98eed4"
        };
        const app = initializeApp(firebaseConfig);
        const db = getDatabase();

        const ValueItem = ref(db, 'Master-Data-Mitra/<?= $DataIDMitra ?>');
        onValue(ValueItem, (kontenn) => {
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('namaMitra').innerHTML = kontenn.val().NamaMitra
            document.getElementById('nomorMitra').innerHTML = kontenn.val().TelefonMitra
            document.getElementById('emailMitra').innerHTML = kontenn.val().EmailMitra
            document.getElementById('tanggalBaruMitra').innerHTML = new Date(kontenn.val().TanggalBuat).toLocaleDateString("id-ID", options)
            document.getElementById('tanggalupdateMitra').innerHTML = new Date(kontenn.val().TanggalUpdate).toLocaleDateString("id-ID", options)
            if (kontenn.val().StatusMitra == 1) {
                document.getElementById('statusMitra').innerHTML = `<span class="badge badge-success">Aktif</span>`
            } else {
                document.getElementById('statusMitra').innerHTML = `<span class="badge badge-secondary">Tidak Aktif</span>`
            }
        })

        const ValueItemWisata = ref(db, 'Master-Data-Wisata/<?= $DataIDWisata ?>');
        onValue(ValueItemWisata, (kontenn) => {
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('namaWisataa').innerHTML = kontenn.val().NamaWisata
            document.getElementById('alamatWisata').innerHTML = kontenn.val().AlamatWisata
            document.getElementById('deskripsiWisata').innerHTML = kontenn.val().DeskripsiWisata
            document.getElementById('hargaDewasa').innerHTML = kontenn.val().HargaDewasa
            document.getElementById('hargaAnak').innerHTML = kontenn.val().HargaAnak
            document.getElementById('tanggalbuatWisata').innerHTML = new Date(kontenn.val().TanggalBuat).toLocaleDateString("id-ID", options)
            document.getElementById('tanggalupdateWisata').innerHTML = new Date(kontenn.val().TanggalUpdate).toLocaleDateString("id-ID", options)
            if (kontenn.val().StatusWisata == 1) {
                document.getElementById('statusWisata').innerHTML = `<span class="badge badge-success">Aktif</span>`
            } else {
                document.getElementById('statusWisata').innerHTML = `<span class="badge badge-secondary">Tidak Aktif</span>`
            }

            if (kontenn.val().fotoWisata != "") {
                document.getElementById('fotoWisata').src = kontenn.val().fotoWisata
            }
        })
    </script>

</body>

</html>