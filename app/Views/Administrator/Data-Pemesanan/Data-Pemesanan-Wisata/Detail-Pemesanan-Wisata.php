<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator - Home</title>

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

    <style>
        .lineCenter {
            height: 200px;
            width: 2px;
            background-color: gray;
        }

        .chacked {
            color: #ffc107;
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <button class="btn" onclick="location.href=`<?= base_url() ?>/Pemesanan-Wisata`" title="Kembali"><i class="fa fa-angle-left fa-2x"></i></button>
                                Detail Pemesanan Wisata
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pemesanan Wisata</li>
                                <li class="breadcrumb-item active">Detail Pemesanan Wisata</li>
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
                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-card-text text-primary"></i> Data Wisata
                            </div>
                            <img id="fotoWisata" src="https://firebasestorage.googleapis.com/v0/b/traveland-429a6.appspot.com/o/images-customer%2Fno-image.png?alt=media&token=87603e1a-2c32-488c-81a6-ad35ce8619a4" width="300" alt="">
                            <h4 class="mt-2 font-weight-bold" id="namaWisataa">Nama Wisata</h4>


                            <p>
                                <i class="fa fa-map-pin"></i>
                                <span id="alamatWisata">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock

                                </span>
                            </p>

                            <p> <b>Harga Tiket</b></p>
                            <ul>
                                <li>Tiket Anak-Anak : Rp. <span id="hargaAnak"></span></li>
                                <li>Tiket Dewasa : Rp. <span id="hargaDewasa"></span></li>
                            </ul>

                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-card-text text-primary"></i> Detail Pemesanan
                            </div>
                            <div class="row">
                                <div class="col-lg col-4">
                                    <p>
                                        <b>Nama Pemesan</b><br>
                                        <span id="namaPemesan">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Status</b><br>
                                        <span id="statusPembayaran">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Bukti Transaksi</b><br>
                                        <img id="fotoBuktiTransaksi" src="https://firebasestorage.googleapis.com/v0/b/traveland-429a6.appspot.com/o/images-customer%2Fno-image.png?alt=media&token=87603e1a-2c32-488c-81a6-ad35ce8619a4" width="300" alt="">
                                    </p>

                                </div>
                                <div class="col-lg col-4">

                                    <p>
                                        <b>Pengunjung Dewasa</b><br>
                                        <span id="pengunjungDewasa">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Pengunjung Anak - Anak</b><br>
                                        <span id="pengunjungAnak">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Total Pembayaran</b><br>
                                        <span id="TotalHarga">Tidak ada</span>
                                    </p>
                                </div>
                                <div class="col-lg col-4">
                                    <p>
                                        <b>Tanggal Pemesanan</b><br>
                                        <span id="tanggalPemesanan">Tidak ada</span>
                                    </p>
                                    <p>
                                        <b>Jenis Pembayaran</b><br>
                                        <span id="jenisPembayaran">Tidak ada</span>
                                    </p>
                                </div>
                            </div>


                            <div id="rate">
                                <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                    <i class="bi bi-card-text text-primary"></i> Rating & Ulasan
                                </div>
                                <div id="noneUlasan">
                                    <br>
                                    <span>
                                        Tidak Ada Ulasan..
                                    </span>
                                </div>
                                <div id="ulasan">
                                    <div>
                                        <b>Komentar Customer</b>
                                        <div style="border: 1.5px solid #7FFF00; border-radius: 10px; max-width: 450px;">
                                            <div class="row" style="margin-top: 10px;  margin-left: 5px; margin-right: 5px;">
                                                <div class="col-1">
                                                    <p>
                                                        <img id="fotoUser" src="https://firebasestorage.googleapis.com/v0/b/traveland-429a6.appspot.com/o/images-customer%2Fno-image.png?alt=media&token=87603e1a-2c32-488c-81a6-ad35ce8619a4" width="30" height="30" style="border-radius: 360px;" alt="">
                                                    </p>
                                                </div>
                                                <div class="col-8">
                                                    <p style="margin-top: 1px;">
                                                        <span id="namaCustomer"></span>
                                                    </p>
                                                </div>
                                                <div class="col-3">
                                                    <p style="margin-top: 1px;">
                                                        <span id="rating"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div style="margin-left: 12px; margin-right: 15px;">
                                                <p>
                                                    <span id="komentar">none</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- <div>
                                <p>
                                    <b>Tanggapan Mitra</b><br>
                                    <span id="tanggapan">none</span>
                                </p>
                            </div> -->
                                    <div id="tanggapanmitra" class="row">
                                        <div class=" col-1 "></div>

                                        <div class=" col-11">
                                            <b>Tanggapan Mitra</b>
                                            <div style="border: 1.5px solid #7FFFD4; border-radius: 10px; max-width: 450px;">
                                                <div style="margin-left: 12px; margin-right: 12px; margin-top: 10px;">
                                                    <p>
                                                        <span id="tanggapan">none</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
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

        $('#rate').hide()
        $('#tanggapanmitra').hide()
        $('#noneUlasan').hide()
        $('#ulasan').hide()

        const ValueItem = ref(db, 'Master-Data-Wisata/<?= $DataIDMitra ?>');
        onValue(ValueItem, (kontenn) => {
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('namaWisataa').innerHTML = kontenn.val().NamaWisata
            document.getElementById('alamatWisata').innerHTML = kontenn.val().AlamatWisata
            document.getElementById('hargaDewasa').innerHTML = kontenn.val().HargaDewasa
            document.getElementById('hargaAnak').innerHTML = kontenn.val().HargaAnak

            if (kontenn.val().fotoWisata != "") {
                document.getElementById('fotoWisata').src = kontenn.val().fotoWisata
            }
        })

        const ValueItem1 = ref(db, 'Transaction-Wisata/<?= $DataID ?>');
        onValue(ValueItem1, (kontens) => {
            let jumlah = 5;
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('pengunjungDewasa').innerHTML = kontens.val().JumlahDewasa + ' Orang = Rp. ' + kontens.val().TotalDewasa
            document.getElementById('pengunjungAnak').innerHTML = kontens.val().JumlahAnak + ' Orang = Rp. ' + kontens.val().TotalAnak
            document.getElementById('tanggalPemesanan').innerHTML = kontens.val().TanggalBuat
            document.getElementById('TotalHarga').innerHTML = 'Rp. ' + kontens.val().TotalSemua

            let tempoo = ``
            for (let i = 1; i <= jumlah; i++) {
                if (Number(kontens.val().Rating) >= i) {
                    tempoo += `<i class="bi bi-star-fill chacked"></i>`
                } else {
                    tempoo += `<i class="bi bi-star"></i>`
                }
            }
            document.getElementById('rating').innerHTML = tempoo;

            if (kontens.val().Rating == "") {
                $('#noneUlasan').show()
                $('#ulasan').hide()
            } else {
                $('#noneUlasan').hide()
                $('#ulasan').show()

            }

            if (kontens.val().UlasanCustomer == "") {
                document.getElementById('komentar').innerHTML = `<span>Tidak Ada Komentar</span>`
                $('#tanggapanmitra').hide()
            } else {
                document.getElementById('komentar').innerHTML = kontens.val().UlasanCustomer
                $('#tanggapanmitra').show()
            }

            if (kontens.val().UlasanMitra == "" && kontens.val().UlasanCustomer == "") {
                document.getElementById('tanggapan').innerHTML = `<span>Tidak Ada Tanggapan</span>`
            } else if (kontens.val().UlasanMitra == "") {
                document.getElementById('tanggapan').innerHTML = `<span>Belum Ada Tanggapan</span>`
            } else {
                document.getElementById('tanggapan').innerHTML = kontens.val().UlasanMitra
            }

            if (kontens.val().StatusTransaksi == 1) {
                document.getElementById('statusPembayaran').innerHTML = `<span class="badge badge-warning">Belum Terbayar</span>`
            } else if (kontens.val().StatusTransaksi == 2) {
                document.getElementById('statusPembayaran').innerHTML = `<span class="badge badge-danger">Pembayaran Dibatalkan</span>`
            } else if (kontens.val().StatusTransaksi == 3) {
                document.getElementById('statusPembayaran').innerHTML = `<span class="badge badge-success">Sudah Terbayar</span>`
            } else {
                document.getElementById('statusPembayaran').innerHTML = `<span class="badge badge-secondary">Tiket Sudah Digunakan</span>`
                $('#rate').show()
            }

            if (kontens.val().BuktiTransaksi != "") {
                document.getElementById('fotoBuktiTransaksi').src = kontens.val().BuktiTraksaksi
            }
        })

        const ValueItem2 = ref(db, 'Master-Data-Customer/<?= $DataIDCustomer ?>');
        onValue(ValueItem2, (kontein) => {
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('namaPemesan').innerHTML = kontein.val().NamaCustomer
            document.getElementById('namaCustomer').innerHTML = kontein.val().NamaCustomer

            if (kontein.val().fotoCustomer != "") {
                document.getElementById('fotoUser').src = kontein.val().fotoCustomer
            }
        })

        const ValueItem3 = ref(db, 'Master-Data-Bank/<?= $DataIDBank ?>');
        onValue(ValueItem3, (konteins) => {
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('jenisPembayaran').innerHTML = 'Transfer ' + konteins.val().NamaBank

        })
    </script>
</body>

</html>