<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Detail Customer</title>

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

        .coverImage {
            width: 100%;
            height: 200px;
            background: linear-gradient(to left, yellow, orange);
            border-radius: 20px;
            padding-top: 10px;
            margin-bottom: 20px;
        }

        .borderImage {
            background-color: white;
            width: 150px;
            height: 150px;
            border-radius: 100px;
        }

        .imageData {
            width: 140px;
            height: 140px;
            border-radius: 90px;
            margin-top: 5px;
        }
    </style>
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

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0">Detail Berita & Event</h1> -->

                            <h1 class="m-0">
                                <button class="btn" onclick="location.href=`<?= base_url() ?>/Data-Customer`" title="Kembali"><i class="fa fa-angle-left fa-2x"></i></button>
                                Detail Customer
                            </h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Home</a></li>
                                <li class="breadcrumb-item active">Data Customer</li>
                                <li class="breadcrumb-item active">Detail Customer</li>
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

                            <div class="coverImage">
                                <center>
                                    <!-- <img src="<?= base_url() ?>/Image/Icon/UploadProfile.svg" width="300" id="NoneImage" alt=""> -->
                                    <div class="borderImage">
                                        <img id="imgCust" src="https://firebasestorage.googleapis.com/v0/b/traveland-429a6.appspot.com/o/images-customer%2Fno-image.png?alt=media&token=87603e1a-2c32-488c-81a6-ad35ce8619a4" width="150" class="imageData" alt="">
                                    </div>
                                    <h5 id="namaCust" class="mt-1 font-weight-bold">Nama Pengguna</h5>
                                </center>
                            </div>

                            <!-- image
                            <div class="coverBerita">
                                <img src="<?= base_url() ?>/Image/Icon/UploadProfile.svg" width="300" id="NoneImage" alt="">
                            </div> -->
                            <!-- /image -->
                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-person text-primary"></i> Data Personal
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">

                                    <div class="form-group">
                                        <p style="color: gray;">Email</p>
                                        <p class="font-weight-bold" id="emailCUst" style="margin-top: -15px;">None</p>
                                    </div>
                                    <div class="form-group">
                                        <p style="color: gray;">Jenis Kelamin</p>
                                        <p class="font-weight-bold" id="genderCust" style="margin-top: -15px;">None</p>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="form-group">
                                        <p style="color: gray;">No Telp</p>
                                        <p class="font-weight-bold" id="nomorCust" style="margin-top: -15px;">None</p>

                                    </div>

                                    <div class="form-group">
                                        <p style="color: gray;">Tanggal Lahir</p>
                                        <p class="font-weight-bold" id="tglCust" style="margin-top: -15px;">None</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p style="color: gray;">Alamat</p>
                                <p class="font-weight-bold" id="alamatCust" style="margin-top: -15px;">None</p>
                            </div>
                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-postcard text-orange"></i> Data Lainnya
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">

                                    <div class="form-group">
                                        <p style="color: gray;">Tanggal Buat</p>
                                        <p class="font-weight-bold" id="created" style="margin-top: -15px;">None</p>
                                    </div>


                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="form-group">
                                        <p style="color: gray;">Tanggal Pembaruan</p>
                                        <p class="font-weight-bold" id="modified" style="margin-top: -15px;">None</p>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
            </section>

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
        console.log(<?= $DataID ?>)
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
        var parseJsonAdmin = {};
        const ValueItem = ref(db, 'Master-Data-Customer/<?= $DataID ?>');
        onValue(ValueItem, (kontenn) => {
            let PostD = {
                Nama: kontenn.val().NamaCustomer,
                Gender: kontenn.val().Gender,
                Telefon: kontenn.val().TelefonCustomer,
                Status: kontenn.val().StatusCustomer,
                Email: kontenn.val().EmailCustomer,
                Alamat: kontenn.val().AlamatCustomer,
                tanggalLahir: kontenn.val().TanggalLahirCustomer,
                TanggalBuat: kontenn.val().TanggalBuat,
                TanggalUpdate: kontenn.val().TanggalUpdate,
                fotoCustomer: kontenn.val().fotoCustomer
            };
            parseJsonAdmin = (PostD)
            if (Boolean(parseJsonAdmin) == false) {
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
                if (kontenn.val().fotoCustomer == "") {

                } else {
                    document.getElementById('imgCust').src = kontenn.val().fotoCustomer
                }

                if (kontenn.val().Gender == 1) {
                    document.getElementById('genderCust').innerHTML = "Laki-Laki"
                } else {
                    document.getElementById('genderCust').innerHTML = "Perempuan"

                }

                const options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };

                document.getElementById('namaCust').innerHTML = kontenn.val().NamaCustomer
                document.getElementById('emailCUst').innerHTML = kontenn.val().EmailCustomer
                document.getElementById('nomorCust').innerHTML = kontenn.val().TelefonCustomer
                document.getElementById('tglCust').innerHTML = new Date(kontenn.val().TanggalLahirCustomer).toLocaleDateString("id-ID", options)
                document.getElementById('alamatCust').innerHTML = kontenn.val().AlamatCustomer
                document.getElementById('modified').innerHTML = kontenn.val().TanggalUpdate
                document.getElementById('created').innerHTML = kontenn.val().TanggalBuat
            }



        })
    </script>
</body>

</html>