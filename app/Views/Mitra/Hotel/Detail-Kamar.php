<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Detail Data Kegiatan</title>

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

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        .file-upload {
            height: max-content;
            border: 2px dotted gray;
            border-radius: 15px;

        }

        .Imagees {
            min-height: 200px;
            width: 50%;
            margin: auto;
            object-fit: cover;
            padding: 20px;
            margin-top: 20px;
        }

        .Imagees img {
            width: 100%;
        }

        .file-upload-input {
            opacity: 0;
            height: 100px;
        }

        #map {

            position: relative;
            top: 0;
            bottom: 0;
            height: 300px;
            width: auto;
        }

        .mapboxgl-canvas {
            border-radius: 15px;
        }

        .mapboxgl-ctrl-bottom-left {
            display: none;
        }

        .mapboxgl-ctrl-bottom-right {
            display: none;
        }

        .overlay {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .overlay button {
            font: 600 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
            background-color: #3386c0;
            color: #fff;
            display: inline-block;
            margin: 0;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .coordinates {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            position: absolute;
            bottom: 40px;
            left: 10px;
            padding: 5px 10px;
            margin: 0;
            font-size: 11px;
            line-height: 18px;
            border-radius: 3px;
            display: none;
        }

        .overlay button:hover {
            background-color: #4ea0da;
        }

        .coverBerita {
            min-height: 200px;
            width: 50%;
            margin-left: 35%;
            object-fit: cover;
            padding: 20px;
            border-radius: 15px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <?= view('Mitra/Template-Mitra/Header') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= view('Mitra/Template-Mitra/Sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0">Detail Berita & Event</h1> -->

                            <h1 class="m-0">
                                <button class="btn" onclick="location.href=`<?= base_url() ?>/Data-Kamar`" title="Kembali"><i class="fa fa-angle-left fa-2x"></i></button>
                                Detail Kamar
                            </h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Data Kamar</li>
                                <li class="breadcrumb-item active">Detail Kamar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="card card-outline card-warning" style="border-radius: 15px;">
                        <div class="card-body">

                            <!-- image -->
                            <div class="coverBerita">
                                <!-- <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" width="300" id="NoneImage" alt=""> -->
                                <img id="imgdetailkamar" src="https://firebasestorage.googleapis.com/v0/b/traveland-429a6.appspot.com/o/images-customer%2Fno-image.png?alt=media&token=87603e1a-2c32-488c-81a6-ad35ce8619a4" width="300" id="NoneImage" alt="">
                            </div>
                            <!-- /image -->

                            <h4 id="namakamar" style="font-size: 35px;" class="mt-2 font-weight-bold">None</h4>

                            <div class="row">
                                <div class="col-4">
                                    <p id="labelTanggal" class="mt-2 font-weight-bold">
                                        Harga Sewa
                                    </p>
                                    <div class="group">
                                        <p>Rp. <span id="detailHargaSewa">None</span></p>
                                    </div>

                                    <p id="labelTanggal" class="mt-2 font-weight-bold">
                                        Jumlah Kamar
                                    </p>
                                    <div class="group">
                                        <p><span id="detailJumlahKamar">None</span> Kamar</p>
                                    </div>

                                    <p id="labelTanggal" class="mt-2 font-weight-bold">
                                        Mkasimal Menginap
                                    </p>
                                    <div class="group">
                                        <p><span id="detailMaksimalMenginap"></span> Hari</p>

                                    </div>


                                </div>

                                <div id="groupTanggal" class="col-4">
                                    <p class="mt-2 font-weight-bold">
                                        Tanggal Buat
                                    </p>
                                    <div class="group">
                                        <i class="bi bi-calendar3"></i><span id="tanggalbuatt"></span>
                                    </div>

                                    <p class="mt-2 font-weight-bold">
                                        Tanggal Diperbarui
                                    </p>
                                    <div class="group">
                                        <i class="bi bi-calendar3"></i><span id="tanggaldiperbaruii"></span>
                                    </div>
                                    <p id="labelTanggal" class="mt-2 font-weight-bold">
                                        Status
                                    </p>
                                    <div class="group">
                                        <span id="detailStatusKamar">None</span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <p id="labelTanggal" class="mt-2 font-weight-bold">
                                        Fasilitas
                                    </p>
                                    <div>
                                        <span id="detailFasilitas">None</span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
        <?= view('Mitra/Template-Mitra/Footer') ?>

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
</body>
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
    import {
        getStorage,
        ref as refImage,
        uploadBytesResumable,
        getDownloadURL
    } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-storage.js";

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
    const storage = getStorage();

    var parseJsonDetailKamar = {};

    const ValueItem = ref(db, 'Master-Data-Hotel-Detail/<?= $DataID ?>');
    onValue(ValueItem, (kontenns) => {
        let PostD = {

            NamaKamar: kontenns.val().NamaKamar,
            FasilitasKamar: kontenns.val().FasilitasKamar,
            HargaKamar: kontenns.val().HargaKamar,
            JumlahKamar: kontenns.val().JumlahKamar,
            MaksimalMenginap: kontenns.val().MaksimalMenginap,
            StatusKamar: kontenns.val().StatusKamar,
            TanggalBuat: kontenns.val().TanggalBuat,
            TanggalUpdate: kontenns.val().TanggalUpdate,
            fotoKamar: kontenns.val().fotoKamar
        };
        parseJsonDetailKamar = (PostD)


        if (Boolean(parseJsonDetailKamar) == false) {
            Swal.fire({
                title: 'Error',
                text: 'Gagal Memuat Data.',
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Okey'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            })
        } else {
            if (kontenns.val().fotoKamar == "") {

            } else {
                document.getElementById('imgdetailkamar').src = kontenns.val().fotoKamar
            }

            if (kontenns.val().StatusKamar == 1) {
                document.getElementById('detailStatusKamar').innerHTML = `<span class="badge badge-success">Aktif</span>`
            } else {
                document.getElementById('detailStatusKamar').innerHTML = `<span class="badge badge-secondary">Tidak Aktif</span>`
            }



            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };

            document.getElementById('namakamar').innerHTML = kontenns.val().NamaKamar
            document.getElementById('detailHargaSewa').innerHTML = kontenns.val().HargaKamar
            document.getElementById('detailMaksimalMenginap').innerHTML = kontenns.val().MaksimalMenginap
            document.getElementById('detailFasilitas').innerHTML = kontenns.val().FasilitasKamar
            document.getElementById('detailJumlahKamar').innerHTML = kontenns.val().JumlahKamar
            document.getElementById('tanggalbuatt').innerHTML = new Date(kontenns.val().TanggalBuat).toLocaleDateString("id-ID", options)
            document.getElementById('tanggaldiperbaruii').innerHTML = new Date(kontenns.val().TanggalUpdate).toLocaleDateString("id-ID", options)


        }
    })
</script>

</html>