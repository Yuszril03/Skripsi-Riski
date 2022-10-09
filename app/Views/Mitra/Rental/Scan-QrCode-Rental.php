<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Edit Profile Mitra Wisata</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        #map {

            position: relative;
            top: 0;
            bottom: 0;
            height: 300px;
            width: auto;
        }

        canvas {
            height: 300px;
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

        .file-upload {
            height: max-content;
            border: 2px dotted gray;
            border-radius: 15px;
            margin-bottom: 10px;

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

        @media only screen and (min-device-width: 1024px) {
            .blockData {
                background-color: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 545px;
                border-radius: 15px;
                margin-top: -545px;
                position: relative;
            }


            .blockImage {
                width: 250px;
                position: absolute;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .blockText {
                font-weight: bold;
                color: white;
                position: absolute;
                top: 65%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .sizeEMpty {
                width: 250px;
            }
        }

        @media only screen and (max-width: 360px),
        (min-device-width: 360px) and (max-device-width: 1024px) {
            .blockData {
                background-color: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 1070px;
                border-radius: 15px;
                margin-top: -1085px;
                position: relative;
            }

            .blockImage {
                width: 250px;
                position: absolute;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .blockText {
                width: 100%;
                font-weight: bold;
                color: white;
                position: absolute;
                top: 55%;
                left: 55%;
                transform: translate(-50%, -50%);
            }

            .sizeEMpty {
                width: 200px;
            }
        }

        /* #reader div img {
            display: none;

        } */
        #reader {
            border-radius: 10px;
        }

        #reader__camera_permission_button {
            content: "Reference ";
            box-shadow: none;
            background-color: #007bff;
            color: #fff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            border-radius: 10px;

        }

        #reader__dashboard_section_csr span {
            margin: 10px;
        }

        #reader__dashboard_section_csr span button {
            box-shadow: none;
            background-color: #dc3545;
            color: #fff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            border-radius: 10px;
        }
    </style>

    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js" charset="utf-8"></script>

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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Scan Qr Code Hotel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Scan Qr Code Hotel</li>
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

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div style="width: 300px;" id="reader"></div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="input-group mb-3">
                                        <input id="pencarianData" type="text" class="form-control" placeholder="Masukan kode pemesanan Hotel" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button id="jadiCari" class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                                            <button id="batalCari" class="btn btn-danger" type="button"><i class="bi bi-x-circle"></i></button>
                                        </div>
                                    </div>

                                    <div id="dataEmpty">
                                        <center>
                                            <img class="sizeEMpty" src="<?= base_url() ?>/Image/Icon/nulldatatransaksi.svg" alt="">
                                            <p id="textEMpty" style="font-size: 18px;">Data tidak .</p>
                                        </center>
                                    </div>

                                    <div id="DataTransaksi">
                                        <p class="font-weight-bold">Data Pemesan</p>
                                        <HR style="margin-top: -10px;">
                                        </HR>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img id="profil" class="rounded" width="200" src="" alt="">
                                            </div>
                                            <div class="col-lg-6">
                                                <p><span class="text-muted" style="font-size: 14px;"> Nama Pemesan</span> <br>
                                                    <span id="nama" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p><span class="text-muted" style="font-size: 14px;"> Email</span> <br>
                                                            <span id="Email" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p><span class="text-muted" style="font-size: 14px;"> Nomor Telefon</span> <br>
                                                            <span id="nomor" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p><span class="text-muted" style="font-size: 14px;"> Alamat</span> <br>
                                                    <span id="Alamat" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>

                                            </div>

                                        </div>
                                        <p class="font-weight-bold" style="margin-top: 20px;">Detail Pemesanan</p>
                                        <HR style="margin-top: -10px;">
                                        </HR>
                                        <p><span class="text-muted" style="font-size: 14px;"> Kode Transaksi</span> <br>
                                            <span id="kodeTransaksi" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                        </p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;"> Tanggal Pemesanan</span> <br>
                                                    <span id="tanggalBuat" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;"> Terakhir Pembaruan Transaksi</span> <br>
                                                    <span id="tanggalUpdate" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;"> Pembayaran Transaksi</span> <br>
                                                    <span id="pembayaran" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Status</span> <br>
                                                    <span id="StatusTransaksi" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Nama Kendaraan</span> <br>
                                                    <span id="namaKendaraan" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>

                                            </div>
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Harga Sewa</span> <br>
                                                    <span id="hargaSewa" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Check In</span> <br>
                                                    <span id="checkIn" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                                <p><span class="text-muted" style="font-size: 14px;">Ukuran Kendaraan</span> <br>
                                                    <span id="ukuranKendaraan" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Check Out</span> <br>
                                                    <span id="checkOut" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                                <p><span class="text-muted" style="font-size: 14px;">Lama Menginap</span> <br>
                                                    <span id="jumlahHari" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="font-weight-bold" style="margin-top: 20px;">Total Pemesanan</p>
                                        <HR style="margin-top: -10px;">
                                        </HR>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Harga Sewa</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p> <span id="total" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Lama Sewa</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p> <span id="lamaMenginap" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <HR>
                                        </HR>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><span class="text-muted" style="font-size: 14px;">Total Keseluruhan</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p> <span id="totalSemua" class="text-black" style="font-size: 16px;">Percoban Pemesanan</span>
                                                </p>

                                            </div>
                                        </div>

                                        <button id="verifikasi" class="btn btn-primary btn-block">Verifikasi Check In</button>
                                        <button id="verifikasiCheckOut" class="btn btn-primary btn-block">Verifikasi Check Out</button>
                                        <p>
                                            <span id="alertCheckIN" class="text-danger" style="font-size: 16px;">Belum Dapat Melakukan Check-in !!!</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= view('Mitra/Template-Mitra/Footer') ?>

        <!-- Control Sidebar -->
        <aside class=" control-sidebar control-sidebar-dark">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/html5-qrcode"></script>
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

        let DataTransaksiWisata = {};

        document.getElementById('textEMpty').innerHTML = "Silakan Lakukan Pencarian Kode Pemesanan"
        $("#dataEmpty").show()
        $("#DataTransaksi").hide()
        var pencarian = false;
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 60,
                qrbox: {
                    width: 150,
                    height: 150
                },
                // rememberLastUsedCamera: true,
                // Only support camera scan type.
                supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA]
            });
        html5QrcodeScanner.render(onScanSuccess);


        function onScanSuccess(decodedText, decodedResult) {
            // Handle on success condition with the decoded text or result.
            if (pencarian == false) {
                pencarian = true
                // console.log(`Scan result: ${decodedText}`, decodedResult);
                let myArray22 = decodedText.split("-");
                console.log(decodedText.search("Hotel"))
                document.getElementById('pencarianData').value = myArray22[0]
                if (decodedText.search("Hotel") >= -1) {
                    document.getElementById('textEMpty').innerHTML = "Kode Pemesanan Sedang Dicari"

                    // Menampung Data Transaksi
                    let ValueItemTransaksi = ref(db, 'Transaction-Rental/' + myArray22[0]);
                    onValue(ValueItemTransaksi, (snapShot) => {
                        // console.log(snapShot.val())
                        DataTransaksiWisata = snapShot.val();
                        if (snapShot.val()) {
                            const options = {
                                weekday: 'long',
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            };
                            $("#dataEmpty").hide()
                            $("#DataTransaksi").show()
                            $("#alertCheckIN").hide()
                            document.getElementById('kodeTransaksi').innerHTML = myArray22[0];
                            document.getElementById('tanggalBuat').innerHTML = snapShot.val().TanggalBuat;
                            document.getElementById('tanggalUpdate').innerHTML = snapShot.val().TanggalUpdate;

                            const tanggalHariIni = new Date().getDate();
                            const tanggalCheckIn = new Date(snapShot.val().CheckIn).getDate();
                            const tanggalCheckOut = new Date(snapShot.val().CheckOut).getDate();

                            if (snapShot.val().StatusTransaksi == "1") {
                                document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-warning">Belum Terbayar</span>`;
                                $('#verifikasi').hide();
                                $('#verifikasiCheckOut').hide();
                            } else if (snapShot.val().StatusTransaksi == "2") {
                                $('#verifikasi').hide();
                                $('#verifikasiCheckOut').hide();
                                document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-danger">Dibatalkan</span>`;
                            } else if (snapShot.val().StatusTransaksi == "3") {
                                // console.log(tanggalHariIni);
                                // console.log(tanggalCheckIn);

                                if (tanggalCheckIn < tanggalHariIni) {
                                    $('#verifikasi').hide();
                                    $('#verifikasiCheckOut').hide();
                                    $("#alertCheckIN").show();
                                } else if (tanggalHariIni != tanggalCheckIn) {
                                    $('#verifikasi').hide();
                                    $('#verifikasiCheckOut').hide();
                                    $("#alertCheckIN").show();
                                } else {
                                    $('#verifikasi').show();
                                    $('#verifikasiCheckOut').hide();
                                    $("#alertCheckIN").hide();
                                }
                                document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-success">Sudah Terbayar</span>`;
                            } else if (snapShot.val().StatusTransaksi == "4") {
                                if (tanggalCheckOut > tanggalHariIni) {
                                    $('#verifikasi').hide();
                                    $('#verifikasiCheckOut').show();
                                } else {
                                    $('#verifikasi').hide();
                                    $('#verifikasiCheckOut').show();
                                }
                                document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-primary">Mulai Sewa</span>`;
                            } else if (snapShot.val().StatusTransaksi == "5") {
                                $('#verifikasi').hide();
                                $('#verifikasiCheckOut').hide();
                                document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-secondary">Sewa Berakhir</span>`;
                            }


                            document.getElementById('ukuranKendaraan').innerHTML = snapShot.val().UkuranMobil;
                            document.getElementById('jumlahHari').innerHTML = snapShot.val().JumlahHari + " Hari";
                            document.getElementById('checkIn').innerHTML = snapShot.val().CheckIn;
                            document.getElementById('checkOut').innerHTML = snapShot.val().CheckOut;
                            document.getElementById('hargaSewa').innerHTML = 'Rp. ' + snapShot.val().HargaMobil;




                            document.getElementById('total').innerHTML = 'Rp. ' + snapShot.val().HargaMobil;

                            document.getElementById('lamaMenginap').innerHTML = snapShot.val().JumlahHari + ' Hari';
                            document.getElementById('totalSemua').innerHTML = "Rp. " + snapShot.val().TotalSemua;

                            let DetailKamar = ref(db, 'Master-Data-Rental-Detail/' + snapShot.val().IdMobil);
                            onValue(DetailKamar, (postDetailKamar) => {
                                document.getElementById('namaKendaraan').innerHTML = postDetailKamar.val().NamaKendaraan;
                            })

                            let ValueBank = ref(db, 'Master-Data-Bank/' + snapShot.val().JenisPembayaran);
                            onValue(ValueBank, (postBank) => {
                                document.getElementById('pembayaran').innerHTML = postBank.val().NamaBank;
                            })


                            let ValueCustomer = ref(db, 'Master-Data-Customer/' + snapShot.val().IdCutomer);
                            onValue(ValueCustomer, (postData) => {
                                document.getElementById('profil').src = postData.val().fotoCustomer;
                                document.getElementById('nama').innerHTML = postData.val().NamaCustomer;
                                document.getElementById('Email').innerHTML = postData.val().EmailCustomer;
                                document.getElementById('nomor').innerHTML = postData.val().TelefonCustomer;
                                document.getElementById('Alamat').innerHTML = postData.val().AlamatCustomer;

                            })
                        } else {
                            document.getElementById('textEMpty').innerHTML = "Kode Pemesanan Tidak Ditemukan"
                        }


                    })

                } else {
                    document.getElementById('textEMpty').innerHTML = "Kode Pemesanan Tidak Valid"
                }

            }

            // ...
            // html5QrcodeScanner.clear();
            // ^ this will stop the scanner (video feed) and clear the scan area.
        }

        document.getElementById('verifikasi').addEventListener('click', function() {

            DataTransaksiWisata.StatusTransaksi = "4"
            DataTransaksiWisata.TanggalUpdate = new Date().toString("ID")
            console.log(DataTransaksiWisata)
            const updateWisata = {};
            updateWisata['/Transaction-Rental/' + document.getElementById('kodeTransaksi').innerHTML] = DataTransaksiWisata;
            update(ref(db), updateWisata);
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "Data berhasil terverifikasi!",
                showConfirmButton: false,
                timer: 1500
            })

            document.getElementById('pencarianData').value = ""
            pencarian = false
            document.getElementById('textEMpty').innerHTML = "Silakan Lakukan Pencarian Kode Pemesanan"
            $("#dataEmpty").show()
            $("#DataTransaksi").hide()

        })

        document.getElementById('verifikasiCheckOut').addEventListener('click', function() {

            DataTransaksiWisata.StatusTransaksi = "5"
            DataTransaksiWisata.TanggalUpdate = new Date().toString("ID")
            console.log(DataTransaksiWisata)
            const updateWisata = {};
            updateWisata['/Transaction-Rental/' + document.getElementById('kodeTransaksi').innerHTML] = DataTransaksiWisata;
            update(ref(db), updateWisata);
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "Data berhasil terverifikasi!",
                showConfirmButton: false,
                timer: 1500
            })

            document.getElementById('pencarianData').value = ""
            pencarian = false
            document.getElementById('textEMpty').innerHTML = "Silakan Lakukan Pencarian Kode Pemesanan"
            $("#dataEmpty").show()
            $("#DataTransaksi").hide()

        })

        document.getElementById('jadiCari').addEventListener('click', function() {
            if (document.getElementById('pencarianData').value == "") {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Kolom kode pemesanan harus terisi!',
                })
                document.getElementById('textEMpty').innerHTML = "Silakan Lakukan Pencarian Kode Pemesanan"
                $("#dataEmpty").show()
                $("#DataTransaksi").hide()

            } else {
                document.getElementById('textEMpty').innerHTML = "Kode Pemesanan Sedang Dicari"

                // Menampung Data Transaksi
                let ValueItemTransaksi = ref(db, 'Transaction-Rental/' + document.getElementById('pencarianData').value);
                onValue(ValueItemTransaksi, (snapShot) => {
                    // console.log(snapShot.val())
                    DataTransaksiWisata = snapShot.val();
                    if (snapShot.val()) {
                        const options = {
                            weekday: 'long',
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        };
                        $("#dataEmpty").hide()
                        $("#DataTransaksi").show()
                        document.getElementById('kodeTransaksi').innerHTML = document.getElementById('pencarianData').value;
                        document.getElementById('tanggalBuat').innerHTML = snapShot.val().TanggalBuat;
                        document.getElementById('tanggalUpdate').innerHTML = snapShot.val().TanggalUpdate;

                        const tanggalHariIni = new Date().getDate();
                        const tanggalCheckIn = new Date(snapShot.val().CheckIn).getDate();
                        const tanggalCheckOut = new Date(snapShot.val().CheckOut).getDate();

                        if (snapShot.val().StatusTransaksi == "1") {
                            document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-warning">Belum Terbayar</span>`;
                            $('#verifikasi').hide();
                            $('#verifikasiCheckOut').hide();
                        } else if (snapShot.val().StatusTransaksi == "2") {
                            $('#verifikasi').hide();
                            $('#verifikasiCheckOut').hide();
                            document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-danger">Dibatalkan</span>`;
                        } else if (snapShot.val().StatusTransaksi == "3") {
                            console.log(tanggalHariIni);
                            console.log(tanggalCheckIn);
                            if (tanggalCheckIn < tanggalHariIni) {
                                $('#verifikasi').hide();
                                $('#verifikasiCheckOut').hide();
                            } else {
                                $('#verifikasi').show();
                                $('#verifikasiCheckOut').hide();
                            }
                            document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-success">Sudah Terbayar</span>`;
                        } else if (snapShot.val().StatusTransaksi == "4") {
                            if (tanggalCheckOut > tanggalHariIni) {
                                $('#verifikasi').hide();
                                $('#verifikasiCheckOut').hide();
                            } else {
                                $('#verifikasi').hide();
                                $('#verifikasiCheckOut').show();
                            }
                            document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-primary">Mulai Sewa</span>`;
                        } else if (snapShot.val().StatusTransaksi == "5") {
                            $('#verifikasi').hide();
                            $('#verifikasiCheckOut').hide();
                            document.getElementById('StatusTransaksi').innerHTML = `<span class="badge badge-secondary">Sewa Berakhir</span>`;
                        }

                        document.getElementById('ukuranKendaraan').innerHTML = snapShot.val().UkuranMobil;
                        document.getElementById('jumlahHari').innerHTML = snapShot.val().JumlahHari + " Hari";
                        document.getElementById('checkIn').innerHTML = snapShot.val().CheckIn;
                        document.getElementById('checkOut').innerHTML = snapShot.val().CheckOut;
                        document.getElementById('hargaSewa').innerHTML = 'Rp. ' + snapShot.val().HargaMobil;

                        document.getElementById('total').innerHTML = 'Rp. ' + snapShot.val().HargaMobil;

                        document.getElementById('lamaMenginap').innerHTML = snapShot.val().JumlahHari + ' Hari';
                        document.getElementById('totalSemua').innerHTML = "Rp. " + snapShot.val().TotalSemua;

                        let DetailKamar = ref(db, 'Master-Data-Rental-Detail/' + snapShot.val().IdMobil);
                        onValue(DetailKamar, (postDetailMobil) => {
                            document.getElementById('namaKendaraan').innerHTML = postDetailMobil.val().NamaKendaraan;
                        })



                        let ValueBank = ref(db, 'Master-Data-Bank/' + snapShot.val().JenisPembayaran);
                        onValue(ValueBank, (postBank) => {
                            document.getElementById('pembayaran').innerHTML = postBank.val().NamaBank;
                        })


                        let ValueCustomer = ref(db, 'Master-Data-Customer/' + snapShot.val().IdCutomer);
                        onValue(ValueCustomer, (postData) => {
                            document.getElementById('profil').src = postData.val().fotoCustomer;
                            document.getElementById('nama').innerHTML = postData.val().NamaCustomer;
                            document.getElementById('Email').innerHTML = postData.val().EmailCustomer;
                            document.getElementById('nomor').innerHTML = postData.val().TelefonCustomer;
                            document.getElementById('Alamat').innerHTML = postData.val().AlamatCustomer;

                        })
                    } else {
                        $("#dataEmpty").show()
                        $("#DataTransaksi").hide()
                        document.getElementById('textEMpty').innerHTML = "Kode Pemesanan Tidak Ditemukan"
                    }


                })
            }
        })

        document.getElementById('batalCari').addEventListener('click', function() {
            document.getElementById('pencarianData').value = ""
            pencarian = false
            document.getElementById('textEMpty').innerHTML = "Silakan Lakukan Pencarian Kode Pemesanan"
            $("#dataEmpty").show()
            $("#DataTransaksi").hide()
        })
    </script>

</body>

</html>