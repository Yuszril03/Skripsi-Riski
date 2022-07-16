<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TraveLand - Kata Sandi</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/Image/Icon/LogoAJA.png" />

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
        @media only screen and (max-width: 360px),
        (min-device-width: 360px) and (max-device-width: 1024px) {
            .hidetosmall {
                display: none;
            }

        }

        @media only screen and (min-device-width: 1024px) {

            .hidetosmall {
                display: block;
            }
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kata Sandi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Kata Sandi</li>
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
                        <div class="card-header">
                            <h4 class="card-title"><i class="bi bi-input-cursor-text"></i> Form Kata Sandi</h4>
                        </div>
                        <div class="card-body">
                            Pada form ini anda dapat mengubah kata sandi sesuai dengan yang ada inginkan. Namun jika anda lupa dengan kata sandi lama bisa klik <a id="defaultKataSAndi" href="javascript:setDefault();">default kata sandi</a> ini.
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kata Sandi Lama</label>
                                        <input type="password" class="form-control" id="oldPas" placeholder="Ketik di sini...">
                                        <div class="invalid-feedback" id="invalidOldPs">
                                            Harap isi nama profil dahulu
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kata Sandi Baru</label>
                                        <input type="password" class="form-control" id="newPas" placeholder="Ketik di sini...">
                                        <div class="invalid-feedback" id="invalidNewPs">
                                            Harap isi nama profil dahulu
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Konfirmasi Kata Sandi Baru</label>
                                        <input type="password" class="form-control" id="newPas2" placeholder="Ketik di sini...">
                                        <div class="invalid-feedback" id="invalidNewPs2">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="Colsimpan" class="col"><button id="btnSimpan" class="btn btn-primary btn-block ">Simpan</button></div>
                                        <!-- <div id="ColBatal" class="col"><button id="btnBatal" class="btn btn-danger btn-block ">Batal</button></div> -->
                                    </div>
                                </div>
                                <div class="col hidetosmall">
                                    <center>
                                        <img src="<?= base_url() ?>/Image/Icon/6374585.jpg" width="300" alt="">
                                    </center>
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
    <script src="<?= base_url() ?>/MD5/md5.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

        document.getElementById('defaultKataSAndi').addEventListener('click', function() {
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {

                    //Update Master Account Wisata
                    let DataAccount = {
                        IDKelolaMitra: `<?= session()->get('IDKelola') ?>`,
                        KataSandiMitra: md5('12345678'),
                        JenisMitra: `<?= session()->get('Jenis') ?>`
                    }
                    const updateAccount = {};
                    updateAccount['/Master-Data-Account-Mitra/<?= session()->get('Id') ?>'] = DataAccount;
                    update(ref(db), updateAccount);

                    $.ajax({
                        url: "<?= base_url() ?>/Default-Kata-Sandi-Mitra/" + md5('12345678'),
                        dataType: "JSON",
                        type: "GET"
                    }).done((result) => {
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Kata sandi berhasil di perbarui.',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Okey'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })
                    })

                }
            })
        })

        document.getElementById('btnSimpan').addEventListener('click', function() {
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {

                    let dataID = ['oldPas', 'newPas', 'newPas2']
                    let invalidID = ['invalidOldPs', 'invalidNewPs', 'invalidNewPs2']
                    let jumlah = 0;
                    for (let i = 0; i < dataID.length; i++) {
                        var temp = document.getElementById(dataID[i]).value;
                        if (i == 0) {
                            var oldd = `<?= session()->get('KataSandi') ?>`;
                            if (temp == "") {
                                $("#" + dataID[i]).addClass('is-invalid');
                                document.getElementById(invalidID[i]).innerHTML = "Harap isi kata sandi lama dahulu";
                                jumlah++;
                            } else if (md5(temp) != oldd) {
                                $("#" + dataID[i]).addClass('is-invalid');
                                document.getElementById(invalidID[i]).innerHTML = "Kata sandi lama tidak sesuai";
                                jumlah++;
                            } else {
                                $("#" + dataID[i]).removeClass('is-invalid');
                            }
                        } else if (i == 1) {
                            if (temp == "") {
                                $("#" + dataID[i]).addClass('is-invalid');
                                document.getElementById(invalidID[i]).innerHTML = "Harap isi kata sandi baru dahulu";
                                jumlah++;
                            } else {
                                $("#" + dataID[i]).removeClass('is-invalid');
                            }
                        } else if (i == 2) {
                            if (temp == "") {
                                $("#" + dataID[i]).addClass('is-invalid');
                                document.getElementById(invalidID[i]).innerHTML = "Harap isi konfirmasi kata sandi baru dahulu";
                                jumlah++;
                            } else if (document.getElementById(dataID[i - 1]).value != document.getElementById(dataID[i]).value) {
                                $("#" + dataID[i]).addClass('is-invalid');
                                document.getElementById(invalidID[i]).innerHTML = "Konfirmasi kata sandi tidak sesuai";
                                jumlah++;
                            } else {
                                $("#" + dataID[i]).removeClass('is-invalid');
                            }
                        }
                    }
                    if (jumlah == 0) {
                        //Update Master Account Wisata
                        let DataAccount = {
                            IDKelolaMitra: `<?= session()->get('IDKelola') ?>`,
                            KataSandiMitra: md5(document.getElementById('newPas').value),
                            JenisMitra: `<?= session()->get('Jenis') ?>`
                        }
                        const updateAccount = {};
                        updateAccount['/Master-Data-Account-Mitra/<?= session()->get('Id') ?>'] = DataAccount;
                        update(ref(db), updateAccount);

                        $.ajax({
                            url: "<?= base_url() ?>/Ubah-Kata-Sandi-Mitra/" + md5(document.getElementById('newPas').value),
                            dataType: "JSON",
                            type: "GET"
                        }).done((result) => {
                            Swal.fire({
                                title: 'Berhasil',
                                text: 'Kata sandi berhasil di perbarui.',
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Okey'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            })
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Kolom pengisian Tidak Valid!'
                        })
                    }

                }
            })



        })
    </script>

    <script>
        function setDefault() {

        }
    </script>

</body>

</html>