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
                            <h1 class="m-0">Profile</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Beranda-Admin">Beranda</a></li>
                                <li class="breadcrumb-item active">Profile</li>
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
                                <i class="bi bi-person text-primary"></i> Data Personal
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Nama Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="NamaMitra" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Emai Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input readonly type="text" id="EmailWisata" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Telefon Mitra<sup><span class="text-danger">*</span></sup></label>
                                        <input type="text" id="telefonMitra" onkeypress="return hanyaAngka(this)" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                            </div>

                            <div style="background-color: #f7f7f7;" class="p-1 mb-2 rounded">
                                <i class="bi bi-postcard text-primary"></i> Data Personal Mitra
                            </div>
                            <?php if (session()->get('Jenis') == "Mitra-Wisata") { ?>
                                <div class="row">
                                    <div class="col-lg-6 col-12">

                                        <div class="form-group">
                                            <label for="">Foto Profil Wisata</label>
                                        </div>
                                        <div class="file-upload">
                                            <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                            <div class="Imagees">
                                                <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImage" alt="">
                                                <img src="" id="AddImage" alt="">
                                                <img src="" id="BlockImage" width="250" alt="">
                                            </div>
                                            <center>
                                                <div class="image-upload-wrap" style="margin-top: -110px ;">
                                                    <input id="uploadFilee" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                    <div class="drag-text mt-4">
                                                        <h6 id="textDrop" style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                    </div>
                                                </div>
                                                <p class="image-title">Uploaded Image</p>
                                            </center>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama Wisata<sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" id="namaWisata" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Tiket Dewasa<sup><span class="text-danger">*</span></sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                                </div>
                                                <input id="tiketDewasa" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Tiket Anak-Anak<sup><span class="text-danger">*</span></sup></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="basic-addon1">Rp</span>
                                                </div>
                                                <input id="tiketAnak" onkeypress="return hanyaAngka(this)" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;" type="text" class="form-control" placeholder="Ketik di sini..." aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div id="map"></div>
                                        <pre style="opacity: 0;" id="coordinates" class="coordinates"></pre>
                                        <div class="overlay">
                                            <!-- <button id="replay">Replay</button> -->
                                            <p id="ok"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat Wisata<sup><span class="text-danger">*</span></sup></label>
                                            <input type="hidden" id="longlitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                            <input type="hidden" id="latitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                            <textarea readonly class="form-control" style="border-radius: 15px;" name="alamat" id="alamat" cols="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Wisata<sup><span class="text-danger">*</span></sup></label>
                                            <textarea class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini..." name="deskripsi" id="deskripsi" cols="10"></textarea>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" id="submitData" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                            <button type="button" onclick="KeluarForm()" class="btn btn-secondary m-1" style="border-radius: 15px;">Close</button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if (session()->get('Jenis') == "Mitra-Hotel") { ?>
                                <div class="row">
                                    <div class="col-lg-6 col-12">

                                        <div class="form-group">
                                            <label for="">Foto Profil Hotel</label>
                                        </div>
                                        <div class="file-upload">
                                            <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                            <div class="Imagees">
                                                <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImage" alt="">
                                                <img src="" id="AddImage" alt="">
                                                <img src="" id="BlockImagess" width="250" alt="">
                                            </div>
                                            <center>
                                                <div class="image-upload-wrap" style="margin-top: -110px ;">
                                                    <input id="uploadFilee" accept="image/*" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                    <div class="drag-text mt-4">
                                                        <h6 style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                    </div>
                                                </div>
                                                <p class="image-title">Uploaded Image</p>
                                            </center>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama Hotel<sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" id="namaHotel" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div id="map"></div>
                                        <pre style="opacity: 0;" id="coordinates" class="coordinates"></pre>
                                        <div class="overlay">
                                            <!-- <button id="replay">Replay</button> -->
                                            <p id="ok"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat Hotel<sup><span class="text-danger">*</span></sup></label>
                                            <textarea readonly class="form-control" style="border-radius: 15px;  height: 41px;" name="alamat" id="alamat" cols="5"></textarea>
                                        </div>
                                        <input type="hidden" id="longlitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                        <input type="hidden" id="latitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Hotel<sup><span class="text-danger">*</span></sup></label>
                                    <textarea class="form-control" style="border-radius: 15px; " placeholder="Ketik di sini..." name="deskripsi" id="deskripsi" cols="5"></textarea>
                                </div>
                                <div class="float-right">
                                    <button type="button" id="submitData" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                    <button type="button" onclick="KeluarForm()" class="btn btn-secondary m-1" style="border-radius: 15px;">Close</button>
                                </div>
                            <?php } ?>

                            <?php if (session()->get('Jenis') == "Mitra-Rental") { ?>
                                <div class="row">
                                    <div class="col-lg-6 col-12">

                                        <div class="form-group">
                                            <label for="">Foto Profil Rental</label>
                                        </div>
                                        <div class="file-upload">
                                            <button type="button" id="btnCancelImage" onclick="removeUpload()" title="Hapus Foto" class="btn float-right"> <i class="fas fa-times-circle text-danger"></i> </button>
                                            <div class="Imagees">
                                                <img src="<?= base_url() ?>/Image/Icon/uploadData.svg" id="NoneImage" alt="">
                                                <img src="" id="AddImage" alt="">
                                                <img src="" id="BlockImagess" width="250" alt="">
                                            </div>
                                            <center>
                                                <div class="image-upload-wrap" style="margin-top: -110px ;">
                                                    <input id="uploadFilee" accept="image/*" class="file-upload-input" type='file' onchange="readURL(this);" />

                                                    <div class="drag-text mt-4">
                                                        <h6 style="margin-top:-20px;">Drag and drop files or select add Image</h6>
                                                    </div>
                                                </div>
                                                <p class="image-title">Uploaded Image</p>
                                            </center>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama Rental<sup><span class="text-danger">*</span></sup></label>
                                            <input type="text" id="namaRental" class="form-control" style="border-radius: 15px;" placeholder="Masukan Nama Rental">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div id="map"></div>
                                        <pre style="opacity: 0;" id="coordinates" class="coordinates"></pre>
                                        <div class="overlay">
                                            <!-- <button id="replay">Replay</button> -->
                                            <p id="ok"></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat Rental<sup><span class="text-danger">*</span></sup></label>
                                            <textarea readonly class="form-control" style="border-radius: 15px;  height: 41px;" name="alamat" id="alamat" cols="5"></textarea>
                                        </div>
                                        <input type="hidden" id="longlitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                        <input type="hidden" id="latitude" class="form-control" style="border-radius: 15px;" placeholder="Ketik di sini...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Rental<sup><span class="text-danger">*</span></sup></label>
                                    <textarea class="form-control" style="border-radius: 15px; " name="" id="deskripsi" cols="5"></textarea>
                                </div>
                                <div class="float-right mt-2">
                                    <button type="button" id="submitDataa" class="btn btn-primary m-1" style="border-radius: 15px;">Submit</button>
                                    <button type="button" onclick="KeluarForm()" class="btn btn-secondary m-1" style="border-radius: 15px;">Close</button>
                                </div>
                            <?php } ?>
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

        <?php if (session()->get('Jenis') == "Mitra-Wisata") { ?>
            var parseJsonAdmin = [];
            var parseJsonPartner = [];
            var parseJsonEmailPartner = [];

            var DataTempMitra = {};
            var DataTempWisata = {};


            const starCountRef2 = ref(db, 'Master-Data-Mitra/');
            onValue(starCountRef2, (snapshot) => {
                const data = snapshot.val();
                const keys = Object.keys(data);
                for (const isi in keys) {
                    const ValueItem = ref(db, 'Master-Data-Mitra/' + keys[isi]);
                    onValue(ValueItem, (kontenn) => {


                    })
                }
            });


            const ValueItem = ref(db, 'Master-Data-Wisata/<?= session()->get('IDKelola') ?>');
            onValue(ValueItem, (kontenn) => {

                if (kontenn.val().StatusWisata == 1) {
                    $('#blockData').hide()
                    $('#AddImage').show()
                    $('#BlockImage').hide()
                    document.getElementById('AddImage').src = kontenn.val().fotoWisata
                } else {
                    $('#blockData').show()
                    $('#AddImage').hide()
                    document.getElementById('BlockImage').src = kontenn.val().fotoWisata
                }
                document.getElementById('namaWisata').value = kontenn.val().NamaWisata
                document.getElementById('tiketDewasa').value = kontenn.val().HargaDewasa
                document.getElementById('tiketAnak').value = kontenn.val().HargaAnak
                document.getElementById('alamat').value = kontenn.val().AlamatWisata
                document.getElementById('deskripsi').value = kontenn.val().DeskripsiWisata
                document.getElementById('longlitude').value = kontenn.val().Longlitude
                document.getElementById('latitude').value = kontenn.val().Latitude

                if (Boolean(kontenn.val().fotoWisata) == true) {

                    $('#btnCancelImage').show()

                    $('.image-title').hide()
                    $('#NoneImage').hide()
                    $('.image-upload-wrap').hide();
                } else {
                    $('#btnCancelImage').hide()

                    $('.image-title').hide()
                    $('#NoneImage').show()
                    $('.image-upload-wrap').show();
                }
                DataTempWisata = kontenn.val()

                mapboxgl.accessToken = 'pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw';
                const coordinates = document.getElementById('coordinates');
                const map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)],
                    zoom: 10
                });

                const marker = new mapboxgl.Marker({
                        draggable: true
                    })
                    .setLngLat([Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)])
                    .addTo(map);

                function onDragEnd() {
                    const lngLat = marker.getLngLat();
                    coordinates.style.display = 'block';
                    coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
                    document.getElementById('latitude').value = lngLat.lat
                    document.getElementById('longlitude').value = lngLat.lng

                    $.ajax({
                        url: `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?worldview=cn&access_token=pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw`,
                        dataType: "JSON"
                    }).done(result => {
                        $("#alamat").val(result.features[0].place_name)
                    })

                }

                marker.on('dragend', onDragEnd);

                // console.log(DataTempWisata)
                // parseJsonAdmin.push((keys[isi]))
            })

            const ValueItemMitra = ref(db, 'Master-Data-Mitra/<?= session()->get('Id') ?>');
            onValue(ValueItemMitra, (kontenn) => {
                document.getElementById('NamaMitra').value = kontenn.val().NamaMitra
                document.getElementById('EmailWisata').value = kontenn.val().EmailMitra
                document.getElementById('telefonMitra').value = kontenn.val().TelefonMitra
                DataTempMitra = kontenn.val();
                // console.log(DataTempMitra)
            })

            document.getElementById('submitData').addEventListener('click', function() {

                // console.log(DataTempMitra.StatusMitra)

                Swal.fire({
                    title: 'Apa anda yakin?',
                    text: "Menyimpan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {


                        let idData = ['NamaMitra', 'EmailWisata', 'telefonMitra', 'namaWisata', 'tiketDewasa', 'tiketAnak', 'alamat', 'deskripsi'];
                        let jumlah = 0;
                        const fileupload = $('#uploadFilee').prop('files')[0];

                        for (let i = 0; i < idData.length; i++) {
                            if (document.getElementById(idData[i]).value == "") {
                                $('#' + idData[i]).addClass('is-invalid')
                                jumlah++;
                            } else {
                                $('#' + idData[i]).removeClass('is-invalid')
                            }
                        }
                        if (jumlah == 0) {

                            var CodeIDWisata = "<?= session()->get('IDKelola') ?>";
                            var CodeIDMitra = "<?= session()->get('Id') ?>";


                            if (Boolean(fileupload) == false) {

                                //Update Wisata
                                let DataWIsata = {
                                    NamaWisata: document.getElementById('namaWisata').value,
                                    HargaDewasa: document.getElementById('tiketDewasa').value,
                                    StatusWisata: DataTempWisata.StatusWisata,
                                    HargaAnak: document.getElementById('tiketAnak').value,
                                    AlamatWisata: document.getElementById('alamat').value,
                                    TanggalBuat: DataTempWisata.TanggalBuat,
                                    TanggalUpdate: new Date().toString("ID"),
                                    fotoWisata: DataTempWisata.fotoWisata,
                                    DeskripsiWisata: document.getElementById('deskripsi').value,
                                    Longlitude: document.getElementById('longlitude').value,
                                    Latitude: document.getElementById('latitude').value
                                }
                                if (DataTempWisata.StatusWisata == 1) {
                                    const updateWisata = {};
                                    updateWisata['/Master-Data-Wisata/' + CodeIDWisata] = DataWIsata;
                                    update(ref(db), updateWisata);
                                }


                                //Update Mitra
                                let DataMitraa = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value,
                                    StatusMitra: DataTempMitra.StatusMitra,
                                    TelefonMitra: document.getElementById('telefonMitra').value + "",
                                    TanggalBuat: DataTempMitra.TanggalBuat,
                                    TanggalUpdate: new Date().toString("ID")
                                }
                                const updateMitra = {};
                                updateMitra['/Master-Data-Mitra/' + CodeIDMitra] = DataMitraa;
                                update(ref(db), updateMitra);

                                let dataSessionWisata = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value
                                };
                                $.ajax({
                                    url: '<?= base_url() ?>/Mitra/UpNameProfileWisata',
                                    type: "POST",
                                    data: dataSessionWisata,
                                    dataType: "JSON"
                                }).done((result) => {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href = "<?= base_url() ?>/Edit-profile"
                                        }
                                    })
                                })
                            } else {
                                const storageRef = refImage(storage, 'images-wisata/' + new Date().getTime() + '-' + fileupload.name);

                                // Upload the file and metadata
                                const uploadTask = uploadBytesResumable(storageRef, fileupload);

                                // Register three observers:
                                // 1. 'state_changed' observer, called any time the state changes
                                // 2. Error observer, called on failure
                                // 3. Completion observer, called on successful completion
                                uploadTask.on('state_changed',
                                    (snapshot) => {
                                        // Observe state change events such as progress, pause, and resume
                                        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                                        const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                                        console.log('Upload is ' + progress + '% done');
                                        switch (snapshot.state) {
                                            case 'paused':
                                                console.log('Upload is paused');
                                                break;
                                            case 'running':
                                                console.log('Upload is running');
                                                break;
                                        }
                                    },
                                    (error) => {
                                        // Handle unsuccessful uploads
                                    },
                                    () => {
                                        // Handle successful uploads on complete
                                        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                                        getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
                                            console.log('File available at', downloadURL);
                                            //Data Master Wisata
                                            //Update Wisata
                                            let DataWIsata = {
                                                NamaWisata: document.getElementById('namaWisata').value,
                                                HargaDewasa: document.getElementById('tiketDewasa').value,
                                                StatusWisata: DataTempWisata.StatusWisata,
                                                HargaAnak: document.getElementById('tiketAnak').value,
                                                AlamatWisata: document.getElementById('alamat').value,
                                                TanggalBuat: DataTempWisata.TanggalBuat,
                                                TanggalUpdate: new Date().toString("ID"),
                                                fotoWisata: downloadURL,
                                                DeskripsiWisata: document.getElementById('deskripsi').value,
                                                Longlitude: document.getElementById('longlitude').value,
                                                Latitude: document.getElementById('latitude').value
                                            }
                                            if (DataTempWisata.StatusWisata == 1) {
                                                const updateWisata = {};
                                                updateWisata['/Master-Data-Wisata/' + CodeIDWisata] = DataWIsata;
                                                update(ref(db), updateWisata);
                                            }


                                            //Update Mitra
                                            let DataMitraa = {
                                                NamaMitra: document.getElementById('NamaMitra').value,
                                                EmailMitra: document.getElementById('EmailWisata').value,
                                                StatusMitra: DataTempMitra.StatusMitra,
                                                TelefonMitra: document.getElementById('telefonMitra').value + "",
                                                TanggalBuat: DataTempMitra.TanggalBuat,
                                                TanggalUpdate: new Date().toString("ID")
                                            }
                                            const updateMitra = {};
                                            updateMitra['/Master-Data-Mitra/' + CodeIDMitra] = DataMitraa;
                                            update(ref(db), updateMitra);

                                        });
                                    }
                                );

                                let dataSessionWisata = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value
                                };
                                $.ajax({
                                    url: '<?= base_url() ?>/Mitra/UpNameProfileWisata',
                                    type: "POST",
                                    data: dataSessionWisata,
                                    dataType: "JSON"
                                }).done((result) => {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href = "<?= base_url() ?>/Edit-profile"
                                        }
                                    })
                                })


                            }



                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Kolom pengisian Tidak Boleh Kosong!'
                            })
                        }

                    }

                })
            })
        <?php } ?>

        <?php if (session()->get('Jenis') == "Mitra-Hotel") { ?>


            var indexz;
            var fileEditTemps;

            var parseJsonHotel = [];
            var parseJsonPartner = [];
            var parseJsonEmailPartner = [];
            var DataTempMitra = {};
            var DataTempHotel = {}

            $('#alertJenisKendaraan').hide()
            $('#alertStatusNonAktif').hide()
            $('#hapusDetails').hide()
            $('#EditDetails').hide()
            $('#nonaktifdata').hide()
            $('#aktifdata').hide()

            const starCountRef = ref(db, 'Master-Data-Hotel/');
            onValue(starCountRef, (snapshot) => {
                const data = snapshot.val();
                const keys = Object.keys(data);
                for (const isi in keys) {
                    const ValueItem = ref(db, 'Master-Data-Hotel/' + keys[isi]);
                    onValue(ValueItem, (kontenn) => {


                    })
                }

            });

            const ValueItem = ref(db, 'Master-Data-Hotel/<?= session()->get('IDKelola') ?>');
            onValue(ValueItem, (kontenn) => {

                if (kontenn.val().StatusHotel == 1) {
                    $('#btnCancelImage').show()
                    $('#tambahDetails').show()
                    $('#blockData').hide()
                    $('#alertStatusNonAktif').hide()
                    $('#AddImage').show()
                    $('#BlockImagess').hide()
                    document.getElementById('AddImage').src = kontenn.val().fotoHotel
                } else {
                    $('#btnCancelImage').hide()
                    $('#tambahDetails').hide()
                    document.getElementById('namaHotel').readOnly = true
                    document.getElementById('alamat').readOnly = true
                    document.getElementById('deskripsi').readOnly = true
                    $('#alertStatusNonAktif').show()
                    $('#blockData').hide()
                    $('#tambahDataDetail').hide()
                    $('#AddImage').hide()
                    document.getElementById('BlockImagess').src = kontenn.val().fotoHotel
                }
                document.getElementById('namaHotel').value = kontenn.val().NamaHotel
                document.getElementById('alamat').value = kontenn.val().AlamatHotel
                document.getElementById('deskripsi').value = kontenn.val().DeskripsiHotel
                document.getElementById('latitude').value = kontenn.val().Latitude
                document.getElementById('longlitude').value = kontenn.val().Longlitude

                if (Boolean(kontenn.val().fotoHotel) == true) {



                    $('.image-title').hide()
                    $('#NoneImage').hide()
                    $('.image-upload-wrap').hide();
                } else {
                    $('#btnCancelImage').hide()

                    $('.image-title').hide()
                    $('#NoneImage').show()
                    $('.image-upload-wrap').show();
                }
                DataTempHotel = kontenn.val()

                mapboxgl.accessToken = 'pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw';
                const coordinates = document.getElementById('coordinates');
                const map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)],
                    zoom: 10
                });



                if (kontenn.val().StatusHotel == 1) {
                    const marker = new mapboxgl.Marker({
                            draggable: true
                        })
                        .setLngLat([Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)])
                        .addTo(map);

                    function onDragEnd() {
                        const lngLat = marker.getLngLat();
                        coordinates.style.display = 'block';
                        // coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
                        document.getElementById('latitude').value = lngLat.lat
                        document.getElementById('longlitude').value = lngLat.lng

                        $.ajax({
                            url: `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?worldview=cn&access_token=pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw`,
                            dataType: "JSON"
                        }).done(result => {
                            $("#alamat").val(result.features[0].place_name)
                        })

                    }

                    marker.on('dragend', onDragEnd);
                } else {
                    const marker = new mapboxgl.Marker({
                            draggable: false
                        })
                        .setLngLat([Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)])
                        .addTo(map);
                }



                // parseJsonAdmin.push((keys[isi]))
            })

            const ValueItemMitra = ref(db, 'Master-Data-Mitra/<?= session()->get('Id') ?>');
            onValue(ValueItemMitra, (kontenn) => {
                document.getElementById('NamaMitra').value = kontenn.val().NamaMitra
                document.getElementById('EmailWisata').value = kontenn.val().EmailMitra
                document.getElementById('telefonMitra').value = kontenn.val().TelefonMitra
                DataTempMitra = kontenn.val();
                // console.log(DataTempMitra)
            })

            document.getElementById('submitData').addEventListener('click', function() {

                // console.log(DataTempMitra.StatusMitra)

                Swal.fire({
                    title: 'Apa anda yakin?',
                    text: "Menyimpan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {


                        let idData = ['NamaMitra', 'EmailWisata', 'telefonMitra', 'namaHotel', 'alamat', 'deskripsi'];
                        let jumlah = 0;
                        const fileupload = $('#uploadFilee').prop('files')[0];

                        for (let i = 0; i < idData.length; i++) {
                            if (document.getElementById(idData[i]).value == "") {
                                $('#' + idData[i]).addClass('is-invalid')
                                jumlah++;
                            } else {
                                $('#' + idData[i]).removeClass('is-invalid')
                            }
                        }
                        if (jumlah == 0) {

                            var CodeIDHotel = "<?= session()->get('IDKelola') ?>";
                            var CodeIDMitras = "<?= session()->get('Id') ?>";


                            if (Boolean(fileupload) == false) {
                                //Data Master Hotel
                                let dataUpHotel = {
                                    NamaHotel: document.getElementById('namaHotel').value,
                                    AlamatHotel: document.getElementById('alamat').value,
                                    DeskripsiHotel: document.getElementById('deskripsi').value,
                                    StatusHotel: DataTempHotel.StatusHotel,
                                    TanggalBuat: DataTempHotel.TanggalBuat,
                                    TanggalUpdate: new Date().toString("ID"),
                                    fotoHotel: DataTempHotel.fotoHotel,
                                    Longlitude: document.getElementById('longlitude').value,
                                    Latitude: document.getElementById('latitude').value
                                }

                                if (DataTempHotel.StatusHotel == 1) {
                                    const updateHotels = {};
                                    updateHotels['/Master-Data-Hotel/' + CodeIDHotel] = dataUpHotel;
                                    update(ref(db), updateHotels);
                                }

                                //Update Mitra
                                let dataMitraas = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value,
                                    StatusMitra: DataTempMitra.StatusMitra,
                                    TelefonMitra: document.getElementById('telefonMitra').value + "",
                                    TanggalBuat: DataTempMitra.TanggalBuat,
                                    TanggalUpdate: new Date().toString("ID")
                                }

                                const updateMItra = {};
                                updateMItra['/Master-Data-Mitra/' + CodeIDMitras] = dataMitraas;
                                update(ref(db), updateMItra);

                                let dataSessionHotel = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value
                                };
                                $.ajax({
                                    url: '<?= base_url() ?>/Mitra/UpNameProfileHotel',
                                    type: "POST",
                                    data: dataSessionHotel,
                                    dataType: "JSON"
                                }).done((result) => {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href = "<?= base_url() ?>/Edit-profile"
                                        }
                                    })
                                })




                            } else {
                                const storageRef = refImage(storage, 'images-hotel/' + new Date().getTime() + '-' + fileupload.name);

                                // Upload the file and metadata
                                const uploadTask = uploadBytesResumable(storageRef, fileupload);

                                // Register three observers:
                                // 1. 'state_changed' observer, called any time the state changes
                                // 2. Error observer, called on failure
                                // 3. Completion observer, called on successful completion
                                uploadTask.on('state_changed',
                                    (snapshot) => {
                                        // Observe state change events such as progress, pause, and resume
                                        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                                        const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                                        console.log('Upload is ' + progress + '% done');
                                        switch (snapshot.state) {
                                            case 'paused':
                                                console.log('Upload is paused');
                                                break;
                                            case 'running':
                                                console.log('Upload is running');
                                                break;
                                        }
                                    },
                                    (error) => {
                                        // Handle unsuccessful uploads
                                    },
                                    () => {
                                        // Handle successful uploads on complete
                                        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                                        getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {

                                            console.log('File available at', downloadURL);
                                            //Data Master Hotel
                                            let dataUpHotel = {
                                                NamaHotel: document.getElementById('namaHotel').value,
                                                AlamatHotel: document.getElementById('alamat').value,
                                                DeskripsiHotel: document.getElementById('deskripsi').value,
                                                StatusHotel: DataTempHotel.StatusHotel,
                                                TanggalBuat: DataTempHotel.TanggalBuat,
                                                TanggalUpdate: new Date().toString("ID"),
                                                fotoHotel: downloadURL,
                                                Longlitude: document.getElementById('longlitude').value,
                                                Latitude: document.getElementById('latitude').value
                                            }
                                            if (DataTempHotel.StatusHotel == 1) {
                                                const updateHotels = {};
                                                updateHotels['/Master-Data-Hotel/' + CodeIDHotel] = dataUpHotel;
                                                update(ref(db), updateHotels);
                                            }


                                            //Update Mitra
                                            let dataMitraas = {
                                                NamaMitra: document.getElementById('NamaMitra').value,
                                                EmailMitra: document.getElementById('EmailWisata').value,
                                                StatusMitra: DataTempMitra.StatusMitra,
                                                TelefonMitra: document.getElementById('telefonMitra').value + "",
                                                TanggalBuat: DataTempMitra.TanggalBuat,
                                                TanggalUpdate: new Date().toString("ID")
                                            }

                                            const updateMItra = {};
                                            updateMItra['/Master-Data-Mitra/' + CodeIDMitras] = dataMitraas;
                                            update(ref(db), updateMItra);


                                        });
                                    }
                                );

                                let dataSessionHotel = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value
                                };
                                $.ajax({
                                    url: '<?= base_url() ?>/Mitra/UpNameProfileHotel',
                                    type: "POST",
                                    data: dataSessionHotel,
                                    dataType: "JSON"
                                }).done((result) => {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href = "<?= base_url() ?>/Edit-profile"
                                        }
                                    })
                                })


                            }



                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Kolom pengisian Tidak Boleh Kosong!'
                            })
                        }

                    }

                })
            })


        <?php } ?>
        <?php if (session()->get('Jenis') == "Mitra-Rental") { ?>

            var localDataDetail = [];
            var indexz;
            var fileEditTemps;

            $('#blockData').hide()
            $('#nonaktifdata').hide()
            $('#aktifdata').hide()
            $('#hapusDetails').hide()
            $('#EditDetails').hide()

            var parseJsonRental = [];
            var parseJsonPartner = [];
            var DataTempMitra = {};
            var DataTempRental = {};
            var parseJsonEmailPartner = [];

            const starCountRef = ref(db, 'Master-Data-Rental/');
            onValue(starCountRef, (snapshot) => {
                const data = snapshot.val();
                const keys = Object.keys(data);
                for (const isi in keys) {
                    const ValueItem = ref(db, 'Master-Data-Rental/' + keys[isi]);
                    onValue(ValueItem, (kontenn) => {

                        parseJsonRental.push((keys[isi]))
                    })
                }

            });

            const ValueItem = ref(db, 'Master-Data-Rental/<?= session()->get('IDKelola') ?>');
            onValue(ValueItem, (kontenn) => {

                if (kontenn.val().StatusRental == 1) {
                    $('#btnCancelImage').show()
                    $('#blockData').hide()
                    $('#alertStatusNonAktif').hide()
                    $('#AddImage').show()
                    $('#BlockImagess').hide()
                    document.getElementById('AddImage').src = kontenn.val().fotoRental
                } else {
                    $('#btnCancelImage').hide()
                    document.getElementById('namaRental').readOnly = true
                    document.getElementById('alamat').readOnly = true
                    document.getElementById('deskripsi').readOnly = true
                    $('#alertStatusNonAktif').show()
                    $('#blockData').hide()
                    $('#tambahDataDetail').hide()
                    $('#AddImage').hide()
                    document.getElementById('BlockImagess').src = kontenn.val().fotoRental
                }
                document.getElementById('namaRental').value = kontenn.val().NamaRental
                document.getElementById('alamat').value = kontenn.val().AlamatRental
                document.getElementById('deskripsi').value = kontenn.val().DeskripsiRental
                document.getElementById('latitude').value = kontenn.val().Latitude
                document.getElementById('longlitude').value = kontenn.val().Longlitude

                if (Boolean(kontenn.val().fotoRental) == true) {



                    $('.image-title').hide()
                    $('#NoneImage').hide()
                    $('.image-upload-wrap').hide();
                } else {
                    $('#btnCancelImage').hide()

                    $('.image-title').hide()
                    $('#NoneImage').show()
                    $('.image-upload-wrap').show();
                }
                DataTempRental = kontenn.val()

                mapboxgl.accessToken = 'pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw';
                const coordinates = document.getElementById('coordinates');
                const map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)],
                    zoom: 10
                });



                if (kontenn.val().StatusRental == 1) {
                    const marker = new mapboxgl.Marker({
                            draggable: true
                        })
                        .setLngLat([Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)])
                        .addTo(map);

                    function onDragEnd() {
                        const lngLat = marker.getLngLat();
                        coordinates.style.display = 'block';
                        // coordinates.innerHTML = `Longitude: ${lngLat.lng}<br />Latitude: ${lngLat.lat}`;
                        document.getElementById('latitude').value = lngLat.lat
                        document.getElementById('longlitude').value = lngLat.lng

                        $.ajax({
                            url: `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?worldview=cn&access_token=pk.eyJ1Ijoic3VsdGFuMTIzIiwiYSI6ImNrZ3RmZHl3ejE5bTcyemxxc3BqeG5rdzcifQ.vOHwk-VTL573m2d6BfpLPw`,
                            dataType: "JSON"
                        }).done(result => {
                            $("#alamat").val(result.features[0].place_name)
                        })

                    }

                    marker.on('dragend', onDragEnd);
                } else {
                    const marker = new mapboxgl.Marker({
                            draggable: false
                        })
                        .setLngLat([Number(kontenn.val().Longlitude), Number(kontenn.val().Latitude)])
                        .addTo(map);
                }



                // parseJsonAdmin.push((keys[isi]))
            })

            const ValueItemMitra = ref(db, 'Master-Data-Mitra/<?= session()->get('Id') ?>');
            onValue(ValueItemMitra, (kontenn) => {
                document.getElementById('NamaMitra').value = kontenn.val().NamaMitra
                document.getElementById('EmailWisata').value = kontenn.val().EmailMitra
                document.getElementById('telefonMitra').value = kontenn.val().TelefonMitra
                DataTempMitra = kontenn.val();
                // console.log(DataTempMitra)
            })

            document.getElementById('submitDataa').addEventListener('click', function() {

                Swal.fire({
                    title: 'Apa anda yakin?',
                    text: "Menyimpan data ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let idData = ['NamaMitra', 'EmailWisata', 'telefonMitra', 'namaRental', 'alamat', 'deskripsi'];
                        let jumlah = 0;
                        const fileupload = $('#uploadFilee').prop('files')[0];

                        for (let i = 0; i < idData.length; i++) {
                            if (document.getElementById(idData[i]).value == "") {
                                $('#' + idData[i]).addClass('is-invalid')
                                jumlah++;
                            } else {
                                $('#' + idData[i]).removeClass('is-invalid')
                            }
                        }

                        if (jumlah == 0) {
                            var CodeIDRental = "<?= session()->get('IDKelola') ?>";
                            var CodeIDMitrasss = "<?= session()->get('Id') ?>";


                            if (Boolean(fileupload) == false) {
                                //Data Master Rental
                                let dataRentals = {
                                    NamaRental: document.getElementById('namaRental').value,
                                    AlamatRental: document.getElementById('alamat').value,
                                    DeskripsiRental: document.getElementById('deskripsi').value,
                                    StatusRental: DataTempRental.StatusRental,
                                    TanggalBuat: DataTempRental.TanggalBuat,
                                    TanggalUpdate: new Date().toString("ID"),
                                    fotoRental: DataTempRental.fotoRental,
                                    Longlitude: document.getElementById('longlitude').value,
                                    Latitude: document.getElementById('latitude').value
                                }

                                if (DataTempRental.StatusRental == 1) {
                                    const updateRental = {};
                                    updateRental['/Master-Data-Rental/' + CodeIDRental] = dataRentals;
                                    update(ref(db), updateRental);
                                }

                                let dataMitraas = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value,
                                    StatusMitra: DataTempMitra.StatusMitra,
                                    TelefonMitra: document.getElementById('telefonMitra').value + "",
                                    TanggalBuat: DataTempMitra.TanggalBuat,
                                    TanggalUpdate: new Date().toString("ID")
                                }

                                const updateMItra = {};
                                updateMItra['/Master-Data-Mitra/' + CodeIDMitrasss] = dataMitraas;
                                update(ref(db), updateMItra);
                                const updateDetailss = {};

                                let dataSessionRental = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value
                                };
                                $.ajax({
                                    url: '<?= base_url() ?>/Mitra/UpNameProfileRental',
                                    type: "POST",
                                    data: dataSessionRental,
                                    dataType: "JSON"
                                }).done((result) => {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href = "<?= base_url() ?>/Edit-profile"
                                        }
                                    })
                                })


                            } else {
                                const storageRef = refImage(storage, 'images-rental/' + new Date().getTime() + '-' + fileupload.name);

                                // Upload the file and metadata
                                const uploadTask = uploadBytesResumable(storageRef, fileupload);

                                // Register three observers:
                                // 1. 'state_changed' observer, called any time the state changes
                                // 2. Error observer, called on failure
                                // 3. Completion observer, called on successful completion
                                uploadTask.on('state_changed',
                                    (snapshot) => {
                                        // Observe state change events such as progress, pause, and resume
                                        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                                        const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                                        console.log('Upload is ' + progress + '% done');
                                        switch (snapshot.state) {
                                            case 'paused':
                                                console.log('Upload is paused');
                                                break;
                                            case 'running':
                                                console.log('Upload is running');
                                                break;
                                        }
                                    },
                                    (error) => {
                                        // Handle unsuccessful uploads
                                    },
                                    () => {
                                        // Handle successful uploads on complete
                                        // For instance, get the download URL: https://firebasestorage.googleapis.com/...
                                        getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
                                            console.log('File available at', downloadURL);
                                            //Data Master Rental
                                            let dataRentals = {
                                                NamaRental: document.getElementById('namaRental').value,
                                                AlamatRental: document.getElementById('alamat').value,
                                                DeskripsiRental: document.getElementById('deskripsi').value,
                                                StatusRental: DataTempRental.StatusRental,
                                                TanggalBuat: DataTempRental.TanggalBuat,
                                                TanggalUpdate: new Date().toString("ID"),
                                                fotoRental: downloadURL,
                                                Longlitude: document.getElementById('longlitude').value,
                                                Latitude: document.getElementById('latitude').value
                                            }

                                            if (DataTempRental.StatusRental == 1) {
                                                const updateRental = {};
                                                updateRental['/Master-Data-Rental/' + CodeIDRental] = dataRentals;
                                                update(ref(db), updateRental);
                                            }

                                            let dataMitraas = {
                                                NamaMitra: document.getElementById('NamaMitra').value,
                                                EmailMitra: document.getElementById('EmailWitra').value,
                                                StatusMitra: DataTempMitra.StatusMitra,
                                                TelefonMitra: document.getElementById('telefonMitra').value + "",
                                                TanggalBuat: DataTempMitra.TanggalBuat,
                                                TanggalUpdate: new Date().toString("ID")
                                            }

                                            const updateMItra = {};
                                            updateMItra['/Master-Data-Mitra/' + CodeIDMitrasss] = dataMitraas;
                                            update(ref(db), updateMItra);

                                        });
                                    }
                                );

                                let dataSessionRental = {
                                    NamaMitra: document.getElementById('NamaMitra').value,
                                    EmailMitra: document.getElementById('EmailWisata').value
                                };
                                $.ajax({
                                    url: '<?= base_url() ?>/Mitra/UpNameProfileRental',
                                    type: "POST",
                                    data: dataSessionRental,
                                    dataType: "JSON"
                                }).done((result) => {
                                    Swal.fire({
                                        title: 'Berhasil',
                                        text: 'Data berhasil tersimpan.',
                                        icon: 'success',
                                        showCancelButton: false,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Okey'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.href = "<?= base_url() ?>/Edit-profile"
                                        }
                                    })
                                })
                            }

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Kolom pengisian Tidak Boleh Kosong!'
                            })
                        }


                    }
                })

            })


        <?php } ?>
    </script>

    <script>
        $('#btnCancelImage').hide()
        $('#AddImage').hide()
        $('.image-title').hide()
        $('#NoneImage').show()

        function KeluarForm() {
            Swal.fire({
                title: 'Apa kamu yakin?',
                text: "Meninggalkan halaman ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "<?= base_url() ?>/Mitra-Wisata"
                }
            })
        }

        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);

                    $('#AddImage').show()
                    $('#NoneImage').hide()

                    document.getElementById('AddImage').src = e.target.result;
                };
                $('#btnCancelImage').show()
                $('.image-title').show()
                reader.readAsDataURL(input.files[0]);


            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            document.getElementById("uploadFilee").value = "";
            $('#btnCancelImage').hide()
            $('#AddImage').hide()
            $('#NoneImage').show()
            $('.image-title').hide()
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });






        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>
</body>

</html>